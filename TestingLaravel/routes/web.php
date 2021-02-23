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

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('ID/{id}',function($id) {
    echo 'ID: '.$id;
 });

//CRUD
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
 Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
 Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
 Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
 Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
 Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
 Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
 Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

 route::get('/input','App\Http\Controllers\ValidasiController@input');
 route::post('/proses','App\Http\Controllers\ValidasiController@proses');


 route::get('/formulir','App\Http\Controllers\PegawaiController@formulir');

 route::post('/formulir/proses','App\Http\Controllers\PegawaiController@proses');

 route::get('/blog','App\Http\Controllers\BlogController@home');
 route::get('/blog/tentang','App\Http\Controllers\BlogController@tentang');
 route::get('/blog/kontak','App\Http\Controllers\BlogController@kontak');
