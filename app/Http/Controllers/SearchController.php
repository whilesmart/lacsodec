<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Cso;
use App\Models\Event;
use App\Models\ExpertProfile;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->query('search', null);
        $filter = $request->query('filter', null);
        $csos = Cso::where('name', 'LIKE', "%{$search}%")->orWhere('domain', 'LIKE', "%{$search}%")->orWhere('vision_statement', 'LIKE', "%{$search}%")->where('status', 'verified')->get();
        $experts = ExpertProfile::with('user')->whereHas('user', function ($query) use ($search) {
            $query->where('name', 'LIKE', "%{$search}%")->where('status', 'approved');
        })->get();
        $events = Event::where('name', 'LIKE', "%{$search}%")->orWhere('details', 'LIKE', "%{$search}%")->get();
        $articles = Article::where('title', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")->get();

        return view('search-results', [
            'filter' => $filter,
            'search' => $search,
            'csos' => $csos,
            'experts' => $experts,
            'events' => $events,
            'articles' => $articles,
        ]);
    }
}
