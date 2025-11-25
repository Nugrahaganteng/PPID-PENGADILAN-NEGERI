<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Selamat Datang Di PPID Kota Bogor</h1>
                    <p class="text-lg text-blue-100 mb-6">
                        Pejabat Pengelola Informasi dan Dokumentasi adalah pejabat yang bertanggungjawab di bidang 
                        penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.
                    </p>
                </div>
                <div class="relative">
                    <div class="bg-blue-600 rounded-lg p-12 text-center">
                        <svg class="w-32 h-32 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Left Sidebar -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-blue-600 mr-2">📊</span>
                        Transparansi
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('tentang.tata-cara') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Alur Permohonan Transparansi Publik</a></li>
                        <li><a href="{{ route('informasi.berkala.kinerja') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Laporan Penyelenggaraan Pemerintah Daerah</a></li>
                        <li><a href="{{ route('informasi.berkala.keuangan') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Opini Atas LKPD</a></li>
                        <li><a href="{{ route('informasi.berkala.keuangan') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">LRA PPKD</a></li>
                        <li><a href="{{ route('informasi.berkala.keuangan') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">LKPD Sudah Teraudit</a></li>
                        <li><a href="{{ route('informasi.berkala.keuangan') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">LAK LKPD Sudah Teraudit</a></li>
                        <li><a href="{{ route('informasi.berkala.keuangan') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Ringkasan RKA SKPD</a></li>
                        <li><a href="{{ route('informasi.berkala.keuangan') }}" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Ringkasan RKA PPKD</a></li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-blue-600 mr-2">📰</span>
                        Berita Di Kota Bogor
                    </h3>
                    <div class="space-y-3">
                        <div class="text-sm text-gray-600 border-b pb-2">
                            <p class="font-medium">Update Terbaru</p>
                            <p class="text-xs text-gray-500 mt-1">{{ date('d F Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-2">
                <!-- ============================================ -->
                <!-- SECTION PERMOHONAN INFORMASI (ENHANCED) -->
                <!-- ============================================ -->
                <div class="bg-gradient-to-r from-green-500 to-green-700 rounded-lg shadow-lg p-6 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-white mb-2 flex items-center">
                                <span class="text-2xl mr-3">📬</span>
                                Permohonan Informasi Publik
                            </h3>
                            <p class="text-green-50 text-sm">
                                Ajukan permohonan informasi publik secara online. Layanan cepat, mudah, dan transparan.
                            </p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    @auth
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <!-- Button Buat Permohonan Baru -->
                        <a href="{{ route('permohonan.create') }}" 
                           class="bg-white text-green-700 hover:bg-green-50 px-6 py-4 rounded-lg font-semibold shadow-md transition transform hover:scale-105 flex items-center justify-center group">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition">➕</span>
                            <div class="text-left">
                                <div class="font-bold">Buat Permohonan Baru</div>
                                <div class="text-xs text-green-600">Ajukan permohonan informasi</div>
                            </div>
                        </a>

                        <!-- Button Lihat Status Permohonan -->
                        <a href="{{ route('permohonan.index') }}" 
                           class="bg-white text-blue-700 hover:bg-blue-50 px-6 py-4 rounded-lg font-semibold shadow-md transition transform hover:scale-105 flex items-center justify-center group">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition">📋</span>
                            <div class="text-left">
                                <div class="font-bold">Lihat Status Permohonan</div>
                                <div class="text-xs text-blue-600">Cek permohonan Anda</div>
                            </div>
                        </a>
                    </div>
                    @else
                    <div class="flex justify-center">
                        <a href="{{ route('login') }}" 
                           class="bg-white text-green-700 hover:bg-green-50 px-8 py-4 rounded-lg font-semibold shadow-md transition transform hover:scale-105 inline-flex items-center">
                            <span class="text-2xl mr-3">🔐</span>
                            <div class="text-left">
                                <div class="font-bold">Login untuk Mengajukan</div>
                                <div class="text-xs text-green-600">Masuk untuk membuat permohonan</div>
                            </div>
                        </a>
                    </div>
                    @endauth

                    <!-- Informasi Tambahan -->
                    <div class="mt-4 pt-4 border-t border-green-400">
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div class="text-white">
                                <div class="text-2xl font-bold">24/7</div>
                                <div class="text-xs text-green-100">Layanan Online</div>
                            </div>
                            <div class="text-white">
                                <div class="text-2xl font-bold">Fast</div>
                                <div class="text-xs text-green-100">Respon Cepat</div>
                            </div>
                            <div class="text-white">
                                <div class="text-2xl font-bold">Free</div>
                                <div class="text-xs text-green-100">Tanpa Biaya</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================ -->
                <!-- END SECTION PERMOHONAN INFORMASI -->
                <!-- ============================================ -->

                <!-- Konten PPID (Existing) -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-700 rounded-lg p-8 mb-6 text-white text-center">
                        <h2 class="text-2xl font-bold">PPID Kota Bogor</h2>
                        <p class="mt-2">Pejabat Pengelola Informasi dan Dokumentasi</p>
                    </div>
                    
                    <div class="prose max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pejabat Pengelola Informasi Dan Dokumentasi adalah pejabat yang bertanggungjawab di bidang 
                            penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pejabat Pengelola Informasi dan Dokumentasi (PPID) di bentuk di semua Satuan Kerja Perangkat Daerah 
                            (SKPD) di lingkungan Pemerintah Kota Bogor.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-4">
                            Pejabat Pengelola Informasi dan Dokumentasi (PPID) tersebut berada di bawah dan bertanggung jawab 
                            kepada masing-masing Kepala SKPD.
                        </p>

                        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-4">
                            Pejabat Pengelola Informasi dan Dokumentasi (PPID) mempunyai tugas dan tanggung jawab:
                        </h3>

                        <div class="space-y-3">
                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Menyediakan, menyimpan, mendokumentasikan, dan mengamankan informasi</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Memberikan pelayanan informasi sesuai dengan ketentuan peraturan perundang-undangan</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Memberikan pelayanan informasi publik yang cepat, tepat, dan sederhana</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Menetapkan prosedur operasional penyebarluasan Informasi Publik</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Melaksanakan pengujian konsekuensi</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Mengklasifikasikan informasi dan/atau pengubahanya</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Menetapkan informasi yang dikecualikan yang telah habis jangka waktu</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg">
                                <p class="text-gray-700">Memberikan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang 
                                atas Informasi publik.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links Section -->
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <a href="{{ route('informasi.publik') }}" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                        <div class="text-center">
                            <div class="text-4xl mb-3">📄</div>
                            <h4 class="font-semibold text-gray-900">Informasi Publik</h4>
                            <p class="text-sm text-gray-600 mt-2">Akses informasi publik yang tersedia</p>
                        </div>
                    </a>
                    <a href="{{ route('pengaduan.index') }}" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                        <div class="text-center">
                            <div class="text-4xl mb-3">📋</div>
                            <h4 class="font-semibold text-gray-900">Pengaduan</h4>
                            <p class="text-sm text-gray-600 mt-2">Sampaikan pengaduan Anda</p>
                        </div>
                    </a>
                    <a href="{{ route('tentang.ppid') }}" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                        <div class="text-center">
                            <div class="text-4xl mb-3">📰</div>
                            <h4 class="font-semibold text-gray-900">Tentang PPID</h4>
                            <p class="text-sm text-gray-600 mt-2">Informasi tentang PPID</p>
                        </div>
                    </a>
                    <a href="{{ route('profil.index') }}" class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                        <div class="text-center">
                            <div class="text-4xl mb-3">👥</div>
                            <h4 class="font-semibold text-gray-900">Profil</h4>
                            <p class="text-sm text-gray-600 mt-2">Profil PPID Kota Bogor</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Banner Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Dokumen Penting</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <a href="#" class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg p-4 text-white text-center hover:shadow-lg transition transform hover:-translate-y-1">
                    <div class="text-3xl mb-2">📊</div>
                    <p class="text-xs font-semibold">PERDA PERUBAHAN APBD TAHUN 2025</p>
                </a>
                <a href="#" class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-lg p-4 text-white text-center hover:shadow-lg transition transform hover:-translate-y-1">
                    <div class="text-3xl mb-2">📈</div>
                    <p class="text-xs font-semibold">PERWALI PERUBAHAN APBD TAHUN 2025</p>
                </a>
                <a href="#" class="bg-gradient-to-br from-red-500 to-red-700 rounded-lg p-4 text-white text-center hover:shadow-lg transition transform hover:-translate-y-1">
                    <div class="text-3xl mb-2">📑</div>
                    <p class="text-xs font-semibold">KEPWAL ASB TA 2025</p>
                </a>
                <a href="#" class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-lg p-4 text-white text-center hover:shadow-lg transition transform hover:-translate-y-1">
                    <div class="text-3xl mb-2">💰</div>
                    <p class="text-xs font-semibold">PERDA APBD TAHUN 2025</p>
                </a>
                <a href="#" class="bg-gradient-to-br from-green-500 to-green-700 rounded-lg p-4 text-white text-center hover:shadow-lg transition transform hover:-translate-y-1">
                    <div class="text-3xl mb-2">📋</div>
                    <p class="text-xs font-semibold">PERWALI APBD TAHUN 2025</p>
                </a>
                <a href="#" class="bg-gradient-to-br from-blue-600 to-cyan-600 rounded-lg p-4 text-white text-center hover:shadow-lg transition transform hover:-translate-y-1">
                    <div class="text-3xl mb-2">🌐</div>
                    <p class="text-xs font-semibold">KOTA BOGOR OPEN DATA</p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>