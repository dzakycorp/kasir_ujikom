<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/penjualan', function () {
//     return view('penjualan');
// });
// Route::get('/restore', function () {
// return view('restore');
// });
// //Route::get('/update_produk', function () {
//   //  return view('update_produk');
// //});
// Route::get('/register', function () {
//     return view('register');
// });


Route ::get('/register', [PetugasController::class, 'regis']);
Route ::post('/register',[PetugasController::class, 'daftar_petugas']);

Route ::get('/login', [LoginController::class, 'index']);
Route ::post('/login',[LoginController::class, 'login']);
Route ::get('/logout', [LoginController::class,'logout']);
Route::group(['middleware' => ['Petugas']], function () { 
//produk
Route ::get('/dashboard', [AdminController::class, 'dashboard']);
Route ::get('/data_produk', [AdminController::class, 'datap']);
Route ::post('/tambah_produk', [AdminController::class, 'proses_tambah']);
Route ::get('/tambah_produk', [AdminController::class, 'tambah_produk']);

Route ::post('/update_produk/{id}', [AdminController::class, 'proses_update']);
Route ::get('/update_produk/{id}', [AdminController::class, 'update']);
Route ::get('/hapus_produk/{id}', [AdminController::class,'hapus']);
Route ::get('/trash-produk', [AdminController::class,'trash']);
Route ::get('/restore/{id}', [AdminController::class,'restore']);
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
});








