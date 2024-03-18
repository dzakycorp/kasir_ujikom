<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;


Route ::get('/login', [LoginController::class, 'index']);
Route ::post('/login',[LoginController::class, 'login']);

Route::group(['middleware' => ['Admin']], function () { 
Route ::get('/register', [PetugasController::class, 'regis']);
Route ::post('/register',[PetugasController::class, 'daftar_petugas']);
});
Route::group(['middleware' => ['Petugas']], function () { 
//produk
Route ::get('/dashboard', [ProdukController::class, 'dashboard']);
Route ::get('/data_produk', [ProdukController::class, 'datap']);
Route ::post('/tambah_produk', [ProdukController::class, 'proses_tambah']);
Route ::get('/tambah_produk', [ProdukController::class, 'tambah_produk']);

Route ::post('/update_produk/{id}', [ProdukController::class, 'proses_update']);
Route ::get('/update_produk/{id}', [produkController::class, 'update']);
Route ::get('/hapus_produk/{id}', [ProdukController::class,'hapus']);
Route ::get('/sampah', [ProdukController::class,'trash']);
Route ::get('/restore/{id}', [ProdukController::class,'restore']);
//pelanggan
Route ::get('/data_pelanggan', [PelangganController::class, 'datapel']);
Route ::post('/tambah_pelanggan', [PelangganController::class, 'proses_tambahpel']);
Route ::get('/tambah_pelanggan', [PelangganController::class, 'tambah_pelanggan']);
Route ::get('/hapus_pelanggan/{id}', [PelangganController::class,'hapus']);
Route ::post('/update_pelanggan/{id}', [PelangganController::class, 'proses_update']);
Route ::get('/update_pelanggan/{id}', [PelangganController::class, 'updatepel']);
//penjualan
Route ::get('/data_penjualan', [PenjualanController::class, 'data_penjualan']);
Route ::get('/detail_penjualan/{id}', [PenjualanController::class, 'detail']);

Route ::get('/penjualan', [PenjualanController::class, 'penjualan']);
Route ::post('/penjualan', [PenjualanController::class, 'tambah']);
Route::post('Checkout',[PenjualanController::class,'checkout']);
Route::get('/struk/{penjualan_id}', [PenjualanController::class, 'cetakStruk']);
Route::get('/hapus_penjualan/{id}', [PenjualanController::class, 'hapus_penjualan']) ;
Route ::get('/logout', [LoginController::class,'logout']);
});








