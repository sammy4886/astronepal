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

Route::get('/', 'FrontendController@home');
Route::get('/contact', 'FrontendController@contact');
Route::get('/payment', 'FrontendController@payment');
Route::get('/about', 'FrontendController@about');
//Route::get('/appointment', 'FrontendController@appointment');
Route::group([ 'as' => 'appointment.', 'prefix' => 'appointment' ], function (){
    Route::post('', 'AppointmentController@store')->name('store');
});

