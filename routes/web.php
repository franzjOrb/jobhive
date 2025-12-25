<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

// About Us
Route::get('/about', function () {
    return view('about');
})->name('about');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('auth.success');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Job Routes
Route::get('/jobs/{slug}', [JobController::class, 'showCategory'])->name('jobs.category');
Route::get('/jobs/{categorySlug}/{jobSlug}', [JobController::class, 'show'])->name('jobs.detail');
Route::post('/jobs/{categorySlug}/{jobSlug}/apply', [JobController::class, 'apply'])->name('jobs.apply');