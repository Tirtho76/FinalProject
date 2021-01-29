<?php

use Illuminate\Support\Facades\Route;

// Admin Panel Home Management 
Route::get('/','App\Http\Controllers\HomeController@HomeIndex');

// Admin Panel Visitor Management 
Route::get('/visitor','App\Http\Controllers\VisitorController@VisitorIndex');

// Admin Blog Management 
Route::get('/blog','App\Http\Controllers\BlogController@BlogIndex');
Route::get('/getBlogData', 'App\Http\Controllers\BlogController@getBlogData');
Route::post('/BlogDelete', 'App\Http\Controllers\BlogController@BlogDelete');
Route::post('/BlogDetails', 'App\Http\Controllers\CoursesController@getBlogDetails');
Route::post('/BlogUpdate', 'App\Http\Controllers\BlogController@BlogUpdate');
Route::post('/BlogAdd', 'App\Http\Controllers\BlogController@BlogAdd');


// Admin Panel FeedBack Management 
Route::get('/feedback','App\Http\Controllers\FeedBackController@FeedBackIndex');
Route::get('/getFeedBackData', 'App\Http\Controllers\FeedBackController@getFeedBackData');
Route::post('/FeedBackDelete', 'App\Http\Controllers\FeedBackController@FeedBackDelete');
Route::post('/FeedBackDetails', 'App\Http\Controllers\FeedBackController@getFeedBackDetails');
Route::post('/FeedBackUpdate', 'App\Http\Controllers\FeedBackController@FeedBackUpdate');
Route::post('/FeedBackAdd', 'App\Http\Controllers\FeedBackController@FeedBackAdd');
