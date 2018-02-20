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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','MahasiswaController@index');
Route::resource('mahasiswa','MahasiswaController');
Route::post('mhs_update/{id}','MahasiswaController@update')->name('mhs_update');
Route::get('mhs_delete/{id}','MahasiswaController@destroy')->name('mhs_delete');


Route::get('home/{id}/{nama}','MahasiswaController@home')->name('home');

Route::get('kontrak','KontrakController@index')->name('kontrak');
Route::post('kontrakpost','KontrakController@store')->name('kontrakpost');
