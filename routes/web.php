<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PermohonanInformasiController;
use App\Http\Controllers\Admin\AdminPermohonanController;
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
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminPermohonanController::class, 'dashboard'])
        ->name('admin.dashboard');
});

    // Routes untuk User (Harus Login)
Route::middleware(['auth'])->group(function () {
    Route::resource('permohonan', PermohonanInformasiController::class);
});

// ============================================
// ROUTES UNTUK ADMIN (Harus Login sebagai Admin)
// ============================================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('dashboard', [AdminPermohonanController::class, 'dashboard'])->name('dashboard');
    
    // Kelola Permohonan
    Route::get('permohonan', [AdminPermohonanController::class, 'index'])->name('permohonan.index');
    Route::get('permohonan/{id}', [AdminPermohonanController::class, 'show'])->name('permohonan.show');
    Route::put('permohonan/{id}/update-status', [AdminPermohonanController::class, 'updateStatus'])->name('permohonan.update-status');
    Route::delete('permohonan/{id}', [AdminPermohonanController::class, 'destroy'])->name('permohonan.destroy');
});

 // Permohonan Routes (untuk user yang sudah login)
Route::middleware(['auth'])->group(function () {
    
    // CRUD Permohonan
    Route::get('/permohonan', [PermohonanController::class, 'index'])->name('permohonan.index');
    Route::get('/permohonan/create', [PermohonanController::class, 'create'])->name('permohonan.create');
    Route::post('/permohonan', [PermohonanController::class, 'store'])->name('permohonan.store');
    Route::get('/permohonan/{id}', [PermohonanController::class, 'show'])->name('permohonan.show');
    
    // Download Files
    Route::get('/permohonan/{id}/download-file-pendukung', [PermohonanController::class, 'downloadFilePendukung'])
        ->name('permohonan.download-file-pendukung');
    
    Route::get('/permohonan/{id}/download-file-tanggapan', [PermohonanController::class, 'downloadFileTanggapan'])
        ->name('permohonan.download-file-tanggapan');
    
    // Cancel Permohonan
    Route::delete('/permohonan/{id}/cancel', [PermohonanController::class, 'cancel'])
        ->name('permohonan.cancel');
});