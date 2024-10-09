<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-submit', function () {
    // Logic to handle form submission goes here
    return redirect('/contact')->with('success', 'Thank you for your message! We will get back to you soon.');
});
