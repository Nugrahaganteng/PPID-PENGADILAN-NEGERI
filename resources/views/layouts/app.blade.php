<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PPID Kota Bogor') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <!-- Top Bar -->
    <div class="bg-blue-900 text-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end items-center space-x-4 text-sm">
                @auth
                    <span>{{ Auth::user()->name }}</span>
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-200">Dashboard Admin</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-blue-200">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="hover:text-blue-200">Login</a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="h-14 w-14">
                        <div class="ml-3">
                            <div class="text-lg font-bold text-gray-900">PPID</div>
                            <div class="text-xs text-gray-600">Pengadilan Negeri Kota Bogor</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
                        Home
                    </a>
                    
                    <!-- Profil Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Profil
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('profil.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-t-lg">Profil PPID</a>
                            <a href="{{ route('profil.maklumat') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Maklumat</a>
                            <a href="{{ route('profil.visi-misi') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Visi & Misi</a>
                            <a href="{{ route('profil.tugas-fungsi') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-b-lg">Tugas & Fungsi</a>
                        </div>
                    </div>

                    <!-- Tentang PPID Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Tentang PPID
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('tentang.ppid') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-t-lg">Tentang PPID</a>
                            <a href="{{ route('tentang.tata-cara') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Tata Cara</a>
                            <a href="{{ route('tentang.statistik') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-b-lg">Statistik</a>
                        </div>
                    </div>

                    <!-- Informasi Publik Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Informasi Publik
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('informasi.publik') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-t-lg">Informasi Publik</a>
                        </div>
                    </div>

                    <!-- Informasi Berkala Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Informasi Berkala
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('informasi.berkala.keuangan') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-t-lg">Laporan Keuangan</a>
                            <a href="{{ route('informasi.berkala.kinerja') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-b-lg">Laporan Kinerja</a>
                        </div>
                    </div>

                    <!-- Informasi Serta Merta Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Informasi Serta Merta
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('informasi.serta-merta.pengumuman') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Pengumuman</a>
                        </div>
                    </div>

                    <!-- Informasi Setiap Saat Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Informasi Setiap Saat
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('informasi.setiap-saat.hukum') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Dokumen Hukum</a>
                        </div>
                    </div>

                    <a href="{{ route('ipkd') }}" class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
                        IPKD
                    </a>

                    <!-- Pengaduan Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition flex items-center">
                            Pengaduan
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="{{ route('pengaduan.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Form Pengaduan</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Home</a>
                <a href="{{ route('profil.index') }}" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Profil</a>
                <a href="{{ route('tentang.ppid') }}" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Tentang PPID</a>
                <a href="{{ route('informasi.publik') }}" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Informasi Publik</a>
                <a href="{{ route('pengaduan.index') }}" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">Pengaduan</a>
                <a href="{{ route('ipkd') }}" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg">IPKD</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- PPID Info -->
                <div>
                    <h3 class="text-lg font-bold mb-4">PPID Kota Bogor</h3>
                    <p class="text-gray-400 text-sm">
                        Pejabat Pengelola Informasi Dan Dokumentasi Pengadilan Negeri Kota Bogor
                    </p>
                </div>

                <!-- Navigation -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Navigasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="{{ route('profil.index') }}" class="text-gray-400 hover:text-white">Profil</a></li>
                        <li><a href="{{ route('informasi.publik') }}" class="text-gray-400 hover:text-white">Informasi Publik</a></li>
                        <li><a href="{{ route('pengaduan.index') }}" class="text-gray-400 hover:text-white">Pengaduan</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-start">
                            <span class="mr-2">📧</span>
                            ppid@pn-bogor.go.id
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">📞</span>
                            (0251) 8324906
                        </li>
                        <li class="flex items-start">
                            <span class="mr-2">📍</span>
                            Jl. Bina Marga No.8, Bogor
                        </li>
                    </ul>
                </div>

                <!-- Service Hours -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Jam Layanan</h3>
                    <p class="text-gray-400 text-sm">
                        Senin - Jumat<br>
                        08:00 - 16:00 WIB
                    </p>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                © 2025 PPID Pengadilan Negeri Kota Bogor. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>