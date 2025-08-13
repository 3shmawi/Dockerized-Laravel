<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic auth routes to prevent 404 errors
Route::get('/login', function () {
    return redirect('/')->with('message', 'Login functionality coming soon!');
})->name('login');

Route::get('/register', function () {
    return redirect('/')->with('message', 'Registration functionality coming soon!');
})->name('register');

Route::post('/logout', function () {
    return redirect('/')->with('message', 'Logout functionality coming soon!');
})->name('logout');
