<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Tanggapi Permohonan</h1>
                <p class="text-gray-600 mt-1">Berikan tanggapan untuk permohonan informasi</p>
            </div>
            <a href="{{ route('admin.permohonan.index') }}" 
               class="text-blue-600 hover:text-blue-800 font-medium">
                ← Kembali
            </a>
        </div>

        <!-- Data Permohonan (Read Only) -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Data Permohonan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="text-sm text-gray-600">Pemohon</label>
                    <p class="text-gray-900 font-medium">{{ $permohonan->nama_lengkap }}</p>
                    <p class="text-sm text-gray-600">{{ $permohonan->email }}</p>
                </div>
                <div>
                    <label class="text-sm text-gray-600">Tanggal Pengajuan</label>
                    <p class="text-gray-900 font-medium">{{ $permohonan->created_at->format('d M Y H:i') }}</p>
                </div>
            </div>

            <div class="mb-4">
                <label class="text-sm text-gray-600">Subjek</label>
                <p class="text-gray-900 font-medium">{{ $permohonan->subjek }}</p>
            </div>

            <div>
                <label class="text-sm text-gray-600">Isi Permohonan</label>
                <p class="text-gray-900 whitespace-pre-line">{{ $permohonan->isi_permohonan }}</p>
            </div>

            @if($permohonan->file_pendukung)
            <div class="mt-4 pt-4 border-t">
                <label class="text-sm text-gray-600 mb-2 block">File Lampiran</label>
                @php
                    $fileName = basename($permohonan->file_pendukung);
                    $fileExt = strtolower(pathinfo($permohonan->file_pendukung, PATHINFO_EXTENSION));
                @endphp
                <div class="flex items-center gap-3 bg-white p-3 rounded-lg border">
                    <div class="text-2xl">📄</div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">{{ $fileName }}</p>
                    </div>
                    <a href="{{ route('permohonan.download-file-pendukung', $permohonan->id) }}" 
                       class="px-3 py-1 text-sm bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                        📥 Download
                    </a>
                </div>
            </div>
            @endif
        </div>

        <!-- Form Tanggapan -->
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.permohonan.update', $permohonan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h2 class="text-lg font-semibold text-gray-900 mb-4 border-b pb-2">Form Tanggapan</h2>

                <!-- Status -->
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                        Status <span class="text-red-500">*</span>
                    </label>
                    <select name="status" 
                            id="status"
                            class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('status') border-red-500 @enderror"
                            required>
                        <option value="pending" {{ old('status', $permohonan->status) == 'pending' ? 'selected' : '' }}>Menunggu</option>
                        <option value="proses" {{ old('status', $permohonan->status) == 'proses' ? 'selected' : '' }}>Diproses</option>
                        <option value="selesai" {{ old('status', $permohonan->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                        <option value="ditolak" {{ old('status', $permohonan->status) == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                    @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tanggapan -->
                <div class="mb-4">
                    <label for="tanggapan" class="block text-sm font-medium text-gray-700 mb-2">
                        Isi Tanggapan
                    </label>
                    <textarea name="tanggapan" 
                              id="tanggapan"
                              rows="6"
                              class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('tanggapan') border-red-500 @enderror"
                              placeholder="Tulis tanggapan untuk permohonan ini...">{{ old('tanggapan', $permohonan->tanggapan) }}</textarea>
                    @error('tanggapan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- File Tanggapan -->
                <div class="mb-4">
                    <label for="file_tanggapan" class="block text-sm font-medium text-gray-700 mb-2">
                        File Tanggapan (Opsional)
                    </label>
                    
                    @if($permohonan->file_tanggapan)
                    <div class="mb-3 flex items-center gap-3 bg-gray-50 p-3 rounded-lg border">
                        <div class="text-2xl">📄</div>
                        <div class="flex-1">
                            <p class="text-sm font-medium">File saat ini: {{ basename($permohonan->file_tanggapan) }}</p>
                            <p class="text-xs text-gray-500">Upload file baru untuk mengganti</p>
                        </div>
                        <a href="{{ route('permohonan.download-file-tanggapan', $permohonan->id) }}" 
                           class="px-3 py-1 text-sm bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                            📥 Download
                        </a>
                    </div>
                    @endif

                    <input type="file" 
                           name="file_tanggapan" 
                           id="file_tanggapan"
                           class="w-full border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 @error('file_tanggapan') border-red-500 @enderror"
                           accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                    <p class="text-xs text-gray-500 mt-1">
                        Format: PDF, DOC, DOCX, JPG, JPEG, PNG (Max: 10MB)
                    </p>
                    @error('file_tanggapan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-3 pt-4 border-t">
                    <a href="{{ route('admin.permohonan.index') }}" 
                       class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition">
                        💾 Simpan Tanggapan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>