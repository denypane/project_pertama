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
use App\Http\Controllers\AutentikasiController;
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

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\AsikController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', function () {
//     return view('customer.index');
// });

Route::get('/', [DashboardController::class, 'index']);

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/daftar', function () {
    return view('daftar');
});

// costumer
Route::post('/PostRegister', [AutentikasiController::class, 'PostRegister']);
Route::post('/PostLogin', [AutentikasiController::class, 'PostLogin']);
Route::get('/keranjang', [KeranjangController::class, 'index']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/keluar', [AutentikasiController::class, 'Logout']);

Route::get('/asik', [AsikController::class, 'index']);

// Admin
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/toko', [TokoController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/add_kategori', [KategoriController::class, 'add_kategori']);
Route::post('/PostAddKategori', [KategoriController::class, 'PostAddKategori']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/add_produk', [ProdukController::class, 'add_produk']);
Route::post('/PostAddProduk', [ProdukController::class, 'PostAddProduk']);
Route::get('/tampilkan_produk/{id}', [ProdukController::class, 'tampilkan_produk']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/analisis', [AnalisisController::class, 'index']);
Route::get('/pengaturan', [PengaturanController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);

// Route::get('/datapesanan', function () {
//     return view('datapesanan');
// });

Route::get('/datapesanan', 'App\Http\Controllers\PesananController@DataPesanan');

// Route::get('/datapesanan', [DataPesananController::class, 'index']);
Route::get('/penilaian', [PenilaianController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/profilToko', [ProfilTokoController::class, 'index']);
Route::get('/alamat', [AlamatController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index']);
// Add more routes for other menu items
