<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indoraController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\barstoController;
use App\Http\Controllers\barmasController;
use App\Http\Controllers\barkeController;
use App\Http\Controllers\bareController;
use App\Http\Controllers\laporanController;

use App\Http\Controllers\LoginController;

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

// Route::get('/stock-in', function () {
//     return view('stock-in');
// });

// beranda
Route::get('/', [indoraController::class,'beranda']);

// profil owner
Route::get('/profil-owner', [ownerController::class,'profil']);
Route::get('/profil-owner/{id_owner}/edit', [ownerController::class,'editowner'])->name('edit.owner');
Route::post('/profil-owner/{id_owner}', [ownerController::class,'updateowner'])->name('update.owner');

// informasi toko
Route::get('/informasi-toko', [indoraController::class,'informasi']);

// barang stok
Route::get('/barang-stok', [barstoController::class,'barangstok'])->name('index.barsto');
Route::get('/tambah-barang-stok/create', [barstoController::class,'createbarsto'])->name('create.barsto');
Route::post('/tambah-barang-stok', [barstoController::class,'storebarsto'])->name('store.barsto');
Route::get('/barang-stok/{id}/edit', [barstoController::class,'editbarsto'])->name('edit.barsto');
Route::post('/barang-stok/{id}', [barstoController::class,'updatebarsto'])->name('update.barsto');
Route::delete('/barang-stok/{id}', [barstoController::class,'destroybarsto'])->name('destroy.barsto');

// barang masuk
Route::get('/barang-masuk', [barmasController::class,'barangmasuk']);
Route::get('/tambah-barang-masuk/create', [barmasController::class,'createbarmas'])->name('create.barmas');
Route::post('/tambah-barang-masuk', [barmasController::class,'storebarmas'])->name('store.barmas');
Route::delete('/barang-masuk/{id}', [barmasController::class,'destroybarmas'])->name('destroy.barmas');

// barang keluar
Route::get('/barang-keluar', [barkeController::class,'barangkeluar']);
Route::get('/tambah-barang-keluar/create', [barkeController::class,'createbarke'])->name('create.barke');
Route::post('/tambah-barang-keluar', [barkeController::class,'storebarke'])->name('store.barke');
Route::get('/get-harga-keluar', [barkeController::class,'gethargabeli'])->name('get.harga.barke');
Route::delete('/barang-keluar/{id}', [barkeController::class,'destroybarke'])->name('destroy.barke');

// barang retur
Route::get('/barang-retur', [bareController::class,'barangretur']);
Route::get('/tambah-barang-retur/create', [bareController::class,'createbare'])->name('create.bare');
Route::post('/tambah-barang-retur', [bareController::class,'storebare'])->name('store.bare');
Route::get('/get-retur', [bareController::class,'getretur'])->name('get.retur');
Route::delete('/barang-retur/{id}', [bareController::class,'destroybare'])->name('destroy.bare');

// laporan
Route::get('/laporan', [laporanController::class,'laporan']);
Route::get('/cetak-laporan/{bln_cetak}', [laporanController::class,'cetaklaporan'])->name('cetak.laporan');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
