<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\Country;
use App\Models\Event;
use App\Models\EventRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('date', '>=', Carbon::now())->paginate(20);

        return view('events', [
            'events' => $events,
        ]);
    }

    public function createRegistration($event)
    {
        $event = Event::findOrFail($event);
        $countries = Country::all();

        return view('event-participate', [
            'event' => $event,
            'countries' => $countries,
        ]);
    }

    public function participate(Request $request, $event)
    {
        $fields = $request->validate([
            'name' => ['string', 'required'],
            'email' => ['email', 'required'],
            'phone' => ['string', 'nullable'],
            'other_details' => ['string', 'nullable'],
            'sex' => ['string', 'required'],
            'country' => ['string', 'required'],
            'organization' => ['string', 'required'],
        ]);

        $eventRegistration = EventRegistration::create([
            'event_id' => $event,
            'name' => $fields['name'],
            'email' => $fields['email'],
            'phone' => $fields['phone'] ?? null,
            'other_details' => $fields['other_details'] ?? null,
            'sex' => $fields['sex'],
            'country' => $fields['country'],
            'organization' => $fields['organization'],
        ]);

        $contactInfo = ContactInfo::first();

        Mail::send(
            'mail.event',
            [
                'name' => $fields['name'],
            ],
            function ($message) use ($contactInfo, $fields) {
                $message->from($contactInfo->listed_email_address);
                $message->to($fields['email'], $fields['name'])
                    ->subject('New event registration');
            }
        );

        return redirect('/events')->with('success', 'you have successfuly submited your participation request');
    }
}
