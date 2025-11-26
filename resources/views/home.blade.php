<x-app-layout>
    <!-- Hero Section with Garuda Pattern -->
    <div class="relative bg-gradient-to-br from-blue-800 via-blue-900 to-blue-950 text-white overflow-hidden">
        <!-- Decorative Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="inline-block">
                        <span class="bg-yellow-400 text-blue-900 text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wide">
                            Pemerintah Kota Bogor
                        </span>
                    </div>
                    <h1 class="text-5xl font-bold leading-tight">
                        Pejabat Pengelola Informasi dan Dokumentasi
                    </h1>
                    <p class="text-xl text-blue-100 leading-relaxed">
                        Mewujudkan keterbukaan informasi publik yang transparan, akuntabel, dan mudah diakses oleh seluruh masyarakat Kota Bogor.
                    </p>
                </div>
                <div class="relative">
                    <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/20 shadow-2xl">
                        <img src="{{ asset('image/pn.png') }}" alt="PPID Kota Bogor" class="w-full h-auto rounded-lg">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave Separator -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                <path d="M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,58.7C960,64,1056,64,1152,58.7C1248,53,1344,43,1392,37.3L1440,32L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z" fill="white"/>
            </svg>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-8">
                
                <!-- Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Transparansi Card -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-4">
                            <h3 class="text-lg font-bold text-white flex items-center">
                                <span class="text-2xl mr-2">📊</span>
                                Transparansi Anggaran
                            </h3>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-2">
                                <li>
                                    <a href="{{ route('tentang.tata-cara') }}" 
                                       class="flex items-center text-sm text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                                        <span class="mr-2">→</span>
                                        Alur Permohonan Informasi
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('informasi.berkala.kinerja') }}" 
                                       class="flex items-center text-sm text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                                        <span class="mr-2">→</span>
                                        Laporan Penyelenggaraan Pemda
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('informasi.berkala.keuangan') }}" 
                                       class="flex items-center text-sm text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                                        <span class="mr-2">→</span>
                                        Opini Atas LKPD
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('informasi.berkala.keuangan') }}" 
                                       class="flex items-center text-sm text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                                        <span class="mr-2">→</span>
                                        LKPD Sudah Teraudit
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('informasi.berkala.keuangan') }}" 
                                       class="flex items-center text-sm text-gray-700 hover:text-blue-600 hover:bg-blue-50 p-2 rounded-lg transition">
                                        <span class="mr-2">→</span>
                                        Ringkasan RKA SKPD
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- News Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-red-600 to-red-700 p-4">
                            <h3 class="text-lg font-bold text-white flex items-center">
                                <span class="text-2xl mr-2">📰</span>
                                Berita Terkini
                            </h3>
                        </div>
                        <div class="p-4">
                            <div class="space-y-3">
                                <div class="border-l-4 border-red-500 pl-3 py-2">
                                    <p class="font-medium text-sm text-gray-900">Update Informasi Publik</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ date('d F Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-xl shadow-lg p-6 text-white">
                        <h3 class="text-lg font-bold mb-4 flex items-center">
                            <span class="text-2xl mr-2">📞</span>
                            Hubungi Kami
                        </h3>
                        <div class="space-y-3 text-sm">
                            <p class="flex items-start">
                                <span class="mr-2">📍</span>
                                <span>Pemerintah Kota Bogor</span>
                            </p>
                            <p class="flex items-start">
                                <span class="mr-2">✉️</span>
                                <span>ppid@kotabogor.go.id</span>
                            </p>
                            <p class="flex items-start">
                                <span class="mr-2">☎️</span>
                                <span>(0251) 8321075</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-6">
                    
                    <!-- Permohonan Informasi Card -->
                    @auth
                    <div class="bg-gradient-to-br from-green-600 via-green-700 to-green-800 rounded-xl shadow-xl overflow-hidden">
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-white/20 backdrop-blur-sm p-4 rounded-full mr-4">
                                    <span class="text-4xl">📬</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-white">Permohonan Informasi Publik</h3>
                                    <p class="text-green-100 text-sm mt-1">Ajukan permohonan informasi dengan mudah dan cepat</p>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <a href="{{ route('permohonan.create') }}" 
                                   class="bg-white hover:bg-gray-50 rounded-lg p-6 shadow-lg transition transform hover:scale-105 group">
                                    <div class="flex items-center">
                                        <div class="bg-green-100 p-3 rounded-lg mr-4 group-hover:bg-green-200 transition">
                                            <span class="text-3xl">➕</span>
                                        </div>
                                        <div>
                                            <div class="font-bold text-green-900 text-lg">Buat Permohonan</div>
                                            <div class="text-xs text-green-700 mt-1">Ajukan informasi baru</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('permohonan.index') }}" 
                                   class="bg-white hover:bg-gray-50 rounded-lg p-6 shadow-lg transition transform hover:scale-105 group">
                                    <div class="flex items-center">
                                        <div class="bg-blue-100 p-3 rounded-lg mr-4 group-hover:bg-blue-200 transition">
                                            <span class="text-3xl">📋</span>
                                        </div>
                                        <div>
                                            <div class="font-bold text-blue-900 text-lg">Status Permohonan</div>
                                            <div class="text-xs text-blue-700 mt-1">Cek permohonan Anda</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 rounded-xl shadow-xl p-8 text-center">
                        <div class="inline-block bg-white/20 backdrop-blur-sm p-6 rounded-full mb-4">
                            <span class="text-5xl">🔐</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Login Untuk Mengajukan Permohonan</h3>
                        <p class="text-blue-100 mb-6">Silakan login terlebih dahulu untuk membuat permohonan informasi publik</p>
                        <a href="{{ route('login') }}" 
                           class="inline-flex items-center bg-yellow-400 text-blue-900 hover:bg-yellow-300 px-8 py-4 rounded-lg font-bold shadow-xl transition transform hover:scale-105">
                            <span class="mr-2">🔑</span>
                            <span>Login Sekarang</span>
                        </a>
                    </div>
                    @endauth

                    <!-- About PPID Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-600 to-blue-800 p-6 text-center">
                            <div class="inline-block bg-white/20 backdrop-blur-sm p-4 rounded-full mb-3">
                                <span class="text-4xl">🏛️</span>
                            </div>
                            <h2 class="text-3xl font-bold text-white">PPID Kota Bogor</h2>
                            <p class="text-blue-100 mt-2">Pejabat Pengelola Informasi dan Dokumentasi</p>
                        </div>

                        <div class="p-8 space-y-6">
                            <div class="prose max-w-none">
                                <p class="text-gray-700 leading-relaxed text-justify">
                                    Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggungjawab di bidang 
                                    penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.
                                </p>

                                <p class="text-gray-700 leading-relaxed text-justify">
                                    PPID dibentuk di semua Satuan Kerja Perangkat Daerah (SKPD) di lingkungan Pemerintah Kota Bogor 
                                    dan berada di bawah serta bertanggung jawab kepada masing-masing Kepala SKPD.
                                </p>
                            </div>

                            <div class="border-t border-gray-200 pt-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-blue-100 p-2 rounded-lg mr-3">📋</span>
                                    Tugas dan Tanggung Jawab PPID
                                </h3>

                                <div class="space-y-3">
                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Menyediakan, menyimpan, mendokumentasikan, dan mengamankan informasi</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Memberikan pelayanan informasi sesuai dengan ketentuan peraturan perundang-undangan</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Memberikan pelayanan informasi publik yang cepat, tepat, dan sederhana</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Menetapkan prosedur operasional penyebarluasan Informasi Publik</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Melaksanakan pengujian konsekuensi</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Mengklasifikasikan informasi dan/atau perubahannya</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Menetapkan informasi yang dikecualikan yang telah habis jangka waktu</p>
                                    </div>

                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-r-lg hover:shadow-md transition">
                                        <span class="text-blue-600 mr-3 mt-1">✓</span>
                                        <p class="text-gray-700 text-sm">Memberikan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang atas Informasi publik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="{{ route('informasi.publik') }}" 
                           class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg hover:border-blue-500 transition transform hover:-translate-y-1 text-center group">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-blue-200 transition">
                                <span class="text-3xl">📄</span>
                            </div>
                            <h4 class="font-bold text-gray-900 text-sm mb-1">Informasi Publik</h4>
                            <p class="text-xs text-gray-600">Akses informasi</p>
                        </a>

                        <a href="{{ route('pengaduan.index') }}" 
                           class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg hover:border-green-500 transition transform hover:-translate-y-1 text-center group">
                            <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-green-200 transition">
                                <span class="text-3xl">📝</span>
                            </div>
                            <h4 class="font-bold text-gray-900 text-sm mb-1">Pengaduan</h4>
                            <p class="text-xs text-gray-600">Sampaikan aduan</p>
                        </a>

                        <a href="{{ route('tentang.ppid') }}" 
                           class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg hover:border-yellow-500 transition transform hover:-translate-y-1 text-center group">
                            <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-yellow-200 transition">
                                <span class="text-3xl">ℹ️</span>
                            </div>
                            <h4 class="font-bold text-gray-900 text-sm mb-1">Tentang PPID</h4>
                            <p class="text-xs text-gray-600">Info PPID</p>
                        </a>

                        <a href="{{ route('profil.index') }}" 
                           class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-lg hover:border-purple-500 transition transform hover:-translate-y-1 text-center group">
                            <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-purple-200 transition">
                                <span class="text-3xl">👥</span>
                            </div>
                            <h4 class="font-bold text-gray-900 text-sm mb-1">Profil</h4>
                            <p class="text-xs text-gray-600">Profil lengkap</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dokumen Penting Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="bg-blue-100 text-blue-800 text-xs font-bold px-4 py-2 rounded-full uppercase tracking-wide">
                    Dokumen Resmi
                </span>
                <h2 class="text-3xl font-bold text-gray-900 mt-4 mb-2">Dokumen Penting</h2>
                <p class="text-gray-600">Akses dokumen resmi Pemerintah Kota Bogor</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <a href="#" class="group">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl p-6 text-white text-center hover:shadow-2xl transition transform hover:-translate-y-2 h-full flex flex-col justify-between">
                        <div class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30 transition">
                            <span class="text-3xl">📊</span>
                        </div>
                        <p class="text-xs font-bold leading-tight">PERDA PERUBAHAN APBD TAHUN 2025</p>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl p-6 text-white text-center hover:shadow-2xl transition transform hover:-translate-y-2 h-full flex flex-col justify-between">
                        <div class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30 transition">
                            <span class="text-3xl">📈</span>
                        </div>
                        <p class="text-xs font-bold leading-tight">PERWALI PERUBAHAN APBD TAHUN 2025</p>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="bg-gradient-to-br from-red-500 to-red-700 rounded-xl p-6 text-white text-center hover:shadow-2xl transition transform hover:-translate-y-2 h-full flex flex-col justify-between">
                        <div class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30 transition">
                            <span class="text-3xl">📑</span>
                        </div>
                        <p class="text-xs font-bold leading-tight">KEPWAL ASB TA 2025</p>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl p-6 text-white text-center hover:shadow-2xl transition transform hover:-translate-y-2 h-full flex flex-col justify-between">
                        <div class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30 transition">
                            <span class="text-3xl">💰</span>
                        </div>
                        <p class="text-xs font-bold leading-tight">PERDA APBD TAHUN 2025</p>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="bg-gradient-to-br from-green-500 to-green-700 rounded-xl p-6 text-white text-center hover:shadow-2xl transition transform hover:-translate-y-2 h-full flex flex-col justify-between">
                        <div class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30 transition">
                            <span class="text-3xl">📋</span>
                        </div>
                        <p class="text-xs font-bold leading-tight">PERWALI APBD TAHUN 2025</p>
                    </div>
                </a>

                <a href="#" class="group">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl p-6 text-white text-center hover:shadow-2xl transition transform hover:-translate-y-2 h-full flex flex-col justify-between">
                        <div class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-white/30 transition">
                            <span class="text-3xl">🌐</span>
                        </div>
                        <p class="text-xs font-bold leading-tight">KOTA BOGOR OPEN DATA</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>