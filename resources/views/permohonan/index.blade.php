<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Permohonan Informasi</h1>
                <p class="text-gray-600 mt-1">Kelola dan pantau permohonan informasi Anda</p>
            </div>
            <a href="{{ route('permohonan.create') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                ➕ Buat Permohonan Baru
            </a>
        </div>

        <!-- Alert Success -->
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- Tabel Permohonan -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subjek</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File Lampiran</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File Balasan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($permohonan as $index => $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            {{ $permohonan->firstItem() + $index }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            <div class="font-medium">{{ $item->subjek }}</div>
                            <div class="text-gray-500 text-xs mt-1">{{ Str::limit($item->isi_permohonan, 50) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $item->status_badge }}">
                                {{ $item->status_text }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            @if($item->file_pendukung)
                                @php
                                    $filePath = Storage::url($item->file_pendukung);
                                    $fileName = basename($item->file_pendukung);
                                    $fileExt = strtolower(pathinfo($item->file_pendukung, PATHINFO_EXTENSION));
                                @endphp
                                <div class="flex gap-2">
                                    <button onclick="previewFile('{{ $filePath }}', '{{ $fileExt }}', '{{ $fileName }}')" 
                                            class="text-green-600 hover:text-green-800 flex items-center gap-1">
                                        👁️ Lihat
                                    </button>
                                    <a href="{{ route('permohonan.download-file-pendukung', $item->id) }}" 
                                       class="text-blue-600 hover:text-blue-800 flex items-center gap-1">
                                        📥 Download
                                    </a>
                                </div>
                                <div class="text-xs text-gray-400 mt-1">{{ $fileName }}</div>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            @if($item->file_tanggapan)
                                @php
                                    $filePathTanggapan = Storage::url($item->file_tanggapan);
                                    $fileNameTanggapan = basename($item->file_tanggapan);
                                    $fileExtTanggapan = strtolower(pathinfo($item->file_tanggapan, PATHINFO_EXTENSION));
                                @endphp
                                <div class="flex gap-2">
                                    <button onclick="previewFile('{{ $filePathTanggapan }}', '{{ $fileExtTanggapan }}', '{{ $fileNameTanggapan }}')" 
                                            class="text-green-600 hover:text-green-800 flex items-center gap-1">
                                        👁️ Lihat
                                    </button>
                                    <a href="{{ route('permohonan.download-file-tanggapan', $item->id) }}" 
                                       class="text-blue-600 hover:text-blue-800 flex items-center gap-1">
                                        📥 Download
                                    </a>
                                </div>
                                <div class="text-xs text-gray-400 mt-1">{{ $fileNameTanggapan }}</div>
                            @else
                                <span class="text-gray-400">Belum ada</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="{{ route('permohonan.show', $item->id) }}" 
                               class="text-blue-600 hover:text-blue-800 font-medium">
                                Detail
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                            <div class="text-5xl mb-4">📭</div>
                            <p class="text-lg font-medium">Belum ada permohonan</p>
                            <p class="text-sm mt-2">Klik tombol "Buat Permohonan Baru" untuk mengajukan permohonan informasi</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($permohonan->hasPages())
        <div class="mt-6">
            {{ $permohonan->links() }}
        </div>
        @endif
    </div>

    <!-- Modal Preview File -->
    <div id="filePreviewModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold">Preview File</h3>
                <button onclick="closePreview()" class="text-gray-500 hover:text-gray-700 text-2xl">
                    ×
                </button>
            </div>
            <div id="previewContent" class="p-4 overflow-auto max-h-[calc(90vh-80px)]">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        function previewFile(url, extension, filename) {
            const modal = document.getElementById('filePreviewModal');
            const content = document.getElementById('previewContent');
            
            modal.classList.remove('hidden');
            
            // Clear previous content
            content.innerHTML = '<div class="text-center py-8"><div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600 mx-auto"></div><p class="mt-4 text-gray-600">Memuat file...</p></div>';
            
            console.log('Preview:', {url, extension, filename}); // Debug
            
            // Handle different file types
            const ext = extension.toLowerCase();
            
            if (['jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg'].includes(ext)) {
                // Image preview
                content.innerHTML = `
                    <div class="text-center">
                        <p class="text-sm text-gray-600 mb-2">${filename}</p>
                        <img src="${url}" class="max-w-full h-auto mx-auto rounded" alt="Preview" onload="this.style.display='block'" onerror="this.parentElement.innerHTML='<div class=text-red-600>Gagal memuat gambar</div>'">
                    </div>
                `;
            } else if (ext === 'pdf') {
                // PDF preview
                content.innerHTML = `
                    <div>
                        <p class="text-sm text-gray-600 mb-2">${filename}</p>
                        <iframe src="${url}#toolbar=0" class="w-full h-[70vh] border rounded" onload="console.log('PDF loaded')" onerror="this.parentElement.innerHTML='<div class=text-red-600>Gagal memuat PDF</div>'"></iframe>
                    </div>
                `;
            } else if (['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'].includes(ext)) {
                // Office documents - use Google Docs Viewer
                const fullUrl = window.location.origin + url;
                content.innerHTML = `
                    <div>
                        <p class="text-sm text-gray-600 mb-2">${filename}</p>
                        <iframe src="https://docs.google.com/viewer?url=${encodeURIComponent(fullUrl)}&embedded=true" class="w-full h-[70vh] border rounded"></iframe>
                        <p class="text-xs text-gray-500 mt-2">Jika preview tidak muncul, silakan download file</p>
                    </div>
                `;
            } else if (['txt', 'csv', 'json', 'xml'].includes(ext)) {
                // Text files
                fetch(url)
                    .then(response => response.text())
                    .then(text => {
                        content.innerHTML = `
                            <div>
                                <p class="text-sm text-gray-600 mb-2">${filename}</p>
                                <pre class="bg-gray-50 p-4 rounded overflow-auto max-h-[70vh] text-sm">${text}</pre>
                            </div>
                        `;
                    })
                    .catch(err => {
                        content.innerHTML = '<div class="text-red-600">Gagal memuat file teks</div>';
                    });
            } else {
                // Other files - show download option
                content.innerHTML = `
                    <div class="text-center py-8">
                        <div class="text-5xl mb-4">📄</div>
                        <p class="font-medium text-gray-900 mb-2">${filename}</p>
                        <p class="text-gray-600 mb-4">Preview tidak tersedia untuk tipe file .${ext}</p>
                        <a href="${url}" download="${filename}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg inline-block">
                            📥 Download File
                        </a>
                    </div>
                `;
            }
        }
        
        function closePreview() {
            document.getElementById('filePreviewModal').classList.add('hidden');
        }
        
        // Close modal when clicking outside
        document.getElementById('filePreviewModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closePreview();
            }
        });
        
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closePreview();
            }
        });
    </script>
</x-app-layout>