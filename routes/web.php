<?php
use Illuminate\Support\Facades\Auth;

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
Route::get('/capaian', 'HomeController2@capaian')->name('home');
Route::get('/ipkikm', 'HomeController2@ipkikm')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pimti', 'HomeController@pimti')->name('home');
Route::get('/verifikasi2', 'HomeController@verifikasi2')->name('home');

Route::get('/verifikasi/{id_transaksi}', 'HomeController@verifikasi')->name('home');
Route::get('/perubahan', 'HomeController@perubahan')->name('home');
Route::group(['prefix' => 'perubahan', 'middleware' => 'auth'], function(){
	Route::post('upload', 'HomeController@store');
	Route::post('delete', 'HomeController@hapus');

});

Route::get('/pertanyaan2', 'HomeController@pertanyaan2')->name('home');
Route::group(['prefix' => 'pertanyaan2', 'middleware' => 'auth'], function(){
	Route::get('kategori/{id_kategori}', 'HomeController@subindikator');
	Route::get('download-file/{id_file}', 'HomeController@downloadFile');


});





// Route::get('/', function () {
//     return view('welcome');
// });

