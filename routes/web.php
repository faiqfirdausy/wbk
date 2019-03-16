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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'kategori', 'middleware' => 'auth'], function(){
	Route::get('/{id_kategori}/{id_soal}', 'PertanyaanController@index');
	Route::post('store', 'PertanyaanController@store');
	Route::post('update', 'PertanyaanController@update');
	Route::get('/buat', 'PertanyaanController@buat');
	Route::post('/kirim', 'PertanyaanController@buatstore');


});