<?php

use App\Models\Riwayatgolongan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\OrangtuaController;
use App\Http\Controllers\PasanganController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\RiwayatgolonganController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Golongan
    Route::resource('golongan', GolonganController::class);
    // Jabatan
    Route::resource('jabatan', JabatanController::class);
    // Pegawai
    Route::resource('pegawai', PegawaiController::class);
    // Riwayat Pendidikan
    Route::resource('pendidikan', PendidikanController::class);
    // Data Pasangan (Suami/Isteri)
    Route::resource('pasangan', PasanganController::class);
    // Data Anak
    Route::resource('anak', AnakController::class);
    // Data Orang Tua
    Route::resource('orangtua', OrangtuaController::class);
    // Data Riwayat Golongan
    Route::resource('riwayatgolongan', RiwayatgolonganController::class);
});
