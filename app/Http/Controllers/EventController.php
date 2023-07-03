<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('date', '>=', Carbon::now())->paginate(20);

        return view('events', [
            'events' => $events,
        ]);
    }

    public function create()
    {
        return view('create-event');
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => ['string', 'required'],
            'url' => ['url', 'required'],
            'date' => ['string', 'required'],
            'type' => ['string', 'required'],
            'entrance' => ['string', 'required'],
        ]);

        $event = Event::create([
            'name' => $fields['name'],
            'url' => $fields['url'],
            'date' => $fields['date'],
            'type' => $fields['type'],
            'entrance' => $fields['entrance'],
            'user_id' => $request->user()->id,
        ]);

        return redirect()->to('/events')->with('success', 'Event submitted successfully');
    }
}
