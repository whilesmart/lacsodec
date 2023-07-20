<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ContactInfo;
use App\Models\Cso;
use App\Models\Event;
use App\Models\ExpertProfile;

class HomeController extends Controller
{
    public function index()
    {
        $latestExperts = ExpertProfile::with(['user'])->where('status', 'approved')->orderBy('created_at', 'desc')->limit(4)->get();
        $latestCsos = Cso::where('status', 'verified')->orderBy('created_at', 'desc')->limit(4)->get();
        $latestArticles = Article::orderBy('created_at', 'desc')->limit(4)->get();
        $latestEvent = Event::with(['user'])->orderBy('created_at', 'desc')->first();
        $contactInfo = ContactInfo::first();
        $members = ExpertProfile::where('status', 'approved')->count();
        $events = Event::count();
        $trainings = Event::where('type', 'training')->count();
        $csos = Cso::where('status', 'verified')->count();

        return view('welcome', [
            'latestExperts' => $latestExperts,
            'latestCsos' => $latestCsos,
            'latestArticles' => $latestArticles,
            'latestEvent' => $latestEvent,
            'contactInfo' => $contactInfo,
            'members' => $members,
            'events' => $events,
            'trainings' => $trainings,
            'csos' => $csos,
        ]);
    }
}
