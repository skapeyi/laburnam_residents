<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','FeedbackController@residents');
Route::get('/make-a-booking','BookingController@create' );
Route::get('/give-feedback','FeedbackController@create');
Route::get('/residents-information','FeedbackController@residents');
Route::resource('bookings','BookingController');
Route::resource('feedback','FeedbackController');
