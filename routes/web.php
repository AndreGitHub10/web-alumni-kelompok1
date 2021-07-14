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
 
Route::get('/', 'BeritaController@indexHome')->name('indexHome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tentang', 'HomeController@tentang')->name('tentang');

// Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
// Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('create');
// Route::post('/mahasiswa', 'MahasiswaController@store')->name('store');

Route::resource('mahasiswa', 'MahasiswaController')->middleware('auth');
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa/{mahasiswa}', 'MahasiswaController@show')->name('mahasiswa.show');
Route::resource('loker', 'LokerController')->middleware('auth');
Route::get('loker', 'LokerController@index')->name('loker');
Route::get('loker/{loker}', 'LokerController@show')->name('loker.show');
Route::resource('berita', 'BeritaController')->middleware('auth');
Route::get('berita', 'BeritaController@index')->name('berita');