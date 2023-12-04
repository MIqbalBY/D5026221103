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

    // Welcome (Week 8/Personal Website)
    Route::get('/', function ()
    {
        return view('welcome');
    });

    Route::get('week8', function ()
    {
        return view('welcome');
    });

    // Week 1
    Route::get('week1', function()
    {
    return view('week1');
    });

    // Week 2
    Route::get('week2', function()
    {
    return view('week2');
    });

    // Week 3 (Linktree)
    Route::get('week3', function()
    {
    return view('week3');
    });

    // Week 4
    Route::get('week4', function()
    {
    return view('week4');
    });

    // Week 5
    Route::get('week5', function()
    {
    return view('week5');
    });

    // Week 6
    Route::get('week6', function()
    {
    return view('week6');
    });

    // Week 7
    Route::get('week7',
    function()
    {
    return view('week7');
    });

    // Week 9 (Blog)
    Route::get('blog2', function()
    {
    return view('blog');
    });

    // Week 10
    Route::get('week10', function()
    {
    return view('week10');
    });

    Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
    Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

    // Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@showNama');

    Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
    Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

    // Route Blog
    Route::get('/blog', 'App\Http\Controllers\BlogController@home');
    Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
    Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

    // Route CRUD (Pegawai)
    Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
    Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');
    Route::post('/pegawai/store', 'App\Http\Controllers\PegawaiController@store');
    Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
    Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
    Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
    Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
    Route::get('/pegawai/cari', 'App\Http\Controllers\PegawaiController@cari');

    // Route CRUD (Nilai Kuliah)
    Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@index');
    Route::get('/nilaikuliah/tambah', 'App\Http\Controllers\NilaiKuliahController@tambah');
    Route::post('/nilaikuliah/store', 'App\Http\Controllers\NilaiKuliahController@store');
