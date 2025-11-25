<x-app-layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">📄 Detail Permohonan Informasi</h1>
                <p class="text-gray-600 mt-1">ID: #{{ $permohonan->id }} | Diajukan: {{ $permohonan->created_at->format('d F Y, H:i') }}</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('admin.permohonan.index') }}" 
                   class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">
                    ← Kembali
                </a>
                <form action="{{ route('admin.permohonan.destroy', $permohonan->id) }}" 
                      method="POST" 
                      class="inline"
                      onsubmit="return confirm('❌ Yakin ingin menghapus permohonan ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                        🗑️ Hapus
                    </button>
                </form>
            </div>
        </div>

        <!-- Alert Success -->
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center">
            <span class="text-2xl mr-3">✅</span>
            <span>{{ session('success') }}</span>
        </div>
        @endif

        <!-- Alert Error -->
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="grid lg:grid-cols-3 gap-6">
            <!-- Konten Utama -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Informasi Permohonan -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-2xl mr-2">📋</span>
                        Informasi Permohonan
                    </h2>
                    
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <label class="text-sm font-medium text-gray-500 block mb-1">Subjek</label>
                            <p class="text-gray-900 font-semibold text-lg">{{ $permohonan->subjek }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <label class="text-sm font-medium text-gray-500 block mb-1">Isi Permohonan</label>
                            <p class="text-gray-900 leading-relaxed whitespace-pre-wrap">{{ $permohonan->isi_permohonan }}</p>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <label class="text-sm font-medium text-gray-500 block mb-2">File Pendukung</label>
                            @if($permohonan->file_pendukung)
                                <a href="{{ Storage::url($permohonan->file_pendukung) }}" 
                                   target="_blank"
                                   class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                                    <span>📎</span>
                                    <span>Download File</span>
                                    <span class="text-xs bg-blue-500 px-2 py-1 rounded">{{ strtoupper(pathinfo($permohonan->file_pendukung, PATHINFO_EXTENSION)) }}</span>
                                </a>
                                <p class="text-xs text-gray-500 mt-2">{{ basename($permohonan->file_pendukung) }}</p>
                            @else
                                <p class="text-gray-400 italic">Tidak ada file pendukung</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Timeline Status -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-xl mr-2">📅</span>
                        Timeline
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <span>📝</span>
                            </div>
                            <div class="ml-4">
                                <p class="font-medium text-gray-900">Permohonan Diajukan</p>
                                <p class="text-sm text-gray-500">{{ $permohonan->created_at->format('d F Y, H:i') }}</p>
                            </div>
                        </div>

                        @if($permohonan->tanggal_diproses)
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <span>✅</span>
                            </div>
                            <div class="ml-4">
                                <p class="font-medium text-gray-900">Status: {{ $permohonan->status_text }}</p>
                                <p class="text-sm text-gray-500">{{ $permohonan->tanggal_diproses->format('d F Y, H:i') }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Catatan & File Balasan (jika ada) -->
                @if($permohonan->catatan_admin || $permohonan->file_balasan)
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-6 border-l-4 border-blue-400">
                    <h3 class="font-bold text-blue-900 mb-4 flex items-center text-lg">
                        <span class="text-2xl mr-2">💬</span>
                        Respon Admin
                    </h3>
                    
                    @if($permohonan->catatan_admin)
                    <div class="mb-4">
                        <label class="text-sm font-medium text-blue-800 block mb-2">Catatan:</label>
                        <p class="text-blue-900 bg-white p-4 rounded-lg">{{ $permohonan->catatan_admin }}</p>
                    </div>
                    @endif

                    @if($permohonan->file_balasan)
                    <div>
                        <label class="text-sm font-medium text-blue-800 block mb-2">File Balasan:</label>
                        <a href="{{ Storage::url($permohonan->file_balasan) }}" 
                           target="_blank"
                           class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                            <span>📥</span>
                            <span>Download File Balasan</span>
                        </a>
                        <p class="text-xs text-blue-700 mt-2">{{ basename($permohonan->file_balasan) }}</p>
                    </div>
                    @endif
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Info Pemohon -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-xl mr-2">👤</span>
                        Data Pemohon
                    </h3>
                    
                    <div class="space-y-3">
                        <div>
                            <label class="text-xs font-medium text-gray-500 block">Nama Lengkap</label>
                            <p class="text-gray-900 font-medium">{{ $permohonan->nama_lengkap }}</p>
                        </div>

                        <div>
                            <label class="text-xs font-medium text-gray-500 block">Email</label>
                            <p class="text-gray-900">{{ $permohonan->email }}</p>
                        </div>

                        <div>
                            <label class="text-xs font-medium text-gray-500 block">No. Telepon</label>
                            <p class="text-gray-900">{{ $permohonan->no_telp }}</p>
                        </div>

                        <div class="pt-3 border-t">
                            <label class="text-xs font-medium text-gray-500 block mb-2">Status Saat Ini</label>
                            <span class="px-4 py-2 inline-flex text-sm font-semibold rounded-full {{ $permohonan->status_badge }}">
                                {{ $permohonan->status_text }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Form Update Status -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-xl mr-2">⚙️</span>
                        Proses Permohonan
                    </h3>
                    
                    <form action="{{ route('admin.permohonan.update-status', $permohonan->id) }}" 
                          method="POST" 
                          enctype="multipart/form-data"
                          onsubmit="return confirm('✅ Yakin ingin memproses permohonan ini? User akan mendapat notifikasi.')">
                        @csrf
                        @method('PUT')

                        <!-- Status -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select name="status" 
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                                    required>
                                <option value="diproses" {{ $permohonan->status == 'diproses' ? 'selected' : '' }}>
                                    🔄 Sedang Diproses
                                </option>
                                <option value="selesai" {{ $permohonan->status == 'selesai' ? 'selected' : '' }}>
                                    ✅ Selesai (ACC)
                                </option>
                                <option value="ditolak" {{ $permohonan->status == 'ditolak' ? 'selected' : '' }}>
                                    ❌ Ditolak
                                </option>
                            </select>
                            <p class="text-xs text-gray-500 mt-1">⚠️ User akan mendapat notifikasi otomatis</p>
                        </div>

                        <!-- Catatan -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Catatan untuk Pemohon
                            </label>
                            <textarea name="catatan_admin" 
                                      rows="4"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                                      placeholder="Tambahkan catatan atau penjelasan untuk pemohon...">{{ old('catatan_admin', $permohonan->catatan_admin) }}</textarea>
                        </div>

                        <!-- Upload File Balasan -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Upload File Balasan
                            </label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <input type="file" 
                                       name="file_balasan"
                                       id="file_balasan_admin"
                                       accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                                       class="hidden"
                                       onchange="displayFileNameAdmin(this)">
                                <label for="file_balasan_admin" class="cursor-pointer">
                                    <div class="text-3xl mb-2">📎</div>
                                    <p class="text-sm text-gray-600">Klik untuk upload file</p>
                                    <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX, JPG, PNG (Max: 5MB)</p>
                                </label>
                                <p id="file-name-admin" class="text-sm text-blue-600 mt-2"></p>
                            </div>
                            @if($permohonan->file_balasan)
                            <p class="text-xs text-gray-500 mt-2">
                                File saat ini: {{ basename($permohonan->file_balasan) }}
                            </p>
                            @endif
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-400 p-3 mb-4">
                            <p class="text-xs text-blue-800">
                                💡 <strong>Info:</strong> Setelah Anda klik "Simpan Perubahan", sistem akan otomatis mengirimkan notifikasi ke email user dan notifikasi di sistem.
                            </p>
                        </div>

                        <button type="submit" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-4 rounded-lg font-semibold transition transform hover:scale-105">
                            💾 Simpan & Kirim Notifikasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function displayFileNameAdmin(input) {
            const fileName = input.files[0]?.name;
            const fileNameElement = document.getElementById('file-name-admin');
            if (fileName) {
                fileNameElement.textContent = '📄 ' + fileName;
            } else {
                fileNameElement.textContent = '';
            }
        }
    </script>
</x-app-layout>