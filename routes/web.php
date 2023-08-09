<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('dashboard.index');
});

Route::get('/users', function () {
    return view('users');
});