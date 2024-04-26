<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contactSubmit');

Route::get('get-contacts', [ContactController::class, 'get'])->name('allContacts');

Route::get('insert-contacts', [ContactController::class, 'insert'])->name('insertContacts');
