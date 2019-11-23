<?php

use Illuminate\Http\Request;
Route::get('cekapi', 'UserController@test');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('user/{user}', 'UserController@getUser');
Route::patch('score/{user}', 'UserController@updateScore');

Route::post('soal', 'SoalController@store');
Route::get('soal', 'SoalController@index');
Route::get('soal/{soal}', 'SoalController@show');