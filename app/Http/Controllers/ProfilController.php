<?php
// app/Http/Controllers/ProfilController.php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProfilController extends Controller
{
    public function index(): View
    {
        return view('profil.index');
    }

    public function tentangPpid(): View
{
    return view('tentang-ppid.tentang-ppid');
}


    public function maklumat()
    {
        return view('profil.maklumat');
    }

    public function visiMisi()
    {
        return view('profil.visi-misi');
    }

    public function tugasFungsi()
    {
        return view('profil.tugas-fungsi');
    }


    public function bukuRegister()
    {
        return view('tentang-ppid.buku-register');
    }

    public function alasanPenolakan()
    {
        return view('tentang-ppid.alasan-penolakan');
    }

    public function kebijakan()
    {
        return view('tentang-ppid.kebijakan-pelayanan');
    }

    public function statistik()
    {
        return view('tentang-ppid.statistik-waktu');
    }

    public function tataCara()
    {
        return view('tentang-ppid.tata-cara');
    }

}