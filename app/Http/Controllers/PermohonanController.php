<?php

namespace App\Http\Controllers;

use App\Mail\PermohonanNotification;
use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Mail;

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
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'subjek' => 'required|string|max:255',
            'isi_permohonan' => 'required|string',
            'file_pendukung' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png'
        ]);

        // Siapkan data untuk disimpan
        $data = [
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'subjek' => $request->subjek,
            'isi_permohonan' => $request->isi_permohonan,
            'user_id' => Auth::id(),
            'status' => 'pending',
        ];

        // Handle file upload jika ada
        if ($request->hasFile('file_pendukung')) {
            $data['file_pendukung'] = $request->file('file_pendukung')
                ->store('permohonan/pendukung', 'public');
        }

        // Simpan ke database
        PermohonanInformasi::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('permohonan.index')
            ->with('success', 'Permohonan informasi berhasil diajukan!');
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
        
        if (!$permohonan->file_pendukung || !Storage::disk('public')->exists($permohonan->file_pendukung)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $path = Storage::disk('public')->path($permohonan->file_pendukung);
        $mimeType = Storage::disk('public')->mimeType($permohonan->file_pendukung);
        
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
        
        if (!$permohonan->file_pendukung || !Storage::disk('public')->exists($permohonan->file_pendukung)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $fileName = basename($permohonan->file_pendukung);
        
        return Storage::disk('public')->download($permohonan->file_pendukung, $fileName);
    }
    
    // Method untuk VIEW file tanggapan (untuk preview)
    public function viewFileTanggapan($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);
        
        // Cek apakah user memiliki akses
        if (Auth::user()->role !== 'admin' && $permohonan->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }
        
        if (!$permohonan->file_tanggapan || !Storage::disk('public')->exists($permohonan->file_tanggapan)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $path = Storage::disk('public')->path($permohonan->file_tanggapan);
        $mimeType = Storage::disk('public')->mimeType($permohonan->file_tanggapan);
        
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
        
        if (!$permohonan->file_tanggapan || !Storage::disk('public')->exists($permohonan->file_tanggapan)) {
            abort(404, 'File tidak ditemukan');
        }
        
        $fileName = basename($permohonan->file_tanggapan);
        
        return Storage::disk('public')->download($permohonan->file_tanggapan, $fileName);
    }

    public function tanggapiPermohonan(Request $request, $id)
{
    $permohonan = PermohonanInformasi::findOrFail($id);
    
    $permohonan->update([
        'status_permohonan' => $request->status_permohonan,
        'tanggapan' => $request->tanggapan,
        'catatan' => $request->catatan,
    ]);

    try {
        // Kirim ke email pemohon langsung
        Mail::to($permohonan->email)
            ->send(new PermohonanNotification($permohonan));
        
        return response()->json([
            'success' => true,
            'message' => '✅ Permohonan berhasil ditanggapi dan email telah dikirim!'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => true,
            'message' => '✅ Permohonan berhasil ditanggapi',
            'warning' => '⚠️ Email gagal: ' . $e->getMessage()
        ]);
    }
}
}