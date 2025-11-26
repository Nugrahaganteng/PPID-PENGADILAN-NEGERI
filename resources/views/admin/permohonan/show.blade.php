@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="{{ route('admin.permohonan.index') }}" class="text-blue-600 hover:text-blue-800">
            ← Kembali ke Daftar
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-gray-50 px-6 py-4 border-b">
            <h1 class="text-2xl font-bold text-gray-800">Detail Permohonan #{{ $permohonan->id }}</h1>
        </div>

        <!-- Content -->
        <div class="p-6">
            <!-- Info Pemohon -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-3">Informasi Pemohon</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm text-gray-600">Nama</label>
                        <p class="font-medium">{{ $permohonan->user->name }}</p>
                    </div>
                    <div>
                        <label class="text-sm text-gray-600">Email</label>
                        <p class="font-medium">{{ $permohonan->user->email }}</p>
                    </div>
                    <div>
                        <label class="text-sm text-gray-600">Tanggal Pengajuan</label>
                        <p class="font-medium">{{ $permohonan->created_at->format('d M Y H:i') }}</p>
                    </div>
                    <div>
                        <label class="text-sm text-gray-600">Status</label>
                        <p>
                            <span class="px-3 py-1 text-sm rounded-full {{ $permohonan->status_badge }}">
                                {{ $permohonan->status_text }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <!-- Isi Permohonan -->
            <div class="mb-6">
                <h2 class="text-lg font-semibold mb-3">Isi Permohonan</h2>
                <div class="mb-4">
                    <label class="text-sm text-gray-600">Subjek</label>
                    <p class="font-medium">{{ $permohonan->subjek }}</p>
                </div>
                <div>
                    <label class="text-sm text-gray-600">Detail Permohonan</label>
                    <p class="mt-1 text-gray-700 whitespace-pre-line">{{ $permohonan->isi_permohonan }}</p>
                </div>
            </div>

            @if($permohonan->file_pendukung)
            <div class="mb-6">
                <label class="text-sm text-gray-600">File Pendukung</label>
                <div class="mt-2">
                    <a href="{{ route('permohonan.view-file-pendukung', $permohonan->id) }}" 
                       target="_blank"
                       class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        📄 Lihat File
                    </a>
                    <a href="{{ route('permohonan.download-file-pendukung', $permohonan->id) }}" 
                       class="inline-flex items-center px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 ml-2">
                        ⬇️ Download File
                    </a>
                </div>
            </div>
            @endif

            <hr class="my-6">

            <!-- Form Update Status & Tanggapan -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-lg font-semibold mb-4">Update Status & Tanggapan</h2>
                
                <form action="{{ route('admin.permohonan.update-status', $permohonan->id) }}" 
                      method="POST" 
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Status -->
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select name="status" id="status" 
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                required>
                            <option value="pending" {{ $permohonan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="proses" {{ $permohonan->status == 'proses' ? 'selected' : '' }}>Diproses</option>
                            <option value="selesai" {{ $permohonan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="ditolak" {{ $permohonan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggapan -->
                    <div class="mb-4">
                        <label for="tanggapan" class="block text-sm font-medium text-gray-700 mb-2">Tanggapan</label>
                        <textarea name="tanggapan" id="tanggapan" rows="5" 
                                  class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                  placeholder="Masukkan tanggapan untuk pemohon...">{{ old('tanggapan', $permohonan->tanggapan) }}</textarea>
                        @error('tanggapan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- File Tanggapan -->
                    <div class="mb-4">
                        <label for="file_tanggapan" class="block text-sm font-medium text-gray-700 mb-2">File Tanggapan (Opsional)</label>
                        
                        @if($permohonan->file_tanggapan)
                        <div class="mb-2 text-sm text-gray-600">
                            File saat ini: 
                            <a href="{{ route('permohonan.view-file-tanggapan', $permohonan->id) }}" 
                               target="_blank" 
                               class="text-blue-600 hover:underline">
                                Lihat file
                            </a>
                        </div>
                        @endif
                        
                        <input type="file" name="file_tanggapan" id="file_tanggapan" 
                               class="w-full">
                        <p class="mt-1 text-sm text-gray-500">Format: PDF, DOC, DOCX, JPG, PNG. Max: 10MB</p>
                        @error('file_tanggapan')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" 
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('admin.permohonan.index') }}" 
                           class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 font-medium">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection