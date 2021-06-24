<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');

Route::view('/coming','coming')->name('coming');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'admin'])
    ->name('dashboard');

require __DIR__.'/auth.php';
