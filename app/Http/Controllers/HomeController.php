<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;

class HomeController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();

        return view('welcome', [
            'contactInfo' => $contactInfo,
        ]);
    }
}
