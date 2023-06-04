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
    return view('auth.login');
});
// Auth
Route::get('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/postregister', 'App\Http\Controllers\AuthController@postregister');
Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');


//staf
Route::get('/viewstaf', 'App\Http\Controllers\StafController@staf');

//barang
Route::get('/newbarang', 'App\Http\Controllers\BarangController@newbarang');
Route::post('/tambahbarang', 'App\Http\Controllers\BarangController@tambah');
Route::get('/homebarang', 'App\Http\Controllers\BarangController@home');
Route::get('/barang/{id}/edit', 'App\Http\Controllers\BarangController@edit');
Route::post('/barang/{id}/update', 'App\Http\Controllers\BarangController@update');
Route::get('/barang/{id}/delete', 'App\Http\Controllers\BarangController@delete');

//suplier
Route::get('/homesuplier', 'App\Http\Controllers\SuplierController@homesuplier');
Route::post('/tambah', 'App\Http\Controllers\SuplierController@tambah');
Route::get('/newsuplier', 'App\Http\Controllers\SuplierController@newsuplier');
Route::post('/tambah', 'App\Http\Controllers\SuplierController@tambah');
Route::get('/barang/{id}/edit', 'App\Http\Controllers\BarangController@edit');
Route::post('/barang/{id}/update', 'App\Http\Controllers\BarangController@update');
Route::get('/barang/{id}/delete', 'App\Http\Controllers\BarangController@delete');

// Barang masuk
    Route::get('/barang_masuk', 'App\Http\Controllers\BarangmasukController@index');
    Route::get('/barang_masuk_tambah/{id}', 'App\Http\Controllers\BarangmasukController@tambah');
    Route::post('/barang_masuk/{id}/simpan', 'App\Http\Controllers\BarangmasukController@simpan');
    Route::get('/barang_masuk{id}/delete', 'App\Http\Controllers\BarangmasukController@delete');

    // Barang keluar
    Route::get('/barang_keluar', 'App\Http\Controllers\BarangkeluarController@index');
    Route::get('/barang_keluar/{id}/tambah', 'App\Http\Controllers\BarangkeluarController@tambah');
    Route::post('/barang_keluar/{id}/simpan', 'App\Http\Controllers\BarangkeluarController@simpan');
    Route::get('/barang_keluar{id}/delete', 'App\Http\Controllers\BarangkeluarController@delete');
