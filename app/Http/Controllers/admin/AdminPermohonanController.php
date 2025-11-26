<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPermohonanController extends Controller
{
    // Dashboard Admin
    public function dashboard()
    {
        $stats = [
            'total_permohonan' => PermohonanInformasi::count(),
            'pending' => PermohonanInformasi::where('status', 'pending')->count(),
            'proses' => PermohonanInformasi::where('status', 'proses')->count(),
            'selesai' => PermohonanInformasi::where('status', 'selesai')->count(),
            'ditolak' => PermohonanInformasi::where('status', 'ditolak')->count(),
            'total_users' => User::where('role', 'user')->count(),
        ];

        $permohonan_terbaru = PermohonanInformasi::with('user')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('stats', 'permohonan_terbaru'));
    }

    // Tampilkan semua permohonan
    public function index()
    {
        $permohonan = PermohonanInformasi::with('user')
            ->latest()
            ->paginate(15);
            
        return view('admin.permohonan.index', compact('permohonan'));
    }

    // Lihat detail permohonan
    public function show($id)
    {
        $permohonan = PermohonanInformasi::with('user')->findOrFail($id);
        return view('admin.permohonan.show', compact('permohonan'));
    }

    // Form untuk membalas permohonan
    public function edit($id)
    {
        $permohonan = PermohonanInformasi::with('user')->findOrFail($id);
        return view('admin.permohonan.edit', compact('permohonan'));
    }

    // ✅ TAMBAHKAN METHOD INI - Update Status dan Tanggapan
    public function updateStatus(Request $request, $id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,proses,selesai,ditolak',
            'tanggapan' => 'nullable|string',
            'file_tanggapan' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png'
        ]);

        // Update status
        $permohonan->status = $validated['status'];

        // Update tanggapan jika ada
        if ($request->filled('tanggapan')) {
            $permohonan->tanggapan = $validated['tanggapan'];
        }

        // Upload file tanggapan jika ada
        if ($request->hasFile('file_tanggapan')) {
            // Hapus file lama jika ada
            if ($permohonan->file_tanggapan) {
                Storage::disk('public')->delete($permohonan->file_tanggapan);
            }
            
            $permohonan->file_tanggapan = $request->file('file_tanggapan')
                ->store('permohonan/tanggapan', 'public');
        }

        // Set tanggal tanggapan jika ada tanggapan atau file
        if ($request->filled('tanggapan') || $request->hasFile('file_tanggapan')) {
            $permohonan->tanggal_tanggapan = now();
        }

        $permohonan->save();

        return redirect()->route('admin.permohonan.show', $id)
            ->with('success', 'Status permohonan berhasil diupdate!');
    }

    // Update permohonan (untuk edit form)
    public function update(Request $request, $id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,proses,selesai,ditolak',
            'tanggapan' => 'nullable|string',
            'file_tanggapan' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png'
        ]);

        // Hapus file lama jika ada file baru
        if ($request->hasFile('file_tanggapan') && $permohonan->file_tanggapan) {
            Storage::disk('public')->delete($permohonan->file_tanggapan);
        }

        if ($request->hasFile('file_tanggapan')) {
            $validated['file_tanggapan'] = $request->file('file_tanggapan')
                ->store('permohonan/tanggapan', 'public');
        }

        // Set tanggal tanggapan jika ada tanggapan
        if ($request->filled('tanggapan') || $request->hasFile('file_tanggapan')) {
            $validated['tanggal_tanggapan'] = now();
        }

        $permohonan->update($validated);

        return redirect()->route('admin.permohonan.index')
            ->with('success', 'Permohonan berhasil diupdate!');
    }

    // Hapus permohonan
    public function destroy($id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        // Hapus file jika ada
        if ($permohonan->file_pendukung) {
            Storage::disk('public')->delete($permohonan->file_pendukung);
        }
        if ($permohonan->file_tanggapan) {
            Storage::disk('public')->delete($permohonan->file_tanggapan);
        }

        $permohonan->delete();

        return redirect()->route('admin.permohonan.index')
            ->with('success', 'Permohonan berhasil dihapus!');
    }
}