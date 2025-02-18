<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

// Load Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Handle Contact Form Submission
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');
