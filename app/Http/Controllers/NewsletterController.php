<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $fields = $request->validate([
            'email' => ['email', 'required'],
        ]);
        Newsletter::subscribeOrUpdate($fields['email']);

        return redirect()->back()->with('success', 'You have subscribed to our newsletter');
    }
}
