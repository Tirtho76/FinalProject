<?php

use Illuminate\Support\Facades\Route;

// Admin panel home management 
Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

// Admin panel visitor management 
Route::get('/visitor','App\Http\Controllers\VisitorController@VisitorIndex');

// Admin panel course management 
Route::get('/Course','App\Http\Controllers\CourseController@CourseIndex');
Route::get('/getCourseData', 'App\Http\Controllers\CourseController@getCourseData');
Route::post('/getCourseDetails','App\Http\Controllers\CourseController@getCourseDetails');
Route::post('/CourseDelete','App\Http\Controllers\CourseController@CourseDelete');
Route::post('/CourseUpdate','App\Http\Controllers\CourseController@CourseUpdate');
Route::post('/CourseAdd','App\Http\Controllers\CourseController@CourseAdd');
