<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'visitors'], function() {
	Route::get('/register', 'RegistrationController@register');

	Route::post('/register', 'RegistrationController@postRegister');

	Route::get('/login', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');
});


Route::post('/logout', 'LoginController@logout');
Route::get('/earnings', 'AdminController@earnings')->middleware('admin');
Route::get('/tasks', 'ManagerController@tasks')->middleware('manager');
Route::get('/activation/{email}/{activationCode}', 'ActivationController@activate');

