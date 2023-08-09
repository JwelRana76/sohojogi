<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.index')->name('dashboard');

Route::get('/users', function () {
    return view('users');
});