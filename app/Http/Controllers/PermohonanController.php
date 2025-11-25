<?php

namespace App\Http\Controllers;
;
use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PermohonanController extends Controller
{
    /**
     * Display listing of user's permohonan
     */
    public function index()
    {
        $permohonan = PermohonanInformasi::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('permohonan.index', compact('permohonan'));
    }

    /**
     * Show the form for creating new permohonan
     */
    public function create()
    {
        return view('permohonan.create');
    }

    /**
     * Store a newly created permohonan
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'subjek' => 'required|string|max:255',
            'isi_permohonan' => 'required|string',
            'file_pendukung' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:5120',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'no_telp.required' => 'Nomor telepon wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'subjek.required' => 'Subjek permohonan wajib diisi',
            'isi_permohonan.required' => 'Isi permohonan wajib diisi',
            'file_pendukung.mimes' => 'File harus berformat: pdf, doc, docx, jpg, jpeg, png',
            'file_pendukung.max' => 'Ukuran file maksimal 5MB',
        ]);

        $validated['user_id'] = Auth::id();
        $validated['status'] = 'pending';

        // Handle file upload
        if ($request->hasFile('file_pendukung')) {
            $file = $request->file('file_pendukung');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('permohonan', $fileName, 'public');
            $validated['file_pendukung'] = $filePath;
        }

        PermohonanInformasi::create($validated);

        return redirect()->route('permohonan.index')
            ->with('success', '✅ Permohonan berhasil diajukan! Kami akan segera memproses permohonan Anda.');
    }

    /**
     * Display the specified permohonan
     */
    public function show($id)
    {
        $permohonan = PermohonanInformasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('permohonan.show', compact('permohonan'));
    }

    /**
     * Download file pendukung
     */
    public function downloadFilePendukung($id)
    {
        $permohonan = PermohonanInformasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if (!$permohonan->file_pendukung || !Storage::disk('public')->exists($permohonan->file_pendukung)) {
            abort(404, 'File tidak ditemukan');
        }

        return Storage::disk('public')->download($permohonan->file_pendukung);
    }

    /**
     * Download file tanggapan dari admin
     */
    public function downloadFileTanggapan($id)
    {
        $permohonan = PermohonanInformasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if (!$permohonan->file_tanggapan || !Storage::disk('public')->exists($permohonan->file_tanggapan)) {
            abort(404, 'File tanggapan tidak ditemukan');
        }

        return Storage::disk('public')->download($permohonan->file_tanggapan);
    }

    /**
     * Cancel permohonan (only if status is pending)
     */
    public function cancel($id)
    {
        $permohonan = PermohonanInformasi::where('id', $id)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->firstOrFail();

        $permohonan->delete();

        return redirect()->route('permohonan.index')
            ->with('success', '✅ Permohonan berhasil dibatalkan');
    }
}