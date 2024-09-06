<?php

use Illuminate\Support\Facades\Route;

//route for the login page at the root URL "/"
Route::get('/', function () {
    return view('login');
})->name('login');

//route for the welcome page with dynamic username, and view the welcome message with username
Route::get('/welcome/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
})->name('welcome');

//route for the about page with dynamic username
Route::get('/about/{username}', function ($username) {
    return view('about', ['username' => $username]);
})->name('about');

//route for the content page with dynamic username
Route::get('/content/{username}', function ($username) {
    return view('content', ['username' => $username]);
})->name('content');

//route for the contact page with dynamic username
Route::get('/contact/{username}', function ($username) {
    return view('contact', ['username' => $username]);
})->name('contact');

//handles the log in form and username validation
Route::post('/welcome', function (\Illuminate\Http\Request $request) {
    // Validate that the username only contains alphabetic characters (a-z, A-Z)
    $request->validate([
        'username' => 'required|alpha'
    ], [
        'username.alpha' => 'The username should only contain alphabetic characters.',
        'username.required' => 'The username field is required.'
    ]);

    $username = $request->input('username', 'Guest');
    return redirect("/welcome/$username");
});

