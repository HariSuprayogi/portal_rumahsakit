<?php
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('kontak', KontakController::class);
Route::resource('pendaftaran', PendaftaranController::class);