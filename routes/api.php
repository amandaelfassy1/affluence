<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('informations', 'App\Http\Controllers\ApiController@index');

Route::post('reservation', 'App\Http\Controllers\ApiController@store');

Route::delete('/reservation/annulation/{token}', 'App\Http\Controllers\ApiController@destroy');

Route::get('/reservation/{token}', 'App\Http\Controllers\ApiController@selectMail');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});