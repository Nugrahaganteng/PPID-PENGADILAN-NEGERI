<x-app-layout>
    <div class="relative bg-gradient-to-br from-blue-700 via-blue-800 to-blue-900 text-white overflow-hidden shadow-2xl">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(135deg, rgba(255,255,255,.1) 25%, transparent 25%, transparent 50%, rgba(255,255,255,.1) 50%, rgba(255,255,255,.1) 75%, transparent 75%, transparent); background-size: 40px 40px;">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div class="inline-block" x-data="{ loaded: false }" x-init="setTimeout(() => { loaded = true }, 500)">
                        <span class="bg-yellow-400 text-blue-900 text-sm font-extrabold px-5 py-2.5 rounded-full uppercase tracking-wider shadow-lg transition duration-500 ease-out transform"
                            :class="loaded ? 'translate-y-0 opacity-100' : 'translate-y-4 opacity-0'">
                            Pemerintah Kota Bogor
                        </span>
                    </div>
                    <h1 class="text-6xl font-extrabold leading-tight tracking-tight animate-fade-in-down">
                        Pejabat Pengelola Informasi dan Dokumentasi
                    </h1>
                    <p class="text-xl text-blue-200 leading-relaxed max-w-lg animate-fade-in-up">
                        Mewujudkan keterbukaan informasi publik yang **transparan**, **akuntabel**, dan **mudah diakses** oleh seluruh masyarakat Kota Bogor.
                    </p>
                    <a href="{{ route('permohonan.create') }}" 
                       class="inline-flex items-center bg-yellow-400 text-blue-900 hover:bg-yellow-300 px-8 py-4 rounded-xl font-bold text-lg shadow-xl transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl focus:outline-none focus:ring-4 focus:ring-yellow-300/50">
                        <span class="mr-3">🚀</span>
                        Ajukan Permohonan Sekarang
                    </a>
                </div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-blue-400 opacity-20 rounded-3xl transform -rotate-3 transition duration-500 group-hover:rotate-0"></div>
                    <div class="bg-white/10 backdrop-blur-md rounded-3xl p-6 border border-white/30 shadow-2xl transition duration-500 transform group-hover:scale-[1.02] relative">
                        <img src="{{ asset('image/pn.png') }}" alt="PPID Kota Bogor" class="w-full h-auto rounded-xl shadow-lg transition duration-500 transform group-hover:shadow-3xl">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full text-white">
                <path d="M0,96L48,90.7C96,85,192,75,288,74.7C384,75,480,85,576,80C672,75,768,59,864,58.7C960,59,1056,75,1152,80C1248,85,1344,75,1392,69.3L1440,64L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z" fill="currentColor"/>
            </svg>
        </div>
    </div>

    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-1 space-y-8">
                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform transition duration-300 hover:shadow-2xl">
                        <div class="bg-gradient-to-r from-teal-500 to-green-600 p-5">
                            <h3 class="text-xl font-bold text-white flex items-center">
                                <span class="text-2xl mr-3">💰</span>
                                Transparansi Anggaran
                            </h3>
                        </div>
                        <div class="p-6">
                            <ul class="space-y-1">
                                @foreach([
                                    ['route' => 'tentang.tata-cara', 'label' => 'Alur Permohonan Informasi'],
                                    ['route' => 'informasi.berkala.kinerja', 'label' => 'Laporan Penyelenggaraan Pemda'],
                                    ['route' => 'informasi.berkala.keuangan', 'label' => 'Opini Atas LKPD'],
                                    ['route' => 'informasi.berkala.keuangan', 'label' => 'LKPD Sudah Teraudit'],
                                    ['route' => 'informasi.berkala.keuangan', 'label' => 'Ringkasan RKA SKPD'],
                                ] as $item)
                                <li>
                                    <a href="{{ route($item['route']) }}" 
                                        class="flex items-center text-base text-gray-700 font-medium hover:text-green-700 hover:bg-green-50 p-3 rounded-lg transition duration-200 group">
                                        <span class="text-green-500 mr-3 transition duration-200 group-hover:translate-x-1">→</span>
                                        {{ $item['label'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <div class="bg-gradient-to-r from-red-500 to-red-600 p-5">
                            <h3 class="text-xl font-bold text-white flex items-center">
                                <span class="text-2xl mr-3">📰</span>
                                Berita Terkini
                            </h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="border-l-4 border-red-500 pl-4 py-2 hover:bg-red-50 rounded-r-lg transition duration-200">
                                    <p class="font-bold text-base text-gray-900">Pembaruan Informasi Publik Rutin</p>
                                    <p class="text-xs text-gray-500 mt-1">{{ date('d F Y') }}</p>
                                </div>
                                <div class="border-l-4 border-red-500 pl-4 py-2 hover:bg-red-50 rounded-r-lg transition duration-200">
                                    <p class="font-bold text-base text-gray-900">Pengumuman: Jam Pelayanan PPID</p>
                                    <p class="text-xs text-gray-500 mt-1">25 November 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl shadow-2xl p-6 text-white transform transition duration-300 hover:scale-[1.02]">
                        <h3 class="text-xl font-bold mb-5 flex items-center">
                            <span class="text-2xl mr-3">📞</span>
                            Hubungi Kami
                        </h3>
                        <div class="space-y-4 text-base">
                            <p class="flex items-start">
                                <span class="mr-3 text-yellow-300">📍</span>
                                <span>Pemerintah Kota Bogor</span>
                            </p>
                            <p class="flex items-start">
                                <span class="mr-3 text-yellow-300">✉️</span>
                                <span>ppid@kotabogor.go.id</span>
                            </p>
                            <p class="flex items-start">
                                <span class="mr-3 text-yellow-300">☎️</span>
                                <span>(0251) 8321075</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-8">
                    
                    @auth
                    <div class="bg-gradient-to-br from-green-500 via-green-600 to-green-700 rounded-2xl shadow-2xl overflow-hidden transform transition duration-500 hover:scale-[1.01]">
                        <div class="p-8 md:p-10">
                            <div class="flex items-center mb-6">
                                <div class="bg-white/30 p-5 rounded-full mr-5 shadow-inner">
                                    <span class="text-4xl">📬</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-extrabold text-white">Permohonan Informasi Publik</h3>
                                    <p class="text-green-100 text-base mt-1">Ajukan permohonan informasi dengan mudah dan cepat</p>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <a href="{{ route('permohonan.create') }}" 
                                    class="bg-white hover:bg-gray-50 rounded-xl p-6 shadow-xl transition duration-300 transform hover:scale-[1.02] group border-b-4 border-green-500 hover:border-green-600">
                                    <div class="flex items-center">
                                        <div class="bg-green-100 p-4 rounded-xl mr-4 group-hover:bg-green-200 transition">
                                            <span class="text-3xl">➕</span>
                                        </div>
                                        <div>
                                            <div class="font-extrabold text-green-900 text-xl">Buat Permohonan</div>
                                            <div class="text-sm text-green-700 mt-1">Ajukan informasi baru</div>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('permohonan.index') }}" 
                                    class="bg-white hover:bg-gray-50 rounded-xl p-6 shadow-xl transition duration-300 transform hover:scale-[1.02] group border-b-4 border-blue-500 hover:border-blue-600">
                                    <div class="flex items-center">
                                        <div class="bg-blue-100 p-4 rounded-xl mr-4 group-hover:bg-blue-200 transition">
                                            <span class="text-3xl">📋</span>
                                        </div>
                                        <div>
                                            <div class="font-extrabold text-blue-900 text-xl">Status Permohonan</div>
                                            <div class="text-sm text-blue-700 mt-1">Cek permohonan Anda</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 rounded-2xl shadow-2xl p-10 text-center transform transition duration-500 hover:shadow-3xl">
                        <div class="inline-block bg-white/30 p-6 rounded-full mb-6 shadow-inner">
                            <span class="text-5xl">🔒</span>
                        </div>
                        <h3 class="text-3xl font-extrabold text-white mb-3">Login Untuk Mengajukan Permohonan</h3>
                        <p class="text-blue-100 mb-8 max-w-md mx-auto">Silakan login terlebih dahulu untuk membuat permohonan informasi publik dan melihat status.</p>
                        <a href="{{ route('login') }}" 
                            class="inline-flex items-center bg-yellow-400 text-blue-900 hover:bg-yellow-300 px-10 py-4 rounded-xl font-extrabold text-lg shadow-2xl transition duration-300 transform hover:scale-105">
                            <span class="mr-3">🔑</span>
                            <span>Login Sekarang</span>
                        </a>
                    </div>
                    @endauth

                    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-700 p-8 text-center">
                            <div class="inline-block bg-white/20 p-5 rounded-full mb-3 shadow-inner">
                                <span class="text-4xl">🏛️</span>
                            </div>
                            <h2 class="text-3xl font-extrabold text-white">PPID Kota Bogor</h2>
                            <p class="text-blue-100 mt-2">Pejabat Pengelola Informasi dan Dokumentasi</p>
                        </div>

                        <div class="p-8 space-y-8">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2">Tentang Kami</h3>
                                <div class="prose max-w-none space-y-4">
                                    <p class="text-gray-700 leading-relaxed text-justify">
                                        Pejabat Pengelola Informasi dan Dokumentasi (**PPID**) adalah pejabat yang bertanggungjawab di bidang 
                                        **penyimpanan**, **pendokumentasian**, **penyediaan**, dan/atau **pelayanan informasi** di badan publik.
                                    </p>

                                    <p class="text-gray-700 leading-relaxed text-justify">
                                        PPID dibentuk di semua Satuan Kerja Perangkat Daerah (SKPD) di lingkungan Pemerintah Kota Bogor 
                                        dan berada di bawah serta bertanggung jawab kepada masing-masing Kepala SKPD. Tujuannya adalah menjamin hak publik atas informasi.
                                    </p>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-5 flex items-center">
                                    <span class="bg-blue-100 p-2 rounded-lg mr-3">📝</span>
                                    Tugas dan Tanggung Jawab PPID Utama
                                </h3>

                                <div class="space-y-4">
                                    @foreach([
                                        'Menyediakan, menyimpan, mendokumentasikan, dan mengamankan informasi',
                                        'Memberikan pelayanan informasi sesuai dengan ketentuan peraturan perundang-undangan',
                                        'Memberikan pelayanan informasi publik yang cepat, tepat, dan sederhana',
                                        'Menetapkan prosedur operasional penyebarluasan Informasi Publik',
                                        'Melaksanakan pengujian konsekuensi dan mengklasifikasikan informasi',
                                        'Menetapkan informasi yang dikecualikan yang telah habis jangka waktu',
                                        'Memberikan pertimbangan tertulis atas setiap kebijakan yang diambil untuk memenuhi hak setiap orang atas Informasi publik',
                                    ] as $task)
                                    <div class="flex items-start bg-blue-50 border-l-4 border-blue-600 p-4 rounded-lg shadow-sm hover:shadow-md transition duration-200">
                                        <span class="text-blue-600 mr-3 mt-1 text-lg font-extrabold">▶</span>
                                        <p class="text-gray-700 text-base">{{ $task }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        @foreach([
                            ['route' => 'informasi.publik', 'icon' => '📄', 'title' => 'Informasi Publik', 'desc' => 'Akses informasi', 'color' => 'blue'],
                            ['route' => 'pengaduan.index', 'icon' => '📢', 'title' => 'Pengaduan', 'desc' => 'Sampaikan aduan', 'color' => 'red'],
                            ['route' => 'tentang.ppid', 'icon' => '💡', 'title' => 'Tentang PPID', 'desc' => 'Info PPID', 'color' => 'yellow'],
                            ['route' => 'profil.index', 'icon' => '👥', 'title' => 'Profil', 'desc' => 'Profil lengkap', 'color' => 'purple'],
                        ] as $link)
                        <a href="{{ route($link['route']) }}" 
                            class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 hover:shadow-2xl transition duration-300 transform hover:-translate-y-1 text-center group hover:border-{{ $link['color'] }}-500">
                            <div class="bg-{{ $link['color'] }}-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-{{ $link['color'] }}-200 transition">
                                <span class="text-3xl">{{ $link['icon'] }}</span>
                            </div>
                            <h4 class="font-extrabold text-gray-900 text-base mb-1">{{ $link['title'] }}</h4>
                            <p class="text-sm text-gray-600">{{ $link['desc'] }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="bg-blue-500 text-white text-sm font-extrabold px-5 py-2.5 rounded-full uppercase tracking-wider shadow-md">
                    Dokumen Resmi
                </span>
                <h2 class="text-4xl font-extrabold text-gray-900 mt-4 mb-3">Dokumen Penting & Regulasi</h2>
                <p class="text-lg text-gray-600">Akses dokumen resmi terkait transparansi dan anggaran Pemerintah Kota Bogor</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach([
                    ['title' => 'PERDA PERUBAHAN APBD TAHUN 2025', 'icon' => '📊', 'from' => 'blue-500', 'to' => 'blue-700'],
                    ['title' => 'PERWALI PERUBAHAN APBD TAHUN 2025', 'icon' => '📈', 'from' => 'purple-500', 'to' => 'purple-700'],
                    ['title' => 'KEPWAL ASB TA 2025', 'icon' => '📑', 'from' => 'red-500', 'to' => 'red-700'],
                    ['title' => 'PERDA APBD TAHUN 2025', 'icon' => '💰', 'from' => 'orange-500', 'to' => 'orange-700'],
                    ['title' => 'PERWALI APBD TAHUN 2025', 'icon' => '📋', 'from' => 'green-500', 'to' => 'green-700'],
                    ['title' => 'KOTA BOGOR OPEN DATA', 'icon' => '🌐', 'from' => 'cyan-500', 'to' => 'blue-600'],
                ] as $doc)
                <a href="#" class="group block h-full">
                    <div class="bg-gradient-to-br from-{{ $doc['from'] }} to-{{ $doc['to'] }} rounded-2xl p-6 text-white text-center shadow-xl transition duration-300 transform group-hover:scale-[1.05] group-hover:shadow-3xl h-full flex flex-col justify-between">
                        <div class="bg-white/30 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-white/40 transition">
                            <span class="text-3xl">{{ $doc['icon'] }}</span>
                        </div>
                        <p class="text-sm font-bold leading-snug">{{ $doc['title'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout> 