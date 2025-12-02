<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPermohonanController extends Controller
{
    protected $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

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
    public function index(Request $request)
    {
        $query = PermohonanInformasi::with('user')->latest();

        // Filter berdasarkan status jika ada
        if ($request->status) {
            $query->where('status', $request->status);
        }

        $permohonan = $query->paginate(15);
            
        return view('admin.permohonan.index', compact('permohonan'));
    }

    // Lihat detail permohonan
    public function show($id)
    {
        $permohonan = PermohonanInformasi::with(['user', 'notifications'])->findOrFail($id);
        return view('admin.permohonan.show', compact('permohonan'));
    }

    // Form untuk membalas permohonan
    public function edit($id)
    {
        $permohonan = PermohonanInformasi::with('user')->findOrFail($id);
        return view('admin.permohonan.edit', compact('permohonan'));
    }

    // Update Status dan Tanggapan (Method dari controller lama Anda)
    public function updateStatus(Request $request, $id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,proses,selesai,ditolak',
            'tanggapan' => 'nullable|string',
            'file_tanggapan' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
            'notification_type' => 'nullable|in:email,whatsapp,both'
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

        // Kirim notifikasi jika ada notification_type
        if ($request->filled('notification_type')) {
            $results = $this->notificationService->sendNotification(
                $permohonan, 
                $request->notification_type
            );

            // Buat pesan hasil notifikasi
            $messages = [];
            if (isset($results['email'])) {
                $messages[] = $results['email']['message'];
            }
            if (isset($results['whatsapp'])) {
                $messages[] = $results['whatsapp']['message'];
            }

            $successMessage = 'Status permohonan berhasil diupdate! ' . implode(' ', $messages);
        } else {
            $successMessage = 'Status permohonan berhasil diupdate!';
        }

        return redirect()->route('admin.permohonan.show', $id)
            ->with('success', $successMessage);
    }

    // Update permohonan (untuk edit form dengan notifikasi)
    public function update(Request $request, $id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,proses,selesai,ditolak',
            'tanggapan' => 'required|string',
            'file_tanggapan' => 'nullable|file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png,xls,xlsx',
            'notification_type' => 'required|in:email,whatsapp,both'
        ]);

        // Update status
        $permohonan->status = $validated['status'];
        $permohonan->tanggapan = $validated['tanggapan'];

        // Upload file tanggapan jika ada
        if ($request->hasFile('file_tanggapan')) {
            // Hapus file lama jika ada
            if ($permohonan->file_tanggapan) {
                Storage::disk('public')->delete($permohonan->file_tanggapan);
            }

            $file = $request->file('file_tanggapan');
            $filename = time() . '_' . $file->getClientOriginalName();
            $permohonan->file_tanggapan = $file->storeAs('permohonan/tanggapan', $filename, 'public');
        }

        // Set tanggal tanggapan
        $permohonan->tanggal_tanggapan = now();
        $permohonan->save();

        // Kirim notifikasi
        $notificationType = $request->notification_type;
        $results = $this->notificationService->sendNotification($permohonan, $notificationType);

        // Buat pesan hasil
        $messages = [];
        if (isset($results['email'])) {
            $messages[] = $results['email']['message'];
        }
        if (isset($results['whatsapp'])) {
            $messages[] = $results['whatsapp']['message'];
        }

        $successMessage = 'Permohonan berhasil ditanggapi dan notifikasi telah dikirim! ' . implode(' ', $messages);

        return redirect()->route('admin.permohonan.index')
            ->with('success', $successMessage);
    }

    // Kirim ulang notifikasi
    public function resendNotification(Request $request, $id)
    {
        $permohonan = PermohonanInformasi::findOrFail($id);

        $request->validate([
            'type' => 'required|in:email,whatsapp,both'
        ]);

        // Pastikan permohonan sudah ditanggapi
        if (!$permohonan->tanggapan && !$permohonan->tanggal_tanggapan) {
            return back()->with('error', 'Permohonan belum ditanggapi, tidak dapat mengirim notifikasi.');
        }

        $results = $this->notificationService->sendNotification($permohonan, $request->type);

        $messages = [];
        if (isset($results['email'])) {
            $messages[] = $results['email']['message'];
        }
        if (isset($results['whatsapp'])) {
            $messages[] = $results['whatsapp']['message'];
        }

        return back()->with('success', 'Notifikasi berhasil dikirim ulang! ' . implode(' ', $messages));
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