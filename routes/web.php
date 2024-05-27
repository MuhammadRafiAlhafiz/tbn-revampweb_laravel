<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');;

Route::get('/about', function () {
    return view('pages.about.about');
})->name('about');

Route::get('/blog', function () {
    return view('pages.blog.blog');
})->name('blog');

Route::get('/blog-detail1', function () {
    return view('pages.blog.blog-detail1');
})->name('blog-detail1');

Route::get('/blog-detail2', function () {
    return view('pages.blog.blog-detail2');
})->name('blog-detail2');

Route::get('/blog-detail3', function () {
    return view('pages.blog.blog-detail3');
})->name('blog-detail3');

Route::get('/blog-detail4', function () {
    return view('pages.blog.blog-detail4');
})->name('blog-detail4');

Route::get('/blog-detail5', function () {
    return view('pages.blog.blog-detail5');
})->name('blog-detail5');

Route::get('/blog-detail6', function () {
    return view('pages.blog.blog-detail6');
})->name('blog-detail6');

Route::get('/contact', function () {
    return view('pages.contact.contact');
})->name('contact');

Route::get('/thanks', function () {
    return view('pages.contact.thanks');
})->name('thanks');

Route::get('/event', function () {
    return view('pages.event.event');
})->name('event');

Route::get('/event-detail1', function () {
    return view('pages.event.event-detail1');
})->name('event-detail1');

Route::get('/event-detail2', function () {
    return view('pages.event.event-detail2');
})->name('event-detail2');

Route::get('/event-detail3', function () {
    return view('pages.event.event-detail3');
})->name('event-detail3');

Route::get('/event-detail4', function () {
    return view('pages.event.event-detail4');
})->name('event-detail4');

Route::get('/event-feedback1', function () {
    return view('pages.event.event-feedback1');
})->name('event-feedback1');

Route::get('/event-feedback2', function () {
    return view('pages.event.event-feedback2');
})->name('event-feedback2');

Route::get('/event-feedback3', function () {
    return view('pages.event.event-feedback3');
})->name('event-feedback3');

Route::get('/event-feedback4', function () {
    return view('pages.event.event-feedback4');
})->name('event-feedback4');
    
Route::get('/event-register', function () {
    return view('pages.event.event-register');
})->name('event.register');

Route::get('/login', function () {
    return view('pages.login.login');
})->name('login');

Route::get('/sign', function () {
    return view('pages.login.sign');
})->name('sign');

Route::get('/eamil-confirm', function () {
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

Route::get('/payment', function () {
    return view('pages.register.payment');
})->name('payment');

Route::get('/regos', function () {
    return view('pages.register.payment');
})->name('payment');
