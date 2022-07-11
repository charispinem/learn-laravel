<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);



// Route Pegawai Start
Route::get('/data-pegawai', [PegawaiController::class, 'data_pegawai'])->name('data-pegawai');
Route::get('/data-pegawai/tambah', [PegawaiController::class, 'create_pegawai'])->name('create-pegawai');
Route::post('/save-pegawai', [PegawaiController::class, 'store'])->name('save-pegawai');
Route::get('/tampildata/{id}/edit', [PegawaiController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [PegawaiController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [PegawaiController::class, 'destroy'])->name('delete');
// Route Pegawai End

// Route Barang Start   
Route::get('/data-barang', [BarangController::class, 'data_barang'])->name('data-barang');
Route::get('/data-barang/tambah', [BarangController::class, 'create'])->name('create-barang');
Route::post('/save-barang', [BarangController::class, 'store'])->name('save-barang');
Route::get('/tb/{id}/edit', [BarangController::class, 'tampilbarang'])->name('tampil-barang');
Route::post('/update/{id}', [BarangController::class, 'update'])->name('update-barang');
Route::get('/barang/{id}/delete', [BarangController::class, 'destroy'])->name('delete');
// Route Barang End
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
