<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Store message in database
        Message::create($request->all());

        // Send email notification
        Mail::raw("New message from: {$request->name}\nEmail: {$request->email}\nMessage: {$request->message}", function ($message) {
            $message->to(env('MAIL_FROM_ADDRESS'))
                    ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Message sent successfully!');
    }
}


