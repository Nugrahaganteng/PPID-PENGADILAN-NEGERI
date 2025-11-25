<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Formulir Permohonan Informasi</h1>
            <p class="text-gray-600 mt-1">Silakan lengkapi formulir di bawah ini untuk mengajukan permohonan informasi</p>
        </div>

        <!-- Form -->
        <form action="{{ route('permohonan.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-lg shadow-md p-8">
            @csrf

            <!-- Nama Lengkap -->
            <div class="mb-6">
                <label for="nama_lengkap" class="block text-sm font-medium text-gray-700 mb-2">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="nama_lengkap" 
                       id="nama_lengkap" 
                       value="{{ old('nama_lengkap', auth()->user()->name) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
                @error('nama_lengkap')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" 
                       name="email" 
                       id="email" 
                       value="{{ old('email', auth()->user()->email) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- No Telepon -->
            <div class="mb-6">
                <label for="no_telp" class="block text-sm font-medium text-gray-700 mb-2">
                    No. Telepon <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="no_telp" 
                       id="no_telp" 
                       value="{{ old('no_telp') }}"
                       placeholder="08xxxxxxxxxx"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
                @error('no_telp')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Alamat (FIELD BARU) -->
            <div class="mb-6">
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">
                    Alamat <span class="text-red-500">*</span>
                </label>
                <textarea name="alamat" 
                          id="alamat" 
                          rows="3"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                          placeholder="Masukkan alamat lengkap Anda..."
                          required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Subjek -->
            <div class="mb-6">
                <label for="subjek" class="block text-sm font-medium text-gray-700 mb-2">
                    Subjek Permohonan <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="subjek" 
                       id="subjek" 
                       value="{{ old('subjek') }}"
                       placeholder="Contoh: Permohonan Data Keuangan Tahun 2024"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       required>
                @error('subjek')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Isi Permohonan -->
            <div class="mb-6">
                <label for="isi_permohonan" class="block text-sm font-medium text-gray-700 mb-2">
                    Isi Permohonan <span class="text-red-500">*</span>
                </label>
                <textarea name="isi_permohonan" 
                          id="isi_permohonan" 
                          rows="6"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                          placeholder="Jelaskan detail informasi yang Anda butuhkan..."
                          required>{{ old('isi_permohonan') }}</textarea>
                @error('isi_permohonan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- File Pendukung -->
            <div class="mb-6">
                <label for="file_pendukung" class="block text-sm font-medium text-gray-700 mb-2">
                    File Pendukung (Opsional)
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                    <input type="file" 
                           name="file_pendukung" 
                           id="file_pendukung"
                           accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                           class="hidden"
                           onchange="displayFileName(this)">
                    <label for="file_pendukung" class="cursor-pointer">
                        <div class="text-4xl mb-2">📎</div>
                        <p class="text-sm text-gray-600">Klik untuk upload file</p>
                        <p class="text-xs text-gray-500 mt-1">Format: PDF, DOC, DOCX, JPG, PNG (Max: 5MB)</p>
                    </label>
                    <p id="file-name" class="text-sm text-blue-600 mt-2"></p>
                </div>
                @error('file_pendukung')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit" 
                        class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition">
                    📤 Kirim Permohonan
                </button>
                <a href="{{ route('permohonan.index') }}" 
                   class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 py-3 px-6 rounded-lg font-semibold text-center transition">
                    ❌ Batal
                </a>
            </div>
        </form>
    </div>

    <script>
        function displayFileName(input) {
            const fileName = input.files[0]?.name;
            const fileNameElement = document.getElementById('file-name');
            if (fileName) {
                fileNameElement.textContent = '📄 ' + fileName;
            } else {
                fileNameElement.textContent = '';
            }
        }
    </script>
</x-app-layout>