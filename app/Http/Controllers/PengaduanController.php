<?php
// app/Http/Controllers/PengaduanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PengaduanController extends Controller
{
    public function index(): View
    {
        return view('pengaduan.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Process pengaduan here

        return back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}