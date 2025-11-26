<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
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
}