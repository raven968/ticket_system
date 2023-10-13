<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'LoginController')->names('login');
