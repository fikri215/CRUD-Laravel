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

Route::get('/', 'PertanyaanController@index');
Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index'); // Menampilkan Semua Data
Route::get('/pertanyaan/create', 'PertanyaanController@create'); // Menampilkan Halaman Form
Route::post('/pertanyaan', 'PertanyaanController@store'); // Menyimpan Data Baru
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // Menampilkan detail data berdasarkan id
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); // Mengubah data yang ada
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); // Menyimpan perubahan data
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); // Menghapus data berdasarkan id
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('jawaban.index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
