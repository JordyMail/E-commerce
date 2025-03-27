<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SocialAuthController; 
use App\Http\Controllers\AdminController; // Importing AdminController
use App\Http\Controllers\HomeController; // Importing HomeController

Route::get('/', [HomeController::class, 'index'])->name('home'); // Home page route
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [RegisterController::class, 'showLoginForm'])->name('login');
Route::post('login', [RegisterController::class, 'login']);

Route::group(['middleware' => 'role:admin'], function () {
    // Admin Routes
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::get('about', function () {
    return view('about'); // About page route
});

Route::get('map', function () {
    return view('map'); // Map page route
});

// Social Authentication Routes
Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback']);
