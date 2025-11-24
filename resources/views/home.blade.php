{{-- resources/views/home.blade.php --}}
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
                    <img src="{{ asset('images/hero-illustration.png') }}" alt="PPID Illustration" class="w-full h-auto">
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
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Alur Permohonan Transparansi Publik</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Laporan Penyelenggaraan Pemerintah Daerah</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Opini Atas LKPD</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">LRA PPKD</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">LKPD Sudah Teraudit</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">LAK LKPD Sudah Teraudit</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Ringkasan RKA SKPD</a></li>
                        <li><a href="#" class="text-sm text-gray-700 hover:text-blue-600 hover:underline">Ringkasan RKA PPKD</a></li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                        <span class="text-blue-600 mr-2">🐦</span>
                        Berita Di Kota Bogor
                    </h3>
                    <div class="space-y-3">
                        <div class="text-sm text-gray-600 border-b pb-2">
                            <p class="font-medium">Update Terbaru</p>
                            <p class="text-xs text-gray-500 mt-1">24 November 2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow-md p-8">
                    <img src="{{ asset('images/ppid-banner.png') }}" alt="PPID Banner" class="w-full rounded-lg mb-6">
                    
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
                            Pejabat Pengelola Informasi dan Dokumentasi (PPID)tersebut berada di bawah dan bertanggung jawab 
                            kepada masing-masing Kepala SKPD.
                        </p>

                        <h3 class="text-xl font-bold text-gray-900 mt-6 mb-4">
                            Pejabat Pengelola Informasi dan Dokumentas (PPID) mempunyai tugas dan tanggung jawab:
                        </h3>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Menyediakan, menyimpan, mendokumentasikan, dan mengamankan informasi</p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Memberikan pelayanan informasi sesuai dengan ketentuan peraturan perundang-undangan</p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Memberikan pelayanan informasi publik yang cepat, tepat, dan sederhana</p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Menetapkan prosedur operasional penyebarluasan Informasi Publik</p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Melaksanakan pengujian konsekuensi</p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Mengklasifikasikan informasi dan/atau pengubahanya</p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mb-4">
                            <p class="text-gray-700">Menetapkan informasi yang dikecualikan yang telah habis jangka wakdiv class="bg-blue-50 border-l-4 border-blue-600 p-4">
                        <p class="text-gray-700">Memberikan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang 
                        atas Informasi publik.</p>
                    </div>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="mt-8 grid grid-cols-2 gap-4">
                <a href="{{ route('permohonan.informasi') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition">
                    <div class="text-center">
                        <div class="text-3xl mb-2">📄</div>
                        <h4 class="font-semibold text-gray-900">Permohonan Informasi</h4>
                    </div>
                </a>
                <a href="{{ route('permohonan.keberatan') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition">
                    <div class="text-center">
                        <div class="text-3xl mb-2">📋</div>
                        <h4 class="font-semibold text-gray-900">Permohonan Keberatan Informasi</h4>
                    </div>
                </a>
                <a href="{{ route('berita') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition">
                    <div class="text-center">
                        <div class="text-3xl mb-2">📰</div>
                        <h4 class="font-semibold text-gray-900">Berita</h4>
                    </div>
                </a>
                <a href="{{ route('kontak') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition">
                    <div class="text-center">
                        <div class="text-3xl mb-2">📞</div>
                        <h4 class="font-semibold text-gray-900">Kontak</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="mt-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Banner</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg p-4 text-white text-center">
                <div class="text-2xl mb-2">📊</div>
                <p class="text-sm font-semibold">PERDA PERUBAHAN APBD TAHUN 2025</p>
            </div>
            <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-lg p-4 text-white text-center">
                <div class="text-2xl mb-2">📈</div>
                <p class="text-sm font-semibold">PERWALI PERUBAHAN APBD TAHUN 2025</p>
            </div>
            <div class="bg-gradient-to-br from-red-500 to-red-700 rounded-lg p-4 text-white text-center">
                <div class="text-2xl mb-2">📑</div>
                <p class="text-sm font-semibold">KEPWAL ASB TA 2025</p>
            </div>
            <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-lg p-4 text-white text-center">
                <div class="text-2xl mb-2">💰</div>
                <p class="text-sm font-semibold">PERDA APBD TAHUN 2025</p>
            </div>
            <div class="bg-gradient-to-br from-green-500 to-green-700 rounded-lg p-4 text-white text-center">
                <div class="text-2xl mb-2">📋</div>
                <p class="text-sm font-semibold">PERWALI APBD TAHUN 2025</p>
            </div>
            <div class="bg-gradient-to-br from-blue-600 to-cyan-600 rounded-lg p-4 text-white text-center">
                <div class="text-2xl mb-2">🌐</div>
                <p class="text-sm font-semibold">KOTA BOGOR OPEN DATA</p>
            </div>
        </div>
    </div>
</div>
</x-app-layout>