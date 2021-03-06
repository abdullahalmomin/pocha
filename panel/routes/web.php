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
Route::get('dashboard/{filterModule}','DashboardController@dashboard');

Route::get('curlRequest/{filterModule}','CurlRequestController@AppModule');
Route::get('/dashboard1', 'HomeController@dashboard')->name('dashboard1');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
