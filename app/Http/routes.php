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

Route::get('/', 'MyController@home');

Route::get('home', 'MyController@home');

//Route::get('/', 'WelcomeController@index');

Route::get('form', 'MyController@form');

Route::get('responses', 'MyController@responses');

Route::post('/', 'MyController@store');

Route::get('reset', 'MyController@reset');

Route::post('reset/confirm', 'MyController@confirmation');