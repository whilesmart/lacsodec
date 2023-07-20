<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        Newsletter::subscribeOrUpdate($request->email);

        return redirect()->back()->with('success', 'You have subscribed to our newsletter');
    }
}
