<?php

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required', // Merubah no_telp menjadi phone_number
            'your_message' => 'required',
        ]);

        // Kirim email
        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number, // Mengubah no_telp menjadi phone_number
            'your_message' => $request->your_message,
        ], function($message) {
            $message->to('hello@tbnalliance.org', 'Admin TBN')->subject('New Contact Form Submission');
        });

        // Redirect kembali ke halaman kontak dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }
}
