<?php

namespace App\Http\Controllers;

use App\Models\Cso;
use App\Models\Event;
use App\Models\ExpertProfile;

class AboutController extends Controller
{
    public function index()
    {
        $members = ExpertProfile::where('status', 'approved')->count();
        $events = Event::count();
        $trainings = Event::where('type', 'training')->count();
        $csos = Cso::where('status', 'verified')->count();

        return view('about-us', [
            'members' => $members,
            'events' => $events,
            'trainings' => $trainings,
            'csos' => $csos,
        ]);
    }
}
