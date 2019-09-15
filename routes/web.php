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
//     return view('home');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('mahasiswa','MahasiswaController');
Route::resource('dosen','DosenController');
Route::resource('matakuliah','MataKuliahController');
Route::resource('perkuliahan','PerkuliahanController');

Route::post('/laporan/print','LaporanController@print')->name('laporan.print');
Route::resource('laporan','LaporanController');