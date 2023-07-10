<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(20);

        return view('events', [
            'events' => $events,
        ]);
    }

    public function createRegistration($event)
    {
        $event = Event::findOrFail($event);

        return view('event-participate', [
            'event' => $event,
        ]);
    }

    public function participate(Request $request, $event)
    {
        $fields = $request->validate([
            'name' => ['string', 'required'],
            'email' => ['email', 'required'],
            'phone' => ['string', 'nullable'],
            'other_details' => ['string', 'nullable'],
        ]);

        $eventRegistration = EventRegistration::create([
            'event_id' => $event,
            'name' => $fields['name'],
            'email' => $fields['email'],
            'phone' => $fields['phone'] ?? null,
            'other_details' => $fields['other_details'] ?? null,
        ]);

        return redirect('/events')->with('success', 'you have successfuly submited your participation request');
    }
}
