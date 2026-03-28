<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

// الصفحة الرئيسية
Route::get('/', function () {
    return view('welcome');
});

// login
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// حماية الكتب
Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
});
