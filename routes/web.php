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
Route::get('/', 'HomeController2@indexfront');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perubahan', 'HomeController@perubahan')->name('home');
Route::group(['prefix' => 'perubahan', 'middleware' => 'auth'], function(){
	Route::post('upload', 'HomeController@store');

});

Route::get('/pertanyaan2', 'HomeController@pertanyaan2')->name('home');
Route::group(['prefix' => 'pertanyaan2', 'middleware' => 'auth'], function(){
	Route::get('kategori/{id_kategori}', 'HomeController@subindikator');
	Route::get('download-file/{id_file}', 'HomeController@downloadFile');


});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'kategori', 'middleware' => 'auth'], function(){
	Route::get('/{id_kategori}/{id_soal}', 'PertanyaanController@index');
	Route::post('store', 'PertanyaanController@store');
	Route::post('update', 'PertanyaanController@update');
	Route::get('/buat', 'PertanyaanController@buat');
	Route::post('/kirim', 'PertanyaanController@buatstore');
	Route::get('/download-file/{id_kategori}/{id_file}', 'PertanyaanController@downloadFile');

});