<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;

Route::get('/login', Login::class)->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::group(['middleware' => 'auth'], function() {
    Route::view('/', 'dashboard.index')->name('dashboard');
    Route::get('/users', function () {
        return view('users');
    }); 
});