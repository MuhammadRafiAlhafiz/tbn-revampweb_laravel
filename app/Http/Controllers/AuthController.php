<?php

// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\Auth\InvalidIdToken;
use Kreait\Firebase\Exception\Auth\UserNotFound;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        $factory = (new Factory())->withServiceAccount(config('firebase-adminsdk'));
        $auth = $factory->createAuth();

        $redirectUrl = url('/login/google/callback');
        $provider = $auth->getProvider('google');

        return redirect($provider->createAuthUrl($redirectUrl));
    }

    public function handleGoogleCallback(Request $request)
    {
        $idTokenString = $request->input('id_token');

        $factory = (new Factory())->withServiceAccount(config('firebase-adminsdk'));
        $auth = $factory->createAuth();

        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');

            // Lakukan tindakan setelah pengguna berhasil login
            // Misalnya, daftarkan atau login pengguna ke dalam sistem Laravel Anda
        } catch (InvalidIdToken $e) {
            // Handle error: Invalid ID token
        } catch (UserNotFound $e) {
            // Handle error: User not found
        }

        // Redirect pengguna ke halaman setelah login
        return redirect('/dashboard');
    }
}
