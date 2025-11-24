<?php
// app/Http/Controllers/InformasiController.php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InformasiController extends Controller
{
    public function publik(): View
    {
        return view('informasi.publik');
    }

    public function berkala(): View
    {
        return view('informasi.berkala');
    }

    public function sertaMerta(): View
    {
        return view('informasi.serta-merta');
    }

    public function setiapSaat(): View
    {
        return view('informasi.setiap-saat');
    }

    public function ipkd(): View
    {
        return view('informasi.ipkd');
    }

    public function permohonan(): View
    {
        return view('informasi.permohonan');
    }

    public function keberatan(): View
    {
        return view('informasi.keberatan');
    }
}