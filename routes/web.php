<?php

use Illuminate\Support\Facades\Route;

Route::resource('/login', 'LoginController')->names('login');

Route::middleware('auth')->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
});