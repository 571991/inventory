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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hussain', 'TestController@show');
Route::get('login', 'LoginController@login')->name('login');
Route::post('login', 'LoginController@authenticate');
Route::get('registration', 'RegistrationController@registration');
Route::post('registration', 'RegistrationController@store');

Route::get('table', 'TableController@table');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'DashboardController@dashboard');
});
