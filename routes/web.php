<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/booking-success', 'booking-success');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/bookingform', function(){
    return view('booking-form');
});

require __DIR__.'/auth.php';
