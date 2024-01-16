<?php

use Illuminate\Support\Facades\Route;

Route::post('login', 'PostulantController@login')->name('api_login');

Route::post('register-api', 'PostulantController@register')->name('api_register');

Route::get('areas', 'AreaController@apiRouteGetAreas')->name('api_get_areas');
Route::get('states', 'AreaController@apiRouteGetStates')->name('api_get_states');
Route::get('cities', 'AreaController@apiRouteGetCities')->name('api_get_cities');
Route::get('zones', 'ZoneController@apiRouteGetZones')->name('api_get_zones');
Route::get('turns', 'TurnController@apiRouteGetTurns')->name('api_get_turns');
Route::get('education-levels', 'EducationLevelController@apiRouteGetEducationLevels')->name('api_get_education_levels');