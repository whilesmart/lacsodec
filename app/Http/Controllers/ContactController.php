<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = ContactInfo::first();

        return view('contact-us', [
            'contactInfo' => $contactInfo,
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => ['string', 'required'],
            'phone' => ['string', 'required'],
            'email' => ['email', 'required'],
            'message' => ['string', 'required'],
            'subject' => ['string', 'required'],
        ]);

        $contactInfo = ContactInfo::first();

        Mail::send(
            'mail.mail',
            [
                'name' => $fields['name'],
                'email' => $fields['email'],
                'phone' => $fields['phone'],
                'subject' => $fields['subject'],
                'comment' => $fields['message'],
            ],
            function ($message) use ($contactInfo, $fields) {
                $message->from($contactInfo->listed_email_address);
                $message->to($contactInfo->form_email_address, 'Admin')
                    ->subject($fields['subject']);
            }
        );

        return back()->with('success', 'Your email has been successfully sent');
    }
}
