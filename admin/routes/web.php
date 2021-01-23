<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@HomeIndex');
Route::get('/visitor','App\Http\Controllers\VisitorController@VisitorIndex');
