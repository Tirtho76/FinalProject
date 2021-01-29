<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

Route::post('/FeedBackSend','App\Http\Controllers\HomeController@FeedBackSend');