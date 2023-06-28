<?php

namespace App\Http\Controllers;

use App\Models\ExpertProfile;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = ExpertProfile::with('user')->paginate(20);
        return view('expert-directory', [
            'experts' => $experts
        ]);
    }

    public function show($expert)
    {
        $expert = ExpertProfile::with('user')->findOrFail($expert);
        $otherExperts = ExpertProfile::with('user')->where('id', '!=', $expert->id)->limit(4)->get();
        return view('expert-directory-details', [
            'expert' => $expert,
            'otherExperts' => $otherExperts
        ]);
    }

    public function create(Request $request)
    {
        return view('register-expert');
    }

    public function store(Request $request)
    {
        $user = $request->user();
        if(ExpertProfile::where('user_id', $user->id)->count() > 0) {
            return redirect()->back()->with('message', 'You have already submitted your details to become an expert');
        }
        $fields = $request->validate([
            'location' => ['required', 'string'],
            'details' => ['required', 'string'],
            'birthday' => ['required', 'string'],
            'sex' => ['required', 'string'],
            'birth_place' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'language' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'company' => ['required', 'string'],
            'work_duration' => ['required', 'string'],
            'certification' => ['required', 'string'],
            'certification_date' => ['required', 'string'],
            'position' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
            'certification_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048'],
        ]);

        $image_path = $request->file('image')->store();
        $certification_image_path = $request->file('certification_image')->store();

        $expert = ExpertProfile::create([
            'user_id' => $user->id,
            'location' => $fields['location'],
            'details' => $fields['details'],
            'birthday' => $fields['birthday'],
            'sex' => $fields['sex'],
            'birth_place' => $fields['birth_place'],
            'nationality' => $fields['nationality'],
            'company' => $fields['company'],
            'work_duration' => $fields['work_duration'],
            'certification' => $fields['certification'],
            'certification_date' => $fields['certification_date'],
            'position' => $fields['position'],
            'image' => '/storage/'.$image_path,
            'certification_image' => '/storage/'.$certification_image_path,
        ]);

        return redirect()->to('/expert-directory')->with('success', 'you have successfuly submited your registration. Please wait for admin approval');
    }
}
