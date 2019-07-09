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
Route::post('/savekategori', 'KategoriBuku@store')->name('kategori.store');
Route::get('/kategori', 'KategoriBuku@index')->name('kategori.index');
Route::get('/kategori/create', 'KategoriBuku@create')->name('kategori.create');
Route::get('/kategori/edit/{id}', 'KategoriBuku@edit')->name('kategori.edit');
Route::get('/kategori/destroy/{id}', 'KategoriBuku@destroy')->name('kategori.destroy');

Route::post('/kategori/update/{id}', 'KategoriBuku@update')->name('kategori.update');

Route::post('/save', 'DataBuku@store')->name('databuku.store');


Route::get('/delete/{id}', 'DataBuku@destroy')->name('databuku.destroy');
Route::get('/edit/{id}', 'DataBuku@edit')->name('databuku.edit');
Route::post('/update/{id}', 'DataBuku@update')->name('databuku.update');
Route::get('/pinjaman', 'TransaksiPinjaman@index');
Route::get('/customer', 'Customer@index')->name('customer.index');
Route::get('/customerdelete/{id}', 'Customer@destroy')->name('customer.delete');

