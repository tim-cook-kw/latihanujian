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
    return view('pages.dashboard');
    
});
Route::get('/login', 'AuthController@index')->name('login.index');
Route::post('/proseslogin', 'AuthController@login')->name('login.proses');
Route::get('/register', 'AuthController@register');
Route::post('/prosesregister', 'AuthController@proses_register')->name('register.proses');
Route::get('/logout', 'AuthController@logout');