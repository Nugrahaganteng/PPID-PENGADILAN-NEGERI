<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


// ========== PROFIL ==========
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('index');
    Route::get('/maklumat', [ProfilController::class, 'maklumat'])->name('maklumat');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/tugas-fungsi', [ProfilController::class, 'tugasFungsi'])->name('tugas-fungsi');
});


// ========== TENTANG PPID ==========
Route::prefix('tentang-ppid')->name('tentang.')->group(function () {
    Route::get('/', [ProfilController::class, 'tentangPpid'])->name('ppid');
    Route::get('/buku-register', [ProfilController::class, 'bukuRegister'])->name('buku-register');
    Route::get('/alasan-penolakan', [ProfilController::class, 'alasanPenolakan'])->name('alasan-penolakan');
    Route::get('/kebijakan', [ProfilController::class, 'kebijakan'])->name('kebijakan');
    Route::get('/statistik-waktu', [ProfilController::class, 'statistik'])->name('statistik');
    Route::get('/tata-cara', [ProfilController::class, 'tataCara'])->name('tata-cara');
});


// ========== INFORMASI ==========
Route::prefix('informasi')->name('informasi.')->group(function () {

    // informasi publik
    Route::get('/publik', [InformasiController::class, 'publik'])->name('publik');

    // informasi berkala
    Route::get('/berkala/keuangan', [InformasiController::class, 'laporanKeuangan'])->name('berkala.keuangan');
    Route::get('/berkala/kinerja', [InformasiController::class, 'laporanKinerja'])->name('berkala.kinerja');

    // serta merta
    Route::get('/serta-merta/pengumuman', [InformasiController::class, 'pengumuman'])->name('serta-merta.pengumuman');

    // informasi setiap saat
    Route::get('/setiap-saat/dokumen-hukum', [InformasiController::class, 'dokumenHukum'])->name('setiap-saat.hukum');
});


// IPKD
Route::get('/ipkd', [InformasiController::class, 'ipkd'])->name('ipkd');


// PENGADUAN
Route::prefix('pengaduan')->name('pengaduan.')->group(function () {
    Route::get('/', [PengaduanController::class, 'index'])->name('index');
    Route::post('/store', [PengaduanController::class, 'store'])->name('store');
});


// AUTH (Breeze)
require __DIR__.'/auth.php';


// ADMIN
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
