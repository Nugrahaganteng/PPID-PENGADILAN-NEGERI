<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPermohonanController extends Controller
{

    public function dashboard()
{
    // Hitung statistik berdasarkan status
    $totalPermohonan = PermohonanInformasi::count();
    $pending = PermohonanInformasi::where('status', 'pending')->count();
    $diproses = PermohonanInformasi::where('status', 'diproses')->count();
    $selesai = PermohonanInformasi::where('status', 'selesai')->count();
    $ditolak = PermohonanInformasi::where('status', 'ditolak')->count();
    
    // Ambil permohonan terbaru (10 data terakhir)
    $permohonanTerbaru = PermohonanInformasi::latest()
        ->take(10)
        ->get();
    
    return view('admin.dashboard', compact(
        'totalPermohonan',
        'pending',
        'diproses',
        'selesai',
        'ditolak',
        'permohonanTerbaru'
    ));
}
    /**
     * Display listing of all permohonan
     */
    public function index(Request $request)
    {
        $query = PermohonanInformasi::with('user')->orderBy('created_at', 'desc');

        // Filter by status
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subjek', 'like', "%{$search}%")
                  ->orWhere('isi_permohonan', 'like', "%{$search}%");
            });
        }

        $permohonan = $query->paginate(15);

        // Stats
        $stats = [
            'pending' => PermohonanInformasi::where('status', 'pending')->count(),
            'diproses' => PermohonanInformasi::where('status', 'diproses')->count(),
            'selesai' => PermohonanInformasi::where('status', 'selesai')->count(),
            'ditolak' => PermohonanInformasi::where('status', 'ditolak')->count(),
        ];

        return view('admin.permohonan.index', compact('permohonan', 'stats'));
    }

    /**
     * Display the specified permohonan
     */
    public function show($id)
    {
        $permohonan = PermohonanInformasi::with('user')->findOrFail($id);
        return view('admin.permohonan.show', compact('permohonan'));
    }

    /**
     * Update status and response
     */
    public function updateStatus(Request $request, $id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,diproses,selesai,ditolak',
            'tanggapan_admin' => 'nullable|string',
            'file_tanggapan' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        // Update status
        $permohonan->status = $validated['status'];
        
        // Update tanggapan if provided
        if ($request->filled('tanggapan_admin')) {
            $permohonan->tanggapan_admin = $validated['tanggapan_admin'];
        }

        // Handle file upload
        if ($request->hasFile('file_tanggapan')) {
            // Delete old file if exists
            if ($permohonan->file_tanggapan && Storage::disk('public')->exists($permohonan->file_tanggapan)) {
                Storage::disk('public')->delete($permohonan->file_tanggapan);
            }

            // Store new file
            $file = $request->file('file_tanggapan');
            $fileName = time() . '_tanggapan_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('tanggapan', $fileName, 'public');
            $permohonan->file_tanggapan = $filePath;
        }

        // Set tanggal tanggapan
        if ($request->filled('tanggapan_admin') || $request->hasFile('file_tanggapan')) {
            $permohonan->tanggal_tanggapan = now();
        }

        $permohonan->save();

        return redirect()->route('admin.permohonan.show', $permohonan->id)
            ->with('success', '✅ Status permohonan berhasil diperbarui!');
    }

    /**
     * Remove the specified permohonan
     */
    public function destroy($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        // Delete files if exist
        if ($permohonan->file_pendukung && Storage::disk('public')->exists($permohonan->file_pendukung)) {
            Storage::disk('public')->delete($permohonan->file_pendukung);
        }

        if ($permohonan->file_tanggapan && Storage::disk('public')->exists($permohonan->file_tanggapan)) {
            Storage::disk('public')->delete($permohonan->file_tanggapan);
        }

        $permohonan->delete();

        return redirect()->route('admin.permohonan.index')
            ->with('success', '✅ Permohonan berhasil dihapus!');
    }
}