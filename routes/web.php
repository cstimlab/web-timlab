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

// AUTH

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');

Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');

Route::get('/logout','App\Http\Controllers\AuthController@logout');

// BERANDA, SOLUSI, TOPIK

Route::get('/','App\Http\Controllers\TimlabController@index');

Route::get('/sistem_solusi','App\Http\Controllers\TimlabController@sistem_solusi');

Route::get('/topic','App\Http\Controllers\TimlabController@topic');

// SISTEM ANTENNA

Route::get('/sistem_antenna','App\Http\Controllers\TimlabController@sistem_antenna');

Route::get('/beli/{nama_barang}','App\Http\Controllers\TimlabController@beli');

Route::post('/store_beli/{nama_barang}','App\Http\Controllers\TimlabController@store_beli');

// TAMBAH LAYANAN

Route::get('/layanan','App\Http\Controllers\TimlabController@layanan');

Route::get('/beli_custom','App\Http\Controllers\TimlabController@beli_custom');

Route::post('/store_beli_custom','App\Http\Controllers\TimlabController@store_beli_custom');

// TENTANG KAMI

Route::get('/tentang_kami','App\Http\Controllers\TimlabController@tentang_kami');

Route::post('/store_komen','App\Http\Controllers\TimlabController@store_komen');

// HANYA BISA DIBUKA SAAT ADMIN SUDAH LOGIN

Route::group(['middleware' => 'auth' ],function(){

    // SISTEM ANTENNA

    Route::get('/tambah_sistem_antenna','App\Http\Controllers\TimlabController@tambah_sistem_antenna');

    Route::post('/store_antenna/{name}','App\Http\Controllers\TimlabController@store_antenna');

    Route::get('/edit_sistem_antenna/{id_barang}','App\Http\Controllers\TimlabController@edit_sistem_antenna');

    Route::post('/update_antenna/{id_barang}/{name}','App\Http\Controllers\TimlabController@update_antenna');

    Route::get('/hapus_sistem_antenna/{id_barang}','App\Http\Controllers\TimlabController@hapus_sistem_antenna');

    // SISTEM SOLUSI

    Route::get('/tambah_sistem_solusi','App\Http\Controllers\TimlabController@tambah_sistem_solusi');

    Route::post('/store_solusi/{name}','App\Http\Controllers\TimlabController@store_solusi');

    Route::get('/edit_sistem_solusi/{id_solusi}','App\Http\Controllers\TimlabController@edit_sistem_solusi');

    Route::post('/update_solusi/{id_solusi}/{name}','App\Http\Controllers\TimlabController@update_solusi');

    Route::get('/hapus_sistem_solusi/{id_solusi}','App\Http\Controllers\TimlabController@hapus_sistem_solusi');

    // PESANAN

    Route::get('/pesanan','App\Http\Controllers\TimlabController@pesanan');

    Route::get('/edit_status/{id_beli}','App\Http\Controllers\TimlabController@edit_status');

    Route::post('/edit_status/{id_beli}/update','App\Http\Controllers\TimlabController@update_beli');

    Route::get('/edit_status_custom/{id_order}','App\Http\Controllers\TimlabController@edit_status_custom');

    Route::post('/edit_status_custom/{id_order}/update','App\Http\Controllers\TimlabController@update_custom');

});