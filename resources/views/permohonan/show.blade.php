<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Detail Permohonan</h1>
                <p class="text-gray-600 mt-1">Informasi lengkap permohonan Anda</p>
            </div>
            <a href="{{ route('permohonan.index') }}" 
               class="text-blue-600 hover:text-blue-800 font-medium">
                ← Kembali
            </a>
        </div>

        <!-- Status Badge -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <div class="flex items-center justify-between">
                <div>
                    <span class="text-sm text-gray-600">Status Permohonan:</span>
                    <span class="ml-2 px-4 py-2 inline-flex text-sm font-semibold rounded-full {{ $permohonan->status_badge }}">
                        {{ $permohonan->status_text }}
                    </span>
                </div>
                <div class="text-sm text-gray-600">
                    📅 Diajukan: {{ $permohonan->created_at->format('d M Y H:i') }}
                </div>
            </div>
        </div>

        <!-- Data Pemohon -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4 border-b pb-2">Data Pemohon</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="text-sm text-gray-600">Nama Lengkap</label>
                    <p class="text-gray-900 font-medium">{{ $permohonan->nama_lengkap }}</p>
                </div>
                <div>
                    <label class="text-sm text-gray-600">Email</label>
                    <p class="text-gray-900 font-medium">{{ $permohonan->email }}</p>
                </div>
                <div>
                    <label class="text-sm text-gray-600">No. Telepon</label>
                    <p class="text-gray-900 font-medium">{{ $permohonan->no_telp }}</p>
                </div>
                <div>
                    <label class="text-sm text-gray-600">Alamat</label>
                    <p class="text-gray-900 font-medium">{{ $permohonan->alamat }}</p>
                </div>
            </div>
        </div>

        <!-- Detail Permohonan -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4 border-b pb-2">Detail Permohonan</h2>
            
            <div class="mb-4">
                <label class="text-sm text-gray-600">Subjek</label>
                <p class="text-gray-900 font-medium">{{ $permohonan->subjek }}</p>
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-600">Isi Permohonan</label>
                <p class="text-gray-900 whitespace-pre-line">{{ $permohonan->isi_permohonan }}</p>
            </div>

            @if($permohonan->file_pendukung)
            <div>
                <label class="text-sm text-gray-600 mb-2 block">File Lampiran</label>
                @php
                    $fileName = basename($permohonan->file_pendukung);
                    $fileExt = strtolower(pathinfo($permohonan->file_pendukung, PATHINFO_EXTENSION));
                @endphp
                <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-lg">
                    <div class="text-3xl">📄</div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">{{ $fileName }}</p>
                        <p class="text-xs text-gray-500">{{ strtoupper($fileExt) }}</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="previewFile('{{ $fileExt }}', '{{ $fileName }}', '{{ $permohonan->id }}', 'pendukung')" 
                                class="px-3 py-1 text-sm bg-green-600 hover:bg-green-700 text-white rounded-lg transition">
                            👁️ Lihat
                        </button>
                        <a href="{{ route('permohonan.download-file-pendukung', $permohonan->id) }}" 
                           class="px-3 py-1 text-sm bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                            📥 Download
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <!-- Tanggapan -->
        @if($permohonan->tanggapan || $permohonan->file_tanggapan)
        <div class="bg-green-50 border border-green-200 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4 border-b border-green-200 pb-2">
                ✅ Tanggapan dari Admin
            </h2>
            
            @if($permohonan->tanggal_tanggapan)
            <div class="text-sm text-gray-600 mb-4">
                📅 Ditanggapi: {{ $permohonan->tanggal_tanggapan->format('d M Y H:i') }}
            </div>
            @endif

            @if($permohonan->tanggapan)
            <div class="mb-4">
                <label class="text-sm text-gray-600">Isi Tanggapan</label>
                <p class="text-gray-900 whitespace-pre-line">{{ $permohonan->tanggapan }}</p>
            </div>
            @endif

            @if($permohonan->file_tanggapan)
            <div>
                <label class="text-sm text-gray-600 mb-2 block">File Tanggapan</label>
                @php
                    $fileNameTanggapan = basename($permohonan->file_tanggapan);
                    $fileExtTanggapan = strtolower(pathinfo($permohonan->file_tanggapan, PATHINFO_EXTENSION));
                @endphp
                <div class="flex items-center gap-3 bg-white p-3 rounded-lg border border-green-200">
                    <div class="text-3xl">📄</div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">{{ $fileNameTanggapan }}</p>
                        <p class="text-xs text-gray-500">{{ strtoupper($fileExtTanggapan) }}</p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="previewFile('{{ $fileExtTanggapan }}', '{{ $fileNameTanggapan }}', '{{ $permohonan->id }}', 'tanggapan')" 
                                class="px-3 py-1 text-sm bg-green-600 hover:bg-green-700 text-white rounded-lg transition">
                            👁️ Lihat
                        </button>
                        <a href="{{ route('permohonan.download-file-tanggapan', $permohonan->id) }}" 
                           class="px-3 py-1 text-sm bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                            📥 Download
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>

    <!-- Modal Preview File -->
    <div id="filePreviewModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl">
            <div class="flex justify-between items-center p-4 border-b bg-gray-50">
                <h3 class="text-lg font-semibold text-gray-900">Preview File</h3>
                <button onclick="closePreview()" class="text-gray-500 hover:text-gray-700 text-2xl leading-none hover:bg-gray-200 w-8 h-8 rounded-full transition">
                    ×
                </button>
            </div>
            <div id="previewContent" class="p-4 overflow-auto max-h-[calc(90vh-80px)]"></div>
        </div>
    </div>

    <script>
        function previewFile(extension, filename, id, type) {
            const modal = document.getElementById('filePreviewModal');
            const content = document.getElementById('previewContent');
            
            modal.classList.remove('hidden');
            content.innerHTML = '<div class="text-center py-12"><div class="animate-spin rounded-full h-16 w-16 border-b-4 border-blue-600 mx-auto"></div><p class="mt-4 text-gray-600 font-medium">Memuat file...</p></div>';
            
            const ext = extension.toLowerCase();
            const viewUrl = type === 'pendukung' ? `/permohonan/${id}/view-file-pendukung` : `/permohonan/${id}/view-file-tanggapan`;
            const downloadUrl = type === 'pendukung' ? `/permohonan/${id}/download-file-pendukung` : `/permohonan/${id}/download-file-tanggapan`;
            
            if (['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'].includes(ext)) {
                content.innerHTML = `<div class="text-center"><p class="text-sm text-gray-600 mb-4 font-medium">${filename}</p><img src="${viewUrl}" class="max-w-full h-auto mx-auto rounded-lg shadow-lg" style="max-height: 70vh;"><div class="mt-4"><a href="${downloadUrl}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">📥 Download</a></div></div>`;
            } else if (ext === 'pdf') {
                content.innerHTML = `<div><div class="flex justify-between mb-2"><p class="text-sm text-gray-600 font-medium">${filename}</p><a href="${downloadUrl}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">📥 Download</a></div><iframe src="${viewUrl}#toolbar=0" class="w-full h-[70vh] border rounded-lg"></iframe></div>`;
            } else {
                content.innerHTML = `<div class="text-center py-12"><div class="text-6xl mb-4">📄</div><p class="font-semibold text-gray-900 mb-2 text-lg">${filename}</p><a href="${downloadUrl}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg inline-flex items-center gap-2 font-semibold">📥 Download</a></div>`;
            }
        }
        
        function closePreview() {
            document.getElementById('filePreviewModal').classList.add('hidden');
        }
        
        document.getElementById('filePreviewModal').addEventListener('click', function(e) {
            if (e.target === this) closePreview();
        });
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closePreview();
        });
    </script>
</x-app-layout>