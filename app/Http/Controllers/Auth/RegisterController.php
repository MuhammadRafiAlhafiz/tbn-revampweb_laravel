<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function updateProfile(Request $request)
{
    // Validasi data yang diterima dari formulir
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'no_telp' => ['required', 'string', 'regex:/^[0-9]+$/', 'max:15', 'unique:users'], // Assuming max length of 15 digits for phone number
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Ambil ID pengguna yang sedang login
    $userId = Auth::id();

    // Lakukan pembaruan data pengguna di dalam database
    $user = User::find($userId);
    $user->name = $request->input('name');
    $user->password = $request->input('password');
    $user->email = $request->input('email');
    $user->no_telp = $request->input('no_telp');
    // Tambahkan pembaruan untuk email dan nomor telepon jika perlu
    $user->save();

    // Tampilkan pesan konfirmasi kepada pengguna
    return redirect()->route('profile')->with('success', 'Profile successfully updated.');
}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_telp' => ['required', 'string', 'regex:/^[0-9]+$/', 'max:15', 'unique:users'], // Assuming max length of 15 digits for phone number
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function addUser(Request $request)
    {
        // do smth (insert user to database)
        user::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'no_telp' => $request['no_telp'],
            'password' => Hash::make($request['password']),

        ]);

        if ($request) {
            // berhasil add user

            return view('pages.login.login');

        } else {
            // gagal add user
            return dd('fail');
        }
    }
}
