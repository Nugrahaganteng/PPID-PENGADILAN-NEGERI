<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center gap-4 mb-4">
                    <div class="bg-orange-600 p-3 rounded-xl shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Tanggapi Permohonan</h1>
                        <p class="text-gray-600 mt-1">Berikan tanggapan dan kirim notifikasi ke pemohon</p>
                    </div>
                </div>
                <a href="{{ route('admin.permohonan.index') }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Daftar Permohonan
                </a>
            </div>

            <!-- Info Pemohon -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6 border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Informasi Pemohon
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-1">Nama</label>
                        <p class="text-gray-900 font-medium">{{ $permohonan->user->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-1">Email</label>
                        <p class="text-gray-900 font-medium">{{ $permohonan->user->email }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-1">No. Telepon</label>
                        <p class="text-gray-900 font-medium">{{ $permohonan->user->no_telp ?? '-' }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-1">Tanggal Pengajuan</label>
                        <p class="text-gray-900 font-medium">{{ $permohonan->created_at->format('d M Y H:i') }}</p>
                    </div>
                </div>
            </div>

            <!-- Detail Permohonan -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6 border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Detail Permohonan
                </h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-1">Subjek</label>
                        <p class="text-gray-900 font-medium">{{ $permohonan->subjek }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-1">Isi Permohonan</label>
                        <p class="text-gray-900 bg-gray-50 p-4 rounded-lg">{{ $permohonan->isi_permohonan }}</p>
                    </div>
                    @if($permohonan->file_pendukung)
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">File Pendukung</label>
                        <a href="{{ route('permohonan.download-file-pendukung', $permohonan->id) }}" 
                           class="inline-flex items-center gap-2 bg-blue-100 hover:bg-blue-200 text-blue-700 px-4 py-2 rounded-lg font-semibold transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            Download File
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Form Tanggapan -->
            <form action="{{ route('admin.permohonan.update', $permohonan->id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow-lg p-6 border border-gray-100">
                @csrf
                @method('PUT')

                <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Form Tanggapan
                </h2>

                <div class="space-y-6">
                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                            Status Permohonan <span class="text-red-500">*</span>
                        </label>
                        <select name="status" id="status" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 shadow-sm">
                            <option value="">Pilih Status</option>
                            <option value="proses" {{ old('status', $permohonan->status) == 'proses' ? 'selected' : '' }}>🔄 Diproses</option>
                            <option value="selesai" {{ old('status', $permohonan->status) == 'selesai' ? 'selected' : '' }}>✅ Selesai</option>
                            <option value="ditolak" {{ old('status', $permohonan->status) == 'ditolak' ? 'selected' : '' }}>❌ Ditolak</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggapan -->
                    <div>
                        <label for="tanggapan" class="block text-sm font-semibold text-gray-700 mb-2">
                            Tanggapan <span class="text-red-500">*</span>
                        </label>
                        <textarea name="tanggapan" id="tanggapan" rows="6" required 
                                  class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 shadow-sm"
                                  placeholder="Masukkan tanggapan Anda untuk permohonan ini...">{{ old('tanggapan', $permohonan->tanggapan) }}</textarea>
                        @error('tanggapan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- File Tanggapan -->
                    <div>
                        <label for="file_tanggapan" class="block text-sm font-semibold text-gray-700 mb-2">
                            File Tanggapan (Opsional)
                        </label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-orange-500 transition-colors">
                            <input type="file" name="file_tanggapan" id="file_tanggapan" 
                                   class="hidden" 
                                   accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png"
                                   onchange="displayFileName(this)">
                            <label for="file_tanggapan" class="cursor-pointer">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                                <p class="text-sm text-gray-600 mb-1">
                                    <span class="font-semibold text-orange-600">Klik untuk upload</span> atau drag & drop
                                </p>
                                <p class="text-xs text-gray-500">PDF, DOC, DOCX, XLS, XLSX, JPG, PNG (Max 10MB)</p>
                            </label>
                            <div id="fileNameDisplay" class="mt-3 text-sm text-gray-700"></div>
                        </div>
                        @if($permohonan->file_tanggapan)
                        <div class="mt-3 bg-blue-50 border border-blue-200 rounded-lg p-3">
                            <p class="text-sm text-blue-800">
                                <strong>File saat ini:</strong> {{ basename($permohonan->file_tanggapan) }}
                            </p>
                        </div>
                        @endif
                        @error('file_tanggapan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    

                    <!-- Notification Type -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-200">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <svg class="w-5 h-5 inline mr-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                            Kirim Notifikasi Ke <span class="text-red-500">*</span>
                        </label>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 bg-white p-4 rounded-lg border-2 border-gray-200 hover:border-blue-500 cursor-pointer transition-all">
                                <input type="radio" name="notification_type" value="email" required class="w-5 h-5 text-blue-600">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Email Saja</span>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1 ml-7">Kirim notifikasi via email ke {{ $permohonan->user->email }}</p>
                                </div>
                            </label>

                            <label class="flex items-center gap-3 bg-white p-4 rounded-lg border-2 border-gray-200 hover:border-green-500 cursor-pointer transition-all">
                                <input type="radio" name="notification_type" value="whatsapp" required class="w-5 h-5 text-green-600">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">WhatsApp Saja</span>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1 ml-7">Kirim notifikasi via WhatsApp ke {{ $permohonan->user->no_telp ?? 'Nomor tidak tersedia' }}</p>
                                </div>
                            </label>

                            <label class="flex items-center gap-3 bg-white p-4 rounded-lg border-2 border-gray-200 hover:border-purple-500 cursor-pointer transition-all">
                                <input type="radio" name="notification_type" value="both" checked required class="w-5 h-5 text-purple-600">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                        <span class="font-semibold text-gray-900">Email & WhatsApp</span>
                                        <span class="text-xs bg-purple-100 text-purple-700 px-2 py-0.5 rounded-full font-bold">Rekomendasi</span>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1 ml-7">Kirim notifikasi ke email dan WhatsApp untuk memastikan pemohon menerima informasi</p>
                                </div>
                            </label>
                        </div>
                        @error('notification_type')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4 pt-4 border-t">
                        <button type="submit" 
                                class="flex-1 bg-gradient-to-r from-orange-600 to-orange-700 hover:from-orange-700 hover:to-orange-800 text-white px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Kirim Tanggapan & Notifikasi
                        </button>
                        <a href="{{ route('admin.permohonan.index') }}" 
                           class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-8 py-4 rounded-xl font-bold shadow hover:shadow-lg transform hover:scale-105 transition-all duration-200 flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function displayFileName(input) {
            const display = document.getElementById('fileNameDisplay');
            if (input.files && input.files[0]) {
                const fileName = input.files[0].name;
                const fileSize = (input.files[0].size / 1024 / 1024).toFixed(2);
                display.innerHTML = `
                    <div class="flex items-center justify-center gap-2 bg-orange-100 text-orange-800 px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span class="font-semibold">${fileName}</span>
                        <span class="text-xs">(${fileSize} MB)</span>
                    </div>
                `;
            }
        }
    </script>
</x-app-layout>