<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Buat Permohonan Informasi</h1>
            <p class="text-gray-600 mt-1">Isi formulir di bawah ini untuk mengajukan permohonan informasi</p>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <form action="{{ route('permohonan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" 
                           value="{{ old('nama_lengkap', Auth::user()->name) }}" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                           required>
                    @error('nama_lengkap')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" name="email" id="email" 
                           value="{{ old('email', Auth::user()->email) }}" 
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                           required>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- No Telp -->
                <div class="mb-4">
                    <label for="no_telp" class="block text-sm font-medium text-gray-700">
                        No. Telepon <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="no_telp" id="no_telp" 
                           value="{{ old('no_telp') }}" 
                           placeholder="contoh: 08123456789"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                           required>
                    @error('no_telp')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                        Alamat <span class="text-red-500">*</span>
                    </label>
                    <textarea name="alamat" id="alamat" rows="3" 
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                              required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Subjek -->
                <div class="mb-4">
                    <label for="subjek" class="block text-sm font-medium text-gray-700">
                        Subjek Permohonan <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="subjek" id="subjek" 
                           value="{{ old('subjek') }}" 
                           placeholder="contoh: Permohonan Data Kependudukan"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                           required>
                    @error('subjek')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Isi Permohonan -->
                <div class="mb-4">
                    <label for="isi_permohonan" class="block text-sm font-medium text-gray-700">
                        Isi Permohonan <span class="text-red-500">*</span>
                    </label>
                    <textarea name="isi_permohonan" id="isi_permohonan" rows="5" 
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                              placeholder="Jelaskan secara detail informasi yang Anda butuhkan..."
                              required>{{ old('isi_permohonan') }}</textarea>
                    @error('isi_permohonan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- File Pendukung -->
                <div class="mb-6">
                    <label for="file_pendukung" class="block text-sm font-medium text-gray-700">
                        File Pendukung (Opsional)
                    </label>
                    <input type="file" name="file_pendukung" id="file_pendukung" 
                           class="mt-1 block w-full text-sm text-gray-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-md file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100">
                    <p class="mt-1 text-sm text-gray-500">Format: PDF, DOC, DOCX, JPG, PNG. Maksimal: 10MB</p>
                    @error('file_pendukung')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-end space-x-3">
                    <a href="{{ route('permohonan.index') }}" 
                       class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Kirim Permohonan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>