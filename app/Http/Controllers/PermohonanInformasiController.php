<?php

namespace App\Http\Controllers;

use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PermohonanInformasiController extends Controller
{
    /**
     * Tampilkan daftar permohonan milik user yang login
     */
    public function index()
    {
        $permohonan = PermohonanInformasi::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('permohonan.index', compact('permohonan'));
    }

    /**
     * Tampilkan form untuk membuat permohonan baru
     */
    public function create()
    {
        return view('permohonan.create');
    }

    /**
     * Simpan permohonan baru ke database
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telp' => 'required|string|max:20',
            'subjek' => 'required|string|max:255',
            'isi_permohonan' => 'required|string',
            'file_pendukung' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120', // Max 5MB
        ]);

        // Upload file jika ada
        if ($request->hasFile('file_pendukung')) {
            $validated['file_pendukung'] = $request->file('file_pendukung')
                ->store('permohonan/pendukung', 'public');
        }

        // Tambahkan user_id
        $validated['user_id'] = auth()->id();

        // Simpan ke database
        PermohonanInformasi::create($validated);

        return redirect()->route('permohonan.index')
            ->with('success', 'Permohonan informasi berhasil diajukan!');
    }

    /**
     * Tampilkan detail permohonan
     */
    public function show($id)
    {
        $permohonan = PermohonanInformasi::where('user_id', auth()->id())
            ->findOrFail($id);

        return view('permohonan.show', compact('permohonan'));
    }
}