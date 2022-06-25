<?php

use App\Http\Controllers\HomeController;
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
Route::get('/barang', [HomeController::class, 'barang'])->name('barang');
Route::get('/data-user', [HomeController::class, 'data_user'])->name('data-user');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
