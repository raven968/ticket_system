<?php

use Illuminate\Support\Facades\Route;

Route::resource('/login', 'LoginController')->names('login');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::resource('/register', 'RegisterController')->names('register');

Route::middleware('auth')->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('user','UserController')->names('users')->middleware('can:users, App\Models\User');
    Route::resource('companies', 'CompanyController')->names('companies')->middleware('can:companies, App\Models\Company');
    Route::resource('zones', 'ZoneController')->names('zones')->middleware('can:zones, App\Models\Zone');
    Route::resource('turns', 'TurnController')->names('turns')->middleware('can:turns, App\Models\Turn');
        
});