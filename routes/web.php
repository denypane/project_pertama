<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something grea
|
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PesananController;

use App\Http\Controllers\DataPesananController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfilTokoController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AkunController;



Route::get('/', [DashboardController::class, 'index']);
// Route::get('/', 'App\Http\Controllers\DashboardController@pesanan');
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/dashboard', 'App\Http\Controllers\DashboardController@pesanan');
Route::get('/toko', [TokoController::class, 'index']);



Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/add_kategori', [KategoriController::class, 'add_kategori']);
Route::post('/PostAddKategori', [KategoriController::class, 'PostAddKategori']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/add_produk', [ProdukController::class, 'add_produk']);
Route::post('/PostAddProduk', [ProdukController::class, 'PostAddProduk']);



// Route::get('/produk', 'ProdukController@Produk');

Route::get('/pelanggan', [PelangganController::class, 'index']);
// Route::get('/pelanggan', 'App\Http\Controllers\PelangganController@pelanggan');
Route::get('/analisis', [AnalisisController::class, 'index']);
Route::get('/pengaturan', [PengaturanController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);
// Route::get('/pesanan', 'App\Http\Controllers\PesananController@Pesanan');

// Route::get('/datapesanan', function () {
//     return view('datapesanan');
// });

Route::get('/datapesanan', 'App\Http\Controllers\PesananController@DataPesanan');
// Route::get('/addproduk', 'App\Http\Controllers\AddprodukController@index');
// Route::post('/PostAddProduk', 'App\Http\Controllers\AddprodukController@PostAddProduk');

// Route::get('/datapesanan', [DataPesananController::class, 'index']);
Route::get('/penilaian', [PenilaianController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);

// Route::get('/addkategori', 'App\Http\Controllers\AddKategoriController@index');
// Route::post('/PostAddKategori', 'App\Http\Controllers\AddKategoriController@PostAddKategori');

Route::get('/profilToko', [ProfilTokoController::class, 'index']);
Route::get('/alamat', [AlamatController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index']);
// Add more routes for other menu items

//Route::get('/delete/{no_telepon}', [PelangganController::class, 'delete'])->name('delete');
