<?php

use Illuminate\Support\Facades\Route;

// get, post, put, patch, delete

Route::get('/', function () {
    $languages = ['html', 'css', 'javascript', 'php', 'mysql', 'laravel'];

    // dd($languages);

    return view('home', ['name' => 'Ahmed', 'data' => $languages]);
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
