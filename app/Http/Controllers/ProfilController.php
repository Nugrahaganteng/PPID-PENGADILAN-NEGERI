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
        return view('profil.tentang-ppid');
    }
}