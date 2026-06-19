<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('', function () {
        return view('frontend.home');
    });
    Route::get('about', function () {
        return view('frontend.about');
    });
    Route::get('services', function () {
        return view('frontend.services');
    });
    Route::get('contact', function () {
        return view('frontend.contact');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';
