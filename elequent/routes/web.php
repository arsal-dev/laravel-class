<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeacherController::class, 'show'])->name('all.teachers');
Route::get('/create', [TeacherController::class, 'create'])->name('create');
Route::get('/delete', [TeacherController::class, 'delete'])->name('delete');
Route::get('/update', [TeacherController::class, 'update'])->name('update');
Route::get('/trash', [TeacherController::class, 'trash'])->name('trash');
Route::get('/restore', [TeacherController::class, 'restore'])->name('restore');
Route::get('/force-delete', [TeacherController::class, 'forceDelete'])->name('force-delete');
