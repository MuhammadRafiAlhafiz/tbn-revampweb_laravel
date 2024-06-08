<?php
use App\Models\Choose;
use App\Models\Experience;
use App\Models\Page;
use App\Models\Program;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', function () {
    $page = Page::all();
    $partner = Choose::all();
    $programs = Program::all();
    return view('home', ['page' => $page, 'partner' => $partner, 'programs' => $programs]);
})->name('home');


Route::get('/home', function () {
    return view('pages.profile.profile');
})->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('/about', function () {
    return view('pages.about.about');
})->name('about');

Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('pages.blog.blog', ['blogs' => $blogs]);
})->name('blog');

Route::get('/blog-detail/{id}', function ($id) {
    $blogdetail = Blog::findOrFail($id);
    return view('pages.blog.blog-detail', ['blogdetail' => $blogdetail]);
})->name('blog-detail');


Route::get('/event-detail/{id}', function ($id) {
    $program = Program::findOrFail($id);
    return view('pages.event.event-detail', ['program' => $program]);
})->name('event-detail');


Route::get('/contact', function () {
    return view('pages.contact.contact');
})->name('contact');

Route::get('/thanks', function () {
    return view('pages.contact.thanks');
})->name('thanks');

Route::get('/event', function () {
    $programs = Program::all();
    return view('pages.event.event', ['programs' => $programs]);
})->name('event');

Route::get('/event-detail/{id}', function ($id) {
    $program = Program::findOrFail($id);
    return view('pages.event.event-detail', ['program' => $program]);
})->name('event-detail');

Route::get('/register', function () {
    return view('pages.event.event-detail');
})->middleware('not.authenticated')->name('register');


Route::get('/event-feedback/{id}', function ($id) {
    $experiences = Experience::where('id', $id)->get(); // Mengambil semua pengalaman yang terkait dengan program tertentu
$programs = Program::where('id', '!=', $id)->limit(5)->get(); // Mengambil beberapa program lainnya, misalnya 5 program
$program = Program::find($id); // Mengambil detail program yang diidentifikasi oleh $id
return view('pages.event.event-feedback', compact('experiences', 'programs', 'program'));

})->name('event-feedback');

Route::get('/event-register', function () {
    return view('pages.event.event-register');
})->name('event.register');

Route::get('/login', function () {
    return view('pages.login.login');
})->name('login');

Route::get('/sign', function () {
    return view('pages.login.sign');
})->name('sign');

Route::get('/email-confirm', function () {
    return view('pages.login.email-confirm');
})->name('email-confirm');

Route::get('/profile', function () {
    return view('pages.profile.profile');
})->name('profile');



Route::get('/profile-edit', function () {
    return view('pages.profile.profile-edit');
})->name('profile-edit');

Route::get('/forgot-password', function () {
    return view('pages.profile.forgot-password');
})->name('forgot-password');

Route::get('/register', function () {
    return view('pages.register.register');
})->name('register');

// Route::post('/register', [ParticipantController::class, 'store'])->name('register.post');

Route::get('/history-event', function () {
    return view('pages.profile.history-event');
})->name('history-event');


Route::get('/payment', function () {
    return view('pages.register.payment');
})->name('payment');

Route::post('/register-user', [RegisterController::class, 'addUser'])->name('add-user');

Route::post('/register-event', [ParticipantController::class, 'addEvent'])->name('register-event');
Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Route untuk mengedit profil pengguna
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile-edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile-update');

Route::post('/participant/addEvent', [ParticipantController::class, 'addEvent'])->name('participant.addEvent');

Route::get('/register/{id}', function ($id) {
    // Fetch program details based on the provided ID if needed
    $program = Program::findOrFail($id);
    // Pass the program details to the registration view if needed
    return view('pages.register.register', ['program' => $program]);
})->name('register');

Route::post('participants/{id}', 'ParticipantController@addEvent');
Route::post('/update-profile', [RegisterController::class, 'updateProfile'])->name('update-profile');

Route::post('/experiences', [ExperienceController::class, 'store'])->name('experience.store');

Route::resource('experience', ExperienceController::class);