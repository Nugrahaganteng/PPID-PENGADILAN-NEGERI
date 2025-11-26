<?php

namespace App\Http\Controllers;

use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PermohonanController extends Controller
{
    // Tampilkan daftar permohonan user
    public function index()
    {
        $permohonan = PermohonanInformasi::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);
            
        return view('permohonan.index', compact('permohonan'));
    }

    // Form buat permohonan baru
    public function create()
    {
        return view('permohonan.create');
    }

    // Simpan permohonan baru
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_lengkap' => 'required|max:255',
        'email' => 'required|email|max:255',
        'no_telp' => 'required|max:20',
        'alamat' => 'required',
        'subjek' => 'required|max:255',
        'isi_permohonan' => 'required',
        'file_pendukung' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png'
    ]);

    $validated['user_id'] = Auth::id();
    $validated['status'] = 'pending';

    if ($request->hasFile('file_pendukung')) {
        $validated['file_pendukung'] = $request->file('file_pendukung')->store('permohonan/pendukung', 'public');
    }

    PermohonanInformasi::create($validated);

    return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil diajukan!');
}

    // Lihat detail permohonan
    public function show($id)
    {
        $permohonan = PermohonanInformasi::where('user_id', Auth::id())
            ->findOrFail($id);
            
        return view('permohonan.show', compact('permohonan'));
    }

    // Method untuk VIEW file pendukung (untuk preview)
    public function viewFilePendukung($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);
        
        // Cek apakah user memiliki akses
        if (Auth::user()->role !== 'admin' && $permohonan->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }
        
        if (!$permohonan->file_pendukung || !Storage::exists($permohonan->file_pendukung)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $path = Storage::path($permohonan->file_pendukung);
        $mimeType = Storage::mimeType($permohonan->file_pendukung);
        
        return response()->file($path, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($permohonan->file_pendukung) . '"'
        ]);
    }
    
    // Method untuk DOWNLOAD file pendukung
    public function downloadFilePendukung($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);
        
        // Cek apakah user memiliki akses
        if (Auth::user()->role !== 'admin' && $permohonan->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }
        
        if (!$permohonan->file_pendukung || !Storage::exists($permohonan->file_pendukung)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $fileName = basename($permohonan->file_pendukung);
        
        return Storage::download($permohonan->file_pendukung, $fileName);
    }
    
    // Method untuk VIEW file tanggapan (untuk preview)
    public function viewFileTanggapan($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);
        
        // Cek apakah user memiliki akses
        if (Auth::user()->role !== 'admin' && $permohonan->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }
        
        if (!$permohonan->file_tanggapan || !Storage::exists($permohonan->file_tanggapan)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $path = Storage::path($permohonan->file_tanggapan);
        $mimeType = Storage::mimeType($permohonan->file_tanggapan);
        
        return response()->file($path, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($permohonan->file_tanggapan) . '"'
        ]);
    }
    
    // Method untuk DOWNLOAD file tanggapan
    public function downloadFileTanggapan($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);
        
        // Cek apakah user memiliki akses
        if (Auth::user()->role !== 'admin' && $permohonan->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }
        
        if (!$permohonan->file_tanggapan || !Storage::exists($permohonan->file_tanggapan)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $fileName = basename($permohonan->file_tanggapan);
        
        return Storage::download($permohonan->file_tanggapan, $fileName);
    }
}