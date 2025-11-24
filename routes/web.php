<?php
// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Profil Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('index');
});

// Tentang PPID Routes
Route::get('/tentang-ppid', [ProfilController::class, 'tentangPpid'])->name('tentang-ppid');

// Informasi Routes
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/publik', [InformasiController::class, 'publik'])->name('publik');
    Route::get('/berkala', [InformasiController::class, 'berkala'])->name('berkala');
    Route::get('/serta-merta', [InformasiController::class, 'sertaMerta'])->name('serta-merta');
    Route::get('/setiap-saat', [InformasiController::class, 'setiapSaat'])->name('setiap-saat');
});

// IPKD Route
Route::get('/ipkd', [InformasiController::class, 'ipkd'])->name('ipkd');

// Pengaduan Routes
Route::prefix('pengaduan')->name('pengaduan.')->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('index');
    Route::post('/store', [PengaduanController::class, 'store'])->name('store');
});

// Sibadra Route
Route::get('/sibadra', function () {
    return view('sibadra.index');
})->name('sibadra');

// Permohonan Informasi Routes
Route::get('/permohonan-informasi', [InformasiController::class, 'permohonan'])->name('permohonan.informasi');
Route::get('/permohonan-keberatan', [InformasiController::class, 'keberatan'])->name('permohonan.keberatan');

// Berita & Kontak
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Auth Routes (Breeze)
require __DIR__.'/auth.php';

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});