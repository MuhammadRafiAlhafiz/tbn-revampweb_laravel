<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the user is authenticated
        if ($user) {
            // Pass the user data to the view
            return view('pages.profile.profile', compact('user'));
        } else {
            // Handle the case when the user is not authenticated
            // You can redirect the user to the login page or show an error message
            return redirect()->route('login');
        }
    }
    public function edit()
{
    // Ambil data pengguna yang sedang login
    $user = Auth::user();

    // Kirim data pengguna ke halaman edit profil
    return view('pages.profile.profile-edit', compact('user'));
}
}