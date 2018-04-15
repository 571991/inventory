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

Route::get('hussain','TestController@show');
Route::get('login','LoginController@login');
Route::post('login','LoginController@authenticate');
Route::get('dashboard','DashboardController@dashboard');
Route::get('table','TableController@table');