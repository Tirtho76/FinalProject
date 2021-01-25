<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

Route::post('/contactSend','App\Http\Controllers\HomeController@ContactSend');
