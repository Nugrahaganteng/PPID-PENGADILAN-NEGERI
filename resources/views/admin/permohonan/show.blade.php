<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="bg-blue-600 p-3 rounded-xl shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900">Detail Permohonan</h1>
                            <p class="text-gray-600 mt-1">Informasi lengkap permohonan dan riwayat notifikasi</p>
                        </div>
                    </div>
                    <a href="{{ route('admin.permohonan.index') }}" 
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white px-6 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Permohonan Info -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold text-gray-900">Informasi Permohonan</h2>
                            <span class="px-4 py-2 rounded-full text-sm font-bold {{ $permohonan->status_badge }}">
                                {{ $permohonan->status_text }}
                            </span>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-1">Subjek</label>
                                <p class="text-gray-900 font-medium">{{ $permohonan->subjek }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-1">Isi Permohonan</label>
                                <p class="text-gray-900 bg-gray-50 p-4 rounded-lg">{{ $permohonan->isi_permohonan }}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-1">Tanggal Pengajuan</label>
                                <p class="text-gray-900">{{ $permohonan->created_at->format('d M Y H:i') }}</p>
                            </div>
                            @if($permohonan->tanggal_tanggapan)
                            <div>
                                <label class="block text-sm font-semibold text-gray-600 mb-1">Tanggal Ditanggapi</label>
                                <p class="text-gray-900">{{ $permohonan->tanggal_tanggapan->format('d M Y H:i') }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Tanggapan -->
                    @if($permohonan->tanggapan)
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Tanggapan Admin</h2>
                        <p class="text-gray-900 bg-blue-50 p-4 rounded-lg border border-blue-200">{{ $permohonan->tanggapan }}</p>
                    </div>
                    @endif

                    <!-- Files -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">File Lampiran</h2>
                        <div class="space-y-3">
                            @if($permohonan->file_pendukung)
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <p class="text-sm font-semibold text-gray-600 mb-2">File Permohonan</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-900">{{ basename($permohonan->file_pendukung) }}</span>
                                    <a href="{{ route('permohonan.download-file-pendukung', $permohonan->id) }}" 
                                       class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Download</a>
                                </div>
                            </div>
                            @endif
                            @if($permohonan->file_tanggapan)
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <p class="text-sm font-semibold text-gray-600 mb-2">File Balasan</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-900">{{ basename($permohonan->file_tanggapan) }}</span>
                                    <a href="{{ route('permohonan.download-file-tanggapan', $permohonan->id) }}" 
                                       class="text-blue-600 hover:text-blue-800 font-semibold text-sm">Download</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- User Info -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <h2 class="text-lg font-bold text-gray-900 mb-4">Pemohon</h2>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex-shrink-0 h-12 w-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-md">
                                {{ strtoupper(substr($permohonan->user->name, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">{{ $permohonan->user->name }}</p>
                                <p class="text-sm text-gray-600">{{ $permohonan->user->email }}</p>
                            </div>
                        </div>
                        @if($permohonan->user->no_telp)
                        <div class="text-sm text-gray-600">
                            <strong>No. Telepon:</strong><br>
                            {{ $permohonan->user->no_telp }}
                        </div>
                        @endif
                    </div>

                    <!-- Actions -->
                    @if($permohonan->status !== 'selesai' && $permohonan->status !== 'ditolak')
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <h2 class="text-lg font-bold text-gray-900 mb-4">Aksi</h2>
                        <a href="{{ route('admin.permohonan.edit', $permohonan->id) }}" 
                           class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 text-white px-6 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                            Tanggapi Permohonan
                        </a>
                    </div>
                    @endif

                    <!-- Notification History -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-lg font-bold text-gray-900">Riwayat Notifikasi</h2>
                            @if($permohonan->notifications->count() > 0)
                            <form action="{{ route('admin.permohonan.resend-notification', $permohonan->id) }}" method="POST" class="inline">
                                @csrf
                                <input type="hidden" name="type" value="both">
                                <button type="submit" class="text-sm text-blue-600 hover:text-blue-800 font-semibold">
                                    Kirim Ulang
                                </button>
                            </form>
                            @endif
                        </div>

                        @if($permohonan->notifications->count() > 0)
                        <div class="space-y-3">
                            @foreach($permohonan->notifications as $notif)
                            <div class="bg-gray-50 p-4 rounded-lg border {{ $notif->status == 'sent' ? 'border-green-200' : 'border-red-200' }}">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center gap-2">
                                        @if($notif->type == 'email')
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="text-sm font-semibold text-gray-900">Email</span>
                                        @else
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        <span class="text-sm font-semibold text-gray-900">WhatsApp</span>
                                        @endif
                                    </div>
                                    <span class="text-xs {{ $notif->status == 'sent' ? 'text-green-600 bg-green-100' : 'text-red-600 bg-red-100' }} px-2 py-1 rounded-full font-semibold">
                                        {{ $notif->status == 'sent' ? '✓ Terkirim' : '✗ Gagal' }}
                                    </span>
                                </div>
                                <p class="text-xs text-gray-600">{{ $notif->message }}</p>
                                <p class="text-xs text-gray-500 mt-1">
                                    @if($notif->sent_at)
                                        {{ $notif->sent_at->diffForHumans() }}
                                    @else
                                        <span class="text-orange-600 font-semibold">Pending...</span>
                                    @endif
                                </p>
                            </div>
                            @endforeach
                        </div>
                        @else
                        <p class="text-sm text-gray-500 text-center py-4">Belum ada notifikasi terkirim</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>