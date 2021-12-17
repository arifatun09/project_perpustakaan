<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('anggota', AnggotaController::class);
Route::get('/search', [AnggotaController::class, 'search'])->name('search');
Route::get('/print_all', [AnggotaController::class, 'print_all'])->name('print_all');

Route::resource('buku', BukuController::class);
Route::get('/searchbuku', [BukuController::class, 'search'])->name('searchbuku');

Route::resource('transaksi', TransaksiController::class);
Route::get('/searchtrans', [TransaksiController::class, 'search'])->name('searchtrans');
Route::get('/transaksi/{id}/printtrans', [TransaksiController::class, 'printtrans']);

Route::resource('user', UserController::class);
Route::get('/searchuser', [UserController::class, 'searchuser'])->name('searchuser');
