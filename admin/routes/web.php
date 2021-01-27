<?php

use Illuminate\Support\Facades\Route;

// Admin Panel Home Management 
Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

// Admin Panel Visitor Management 
Route::get('/visitor','App\Http\Controllers\VisitorController@VisitorIndex');
