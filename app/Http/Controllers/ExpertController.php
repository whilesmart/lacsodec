<?php

namespace App\Http\Controllers;

use App\Models\ExpertProfile;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = ExpertProfile::with('user')->paginate(20);

        return view('expert-directory', [
            'experts' => $experts,
        ]);
    }

    public function show($expert)
    {
        $expert = ExpertProfile::with('user')->findOrFail($expert);
        $otherExperts = ExpertProfile::with('user')->where('id', '!=', $expert->id)->limit(4)->get();

        return view('expert-directory-details', [
            'expert' => $expert,
            'otherExperts' => $otherExperts,
        ]);
    }
}
