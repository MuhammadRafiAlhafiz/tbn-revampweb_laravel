<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AboutUsMail;
use Illuminate\Support\Facades\Mail;

class AboutUsController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validasi input jika diperlukan
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'your_message' => 'nullable|string',
        ]);

        try {
            // Kirim email
            Mail::to('your_email@gmail.com')->send(new AboutUsMail($validated));

            // Redirect atau tampilkan pesan sukses
            return redirect()->route('thanks')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return back()->withErrors(['error' => 'Failed to send message. Please try again.'])->withInput();
        }
    }
}
