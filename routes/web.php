<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('welcome');

Route::view('/coming','coming')->name('coming');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth'])
    ->name('dashboard');

Route::view('access-key', 'access-key.access-key')
    ->middleware(['auth', 'can:viewAny,App\Models\AccessKey'])
    ->name('access-key');

require __DIR__.'/auth.php';
