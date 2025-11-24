<?php
// app/Http/Controllers/InformasiController.php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InformasiController extends Controller
{
    public function publik() {
    return view('informasi-publik.informasi-publik');
}

public function laporanKeuangan() {
    return view('informasi-berkala.laporan-keuangan');
}

public function laporanKinerja() {
    return view('informasi-berkala.laporan-kinerja');
}

public function pengumuman() {
    return view('informasi-sertamerta.pengumuman-darurat');
}

public function dokumenHukum() {
    return view('informasi-setiap.dokumen-hukum');
}

public function ipkd() {
    return view('ipkd.index');
}

}