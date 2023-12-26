<?php

use Illuminate\Support\Facades\Route;

Route::resource('/login', 'LoginController')->names('login');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::resource('/register', 'RegisterController')->names('register');

Route::middleware('auth')->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('user','UserController')->names('users')->middleware('can:users, App\Models\User');

});