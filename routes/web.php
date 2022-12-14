<?php

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

Route::get('/', function () {
  return view('welcome');
});
Route::get('/login', function () {
  return view('welcome');
});
Route::post('/login', [App\Http\Controllers\LoginController::class, 'auth'])->name('login');
Route::middleware('auth')->group(function () {
  Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
  Route::resource('wilayah', App\Http\Controllers\WilayahController::class);
  Route::resource('pegawai', App\Http\Controllers\PegawaiController::class);
  Route::resource('user', App\Http\Controllers\UserController::class);
  Route::resource('tindakan', App\Http\Controllers\TindakanController::class);
  Route::resource('obat', App\Http\Controllers\ObatController::class);
  Route::resource('pasien', App\Http\Controllers\PasienController::class);
  Route::resource('tagihan', App\Http\Controllers\TagihanController::class);
  Route::get('pasien/{pasien}/periksa', [App\Http\Controllers\PasienController::class, 'periksa']);
  Route::post('pasien/{pasien}/bayar', [App\Http\Controllers\PasienController::class, 'bayar']);
  Route::post('tindakan-pasien/{pasien}', [App\Http\Controllers\PasienController::class, 'tindakanPasien']);
  Route::post('obat-pasien/{pasien}', [App\Http\Controllers\PasienController::class, 'obatPasien']);
  Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout']);
});