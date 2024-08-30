<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/', function () {
    return view('home', ['message' => 'Welcome to our homepage!']);
})->name('home');

// Redirect from /home to /
Route::redirect('/home', '/');

// User route with a required username parameter
Route::get('/user/{username}', function ($username) {
    return view('user', ['username' => $username]);
})->where('username', '[a-zA-Z]+');

// User route with an optional username parameter
Route::get('/user/{username?}', function ($username = 'Guest') {
    return view('user', ['username' => $username]);
})->where('username', '[a-zA-Z]+');