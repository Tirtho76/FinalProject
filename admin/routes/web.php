<?php

use Illuminate\Support\Facades\Route;

// Admin Panel Home Management 
Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

// Admin Panel Visitor Management 
Route::get('/visitor','App\Http\Controllers\VisitorController@VisitorIndex');

// Admin Panel Service Management 
Route::get('/services','App\Http\Controllers\ServiceController@ServiceIndex');
Route::get('/getServicesData','App\Http\Controllers\ServiceController@getServicesData');








// Admin Panel Cours Management 
Route::get('/cours','App\Http\Controllers\CoursController@CoursIndex');
Route::get('/getCoursData', 'App\Http\Controllers\CoursController@getCoursData');
Route::post('/CoursDelete', 'App\Http\Controllers\CoursController@CoursDelete');
Route::post('/CoursDetails', 'App\Http\Controllers\CoursController@getCoursDetails');
Route::post('/CoursUpdate', 'App\Http\Controllers\CoursController@CoursUpdate');
Route::post('/CoursAdd', 'App\Http\Controllers\CoursController@CoursAdd');











// Admin panel contact management
Route::get('/Contact', 'App\Http\Controllers\ContactController@ContactIndex');
Route::get('/getContactData', 'App\Http\Controllers\ContactController@getContactData');
Route::post('/ContactDelete', 'App\Http\Controllers\ContactController@ContactDelete');
