<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('city', 'CityController@index');
Route::get('city/add', 'CityController@add');
Route::post('city/add', 'CityController@process');
Route::get('city/{id}', 'CityController@update');
Route::post('city/{id}', 'CityController@save');
Route::post('city/remove/{id}', 'CityController@remove');
