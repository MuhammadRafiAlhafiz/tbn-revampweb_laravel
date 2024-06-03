<?php
use App\Models\Choose;
use App\Models\Page;
use App\Models\Program;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
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
    return view('home', ['page' => $page, 'partner' => $partner]);
})->name('home');

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


Route::get('/event-feedback/{id}', function ($id) {
    $program = Program::findOrFail($id);
 
    return view('pages.event.event-feedback', ['program' => $program]);
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

Route::post('/register', [ParticipantController::class, 'store'])->name('register.post');


Route::get('/payment', function () {
    return view('pages.register.payment');
})->name('payment');

Route::get('/regos', function () {
    return view('pages.register.payment');
})->name('payment');
