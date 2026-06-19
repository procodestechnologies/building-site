<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;


Route::prefix('/')->group(function () {
    Route::get('', function () {
        return view('frontend.home');
    })->name('home');
    Route::get('about', function () {
        return view('frontend.about');
    })->name('about');
    Route::get('services', function () {
        return view('frontend.services');
    })->name('services');
    Route::get('contact', function () {
        return view('frontend.contact');
    })->name('contact');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});

require __DIR__ . '/settings.php';
