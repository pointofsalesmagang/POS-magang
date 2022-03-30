<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PenjualanController;
// use App\Http\Controllers\SupplierController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kategori',App\Http\Controllers\KategoriController::class);
Route::resource('produk',App\Http\Controllers\ProdukControllers::class);
Route::resource('member',App\Http\Controllers\MemberController::class);
Route::resource('supplier',App\Http\Controllers\SupplierController::class);
Route::resource('user',App\Http\Controllers\UserController::class);
Route::resource('pengeluaran',App\Http\Controllers\PengeluaranControllers::class);
Route::resource('pembelian',App\Http\Controllers\PembelianControllers::class);
Route::resource('penjualan',App\Http\Controllers\PenjualanController::class);