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
Route::get('/buku','Databuku@index')->name('buku.index');

Route::get('/create', 'Databuku@create')->name('databuku.create');
    
Route::post('/save', 'DataBuku@store')->name('databuku.store');


Route::get('/delete/{id}', 'DataBuku@destroy')->name('databuku.destroy');
Route::get('/edit/{id}', 'DataBuku@edit')->name('databuku.edit');
Route::post('/update/{id}', 'DataBuku@update')->name('databuku.update');