<?php

use Illuminate\Support\Facades\Route;

// Admin Panel Home Management 
Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

// Admin Panel Visitor Management 
Route::get('/visitor','App\Http\Controllers\VisitorController@VisitorIndex');

// Admin Panel Course Management 
Route::get('/courses','App\Http\Controllers\CoursesController@CoursesIndex');
Route::get('/getCoursesData', 'App\Http\Controllers\CoursesController@getCoursesData');
Route::post('/CoursesDelete', 'App\Http\Controllers\CoursesController@CoursesDelete');
Route::post('/CoursesDetails', 'App\Http\Controllers\CoursesController@getCoursesDetails');
Route::post('/CoursesUpdate', 'App\Http\Controllers\CoursesController@CoursesUpdate');
Route::post('/CoursesAdd', 'App\Http\Controllers\CoursesController@CoursesAdd');
