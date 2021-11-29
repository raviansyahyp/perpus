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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//bagian menampilkan isi anggota
Route::get('/anggota','AnggotaController@index');
//bagian views tambah (create) anggota
Route::get('anggota/create', 'AnggotaController@tambah');
Route::get('/store', 'AnggotaController@store');
//bagian views edit (update) anggota
Route::get('/anggota/edit/{id_anggota}','AnggotaController@edit');
Route::post('/anggota/update','AnggotaController@update');
//bagian menghapus data anggota
Route::get('/hapus/{id_anggota}','AnggotaController@hapus');

//bagian buku (view dan controller)
Route::resource('buku','BukuController');

//bagian kategori
Route::resource('kategori','KategoriController');

//bagian transaksi
Route::resource('transaksi','TransaksiController');
Route::get('transaksi/edit/{id}', 'TransaksiController@edit');
Route::get('transaksi/showBuku/{id}', 'TransaksiController@showBuku');
Route::get('transaksi/getAnggota/{id}', 'TransaksiController@getAnggota');
Route::post('/transaksi/update/{id}', 'TransaksiController@update');