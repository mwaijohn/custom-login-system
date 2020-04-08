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

Route::get('/login', "LoginController@login");
Route::post('/checklogin', "LoginController@checklogin");
Route::get('/success', "LoginController@successlogin");
Route::get('/dashboard', "LoginController@dashboard");
Route::get('/logout', "LoginController@logout");

Route::get('/register','RegisterController@create');
Route::post('/register','RegisterController@store');