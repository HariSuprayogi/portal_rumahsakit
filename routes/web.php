<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\InformasiKamarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Kontak & Pendaftaran
Route::resource('kontak', KontakController::class);
Route::resource('pendaftaran', PendaftaranController::class);

// ===== Jadwal Dokter =====
Route::get('jadwal_dokter', [FrontController::class, 'jadwal_dokter'])->name('front.jadwal_dokter.index');
Route::get('jadwal_dokter/tambah', [FrontController::class, 'tambah'])->name('front.jadwal_dokter.tambah');
Route::post('jadwal_dokter/store', [FrontController::class, 'store'])->name('front.jadwal_dokter.store');

Route::get('jadwal_dokter/edit/{id}', [FrontController::class, 'edit'])->name('front.jadwal_dokter.edit');
Route::put('jadwal_dokter/update/{id}', [FrontController::class, 'update'])->name('front.jadwal_dokter.update');
Route::delete('jadwal_dokter/destroy/{id}', [FrontController::class, 'destroy'])->name('front.jadwal_dokter.destroy');

// ===== Informasi Kamar =====
Route::get('informasi_kamar', [InformasiKamarController::class, 'informasi_kamar'])->name('front.informasi_kamar.index');
Route::get('informasi_kamar/tambah', [InformasiKamarController::class, 'tambah'])->name('front.informasi_kamar.tambah');
Route::post('informasi_kamar/store', [InformasiKamarController::class, 'store'])->name('front.informasi_kamar.store');

Route::get('informasi_kamar/edit/{id}', [InformasiKamarController::class, 'edit'])->name('front.informasi_kamar.edit');
Route::put('informasi_kamar/update/{id}', [InformasiKamarController::class, 'update'])->name('front.informasi_kamar.update');
Route::delete('informasi_kamar/destroy/{id}', [InformasiKamarController::class, 'destroy'])->name('front.informasi_kamar.destroy');
