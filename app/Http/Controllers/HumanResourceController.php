<?php

namespace App\Http\Controllers;

use App\Models\ExpertProfile;

class HumanResourceController extends Controller
{
    public function index()
    {
        $experts = ExpertProfile::with('user')->where('status', 'approved')->where('isHumanResource', true)->paginate(20);

        return view('human-resource-directory', [
            'experts' => $experts,
        ]);
    }
}
