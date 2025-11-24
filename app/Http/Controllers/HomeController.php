<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function berita(): View
    {
        return view('berita.index');
    }

    public function kontak(): View
    {
        return view('kontak.index');
    }
}