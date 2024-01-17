<?php

use Illuminate\Support\Facades\Route;

Route::resource('/login', 'LoginController')->names('login');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::resource('/register', 'RegisterController')->names('register');
Route::get('/aviso-de-privacidad', 'LegalController@aviso')->name('aviso');
Route::get('/terminos-y-condiciones', 'LegalController@terminos')->name('terminos');

Route::middleware('auth')->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('user','UserController')->names('users')->middleware('can:users, App\Models\User');
    Route::resource('companies', 'CompanyController')->names('companies')->middleware('can:companies, App\Models\Company');
    Route::resource('zones', 'ZoneController')->names('zones')->middleware('can:zones, App\Models\Zone');
    Route::resource('turns', 'TurnController')->names('turns')->middleware('can:turns, App\Models\Turn');
    Route::resource('education_levels', 'EducationLevelController')->names('education_levels')->middleware('can:education_levels, App\Models\EducationLevel');
    Route::resource('areas', 'AreaController')->names('areas')->middleware('can:areas, App\Models\Area');
    Route::resource('specialties', 'SpecialtyController')->names('specialties')->middleware('can:specialties, App\Models\Specialty');
    Route::resource('contractors', 'ContractorController')->names('contractors')->middleware('can:contractors, App\Models\User');
        
});