<?php

use Illuminate\Http\Request;

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('user/{user}', 'UserController@getUser');
Route::post('score/{user}', 'UserController@updateScore');

Route::post('soal', 'SoalController@store');
Route::get('soal', 'SoalController@index');
Route::get('soal/{soal}', 'SoalController@show');