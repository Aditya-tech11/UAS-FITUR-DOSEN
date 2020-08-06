<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/mahasiswa','mahasiswaController@index');
Route::post('/mahasiswa/create', 'mahasiswaController@create')->name('mahasiswa');
Route::get('/mahasiswa/{id}/edit','mahasiswaController@edit');
Route::post('/mahasiswa/{id}/update', 'mahasiswaController@update');
Route::get('/mahasiswa/{id}/delete', 'mahasiswaController@delete');

Route::get('/dosen','dosenController@index');
Route::post('/dosen/create', 'dosenController@create')->name('dosen');
Route::get('/dosen/{id}/edit','dosenController@edit');
Route::post('/dosen/{id}/update', 'dosenController@update');
Route::get('/dosen/{id}/delete', 'dosenController@delete');