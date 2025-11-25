<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Detail Permohonan</h1>
                <p class="text-gray-600 mt-1">ID: #{{ $permohonan->id }}</p>
            </div>
            <a href="{{ route('permohonan.index') }}" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">
                ← Kembali
            </a>
        </div>

        <!-- Status Banner -->
        <div class="mb-6">
            @if($permohonan->status == 'selesai')
            <div class="bg-green-100 border-l-4 border-green-500 p-4 rounded-r-lg">
                <div class="flex items-center">
                    <span class="text-3xl mr-3">✅</span>
                    <div>
                        <h3 class="font-bold text-green-900">Permohonan Anda Telah Selesai!</h3>
                        <p class="text-green-700 text-sm">Admin telah memproses permohonan Anda pada {{ $permohonan->tanggal_diproses->format('d F Y, H:i') }}</p>
                    </div>
                </div>
            </div>
            @elseif($permohonan->status == 'diproses')
            <div class="bg-blue-100 border-l-4 border-blue-500 p-4 rounded-r-lg">
                <div class="flex items-center">
                    <span class="text-3xl mr-3">🔄</span>
                    <div>
                        <h3 class="font-bold text-blue-900">Permohonan Sedang Diproses</h3>
                        <p class="text-blue-700 text-sm">Admin sedang memproses permohonan Anda</p>
                    </div>
                </div>
            </div>
            @elseif($permohonan->status == 'ditolak')
            <div class="bg-red-100 border-l-4 border-red-500 p-4 rounded-r-lg">
                <div class="flex items-center">
                    <span class="text-3xl mr-3">❌</span>
                    <div>
                        <h3 class="font-bold text-red-900">Permohonan Ditolak</h3>
                        <p class="text-red-700 text-sm">Permohonan Anda tidak dapat diproses</p>
                    </div>
                </div>
            </div>
            @else
            <div class="bg-yellow-100 border-l-4 border-yellow-500 p-4 rounded-r-lg">
                <div class="flex items-center">
                    <span class="text-3xl mr-3">⏳</span>
                    <div>
                        <h3 class="font-bold text-yellow-900">Menunggu Proses</h3>
                        <p class="text-yellow-700 text-sm">Permohonan Anda sedang menunggu untuk diproses</p>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <!-- Informasi Permohonan -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4">📋 Informasi Permohonan</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="text-sm font-medium text-gray-500 block">Subjek</label>
                    <p class="text-gray-900 font-semibold">{{ $permohonan->subjek }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-500 block">Isi Permohonan</label>
                    <p class="text-gray-900 leading-relaxed whitespace-pre-wrap">{{ $permohonan->isi_permohonan }}</p>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-500 block">File Pendukung</label>
                    @if($permohonan->file_pendukung)
                        <a href="{{ Storage::url($permohonan->file_pendukung) }}" 
                           target="_blank"
                           class="text-blue-600 hover:text-blue-800 flex items-center gap-2">
                            📎 {{ basename($permohonan->file_pendukung) }}
                        </a>
                    @else
                        <p class="text-gray-400">Tidak ada file</p>
                    @endif
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-500 block">Status</label>
                    <span class="px-4 py-2 inline-flex text-sm font-semibold rounded-full {{ $permohonan->status_badge }}">
                        {{ $permohonan->status_text }}
                    </span>
                </div>

                <div>
                    <label class="text-sm font-medium text-gray-500 block">Tanggal Pengajuan</label>
                    <p class="text-gray-900">{{ $permohonan->created_at->format('d F Y, H:i') }} WIB</p>
                </div>
            </div>
        </div>

        <!-- Respon Admin (jika ada) -->
        @if($permohonan->catatan_admin || $permohonan->file_balasan)
        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-6 border-l-4 border-blue-400">
            <h3 class="font-bold text-blue-900 mb-4 flex items-center text-lg">
                <span class="text-2xl mr-2">💬</span>
                Respon dari Admin
            </h3>
            
            @if($permohonan->catatan_admin)
            <div class="mb-4">
                <label class="text-sm font-medium text-blue-800 block mb-2">Catatan Admin:</label>
                <div class="bg-white p-4 rounded-lg">
                    <p class="text-blue-900 whitespace-pre-wrap">{{ $permohonan->catatan_admin }}</p>
                </div>
            </div>
            @endif

            @if($permohonan->file_balasan)
            <div>
                <label class="text-sm font-medium text-blue-800 block mb-2">File Balasan:</label>
                <a href="{{ Storage::url($permohonan->file_balasan) }}" 
                   target="_blank"
                   class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition transform hover:scale-105 font-semibold">
                    <span>📥</span>
                    <span>Download File Balasan</span>
                </a>
                <p class="text-xs text-blue-700 mt-2">{{ basename($permohonan->file_balasan) }}</p>
            </div>
            @endif

            <div class="mt-4 text-xs text-blue-700">
                <p>⏰ Diproses pada: {{ $permohonan->tanggal_diproses->format('d F Y, H:i') }}</p>
            </div>
        </div>
        @endif
    </div>
</x-app-layout>