<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/add-student', [StudentController::class, 'add_student'])->name('add.student');
    Route::post('/add-student', [StudentController::class, 'add_new_student'])->name('add.new.student');
    Route::delete('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete.student');
    Route::post('/update-student/{id}', [StudentController::class, 'update'])->name('update.student');
    Route::patch('/update-student/{id}', [StudentController::class, 'update_put'])->name('update.put.student');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_post'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_post'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
