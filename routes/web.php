<?php

use Illuminate\Support\Facades\Route;

Route::get('logo/{id}', 'BaBsController@logo');
Route::get('/', 'BaBsController@index');
Route::get('/{id}', 'BaBsController@show');
Route::get('onay/{id}', 'BaBsController@store');
Route::get('mesaj/{id}/{tip}', 'MesajController@index');
Route::post('mesaj', 'MesajController@store');
Route::get('bakiye', 'BakiyeController@index');
Route::get('bakiye/{id}', 'BakiyeController@show');
Route::get('bakiye_onay/{id}', 'BakiyeController@store');
Route::get('bakiye_mektup/{id}', 'BakiyeController@download');

Route::get('bordro', 'BordroController@index');
Route::get('bordro/{uid}', 'BordroController@show');
