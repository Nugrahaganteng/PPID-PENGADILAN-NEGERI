<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PPID Kota Bogor') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gradient-to-br from-gray-50 to-blue-50">
    <!-- Top Bar with Gradient -->
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 text-white py-3 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <span class="text-blue-100">ppid@pn-bogor.go.id</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span class="text-blue-100">(0251) 8324906</span>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <span class="text-blue-100">{{ Auth::user()->name }}</span>
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-200 transition duration-200">Dashboard Admin</a>
                        @endif
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="hover:text-blue-200 transition duration-200">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-blue-200 transition duration-200 flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>Login</span>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-xl sticky top-0 z-50 backdrop-blur-sm bg-white/95">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24">
                <!-- Logo Section -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center group">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-400 rounded-full blur-md opacity-0 group-hover:opacity-30 transition duration-300"></div>
                            <img src="{{ asset('image/logo_ma.png') }}" alt="Logo" class="h-16 w-16 relative z-10 transform group-hover:scale-105 transition duration-300">
                        </div>
                        <div class="ml-4">
                            <div class="text-2xl font-bold bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">
                                PPID
                            </div>
                            <div class="text-xs text-gray-600 font-medium">Pengadilan Negeri Kota Bogor</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 relative group">
                        <span>Home</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    
                    <!-- Profil Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 flex items-center">
                            Profil
                            <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 border border-gray-100">
                            <div class="py-2">
                                <a href="{{ route('profil.index') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Profil PPID</span>
                                </a>
                                <a href="{{ route('profil.maklumat') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Maklumat</span>
                                </a>
                                <a href="{{ route('profil.visi-misi') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Visi & Misi</span>
                                </a>
                                <a href="{{ route('profil.tugas-fungsi') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                        <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"/>
                                    </svg>
                                    <span class="font-medium">Tugas & Fungsi</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tentang PPID Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 flex items-center">
                            Tentang PPID
                            <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 border border-gray-100">
                            <div class="py-2">
                                <a href="{{ route('tentang.ppid') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Tentang PPID</span>
                                </a>
                                <a href="{{ route('tentang.tata-cara') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Tata Cara</span>
                                </a>
                                <a href="{{ route('tentang.statistik') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                                    </svg>
                                    <span class="font-medium">Statistik</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Publik Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 flex items-center">
                            Informasi Publik
                            <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 border border-gray-100">
                            <div class="py-2">
                                <a href="{{ route('informasi.publik') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                    </svg>
                                    <span class="font-medium">Informasi Publik</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Berkala Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 flex items-center">
                            Informasi Berkala
                            <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 border border-gray-100">
                            <div class="py-2">
                                <a href="{{ route('informasi.berkala.keuangan') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Laporan Keuangan</span>
                                </a>
                                <a href="{{ route('informasi.berkala.kinerja') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Laporan Kinerja</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Serta Merta Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 flex items-center">
                            Informasi Serta Merta
                            <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 border border-gray-100">
                            <div class="py-2">
                                <a href="{{ route('informasi.serta-merta.pengumuman') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                    </svg>
                                    <span class="font-medium">Pengumuman</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Informasi Setiap Saat Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50 transition duration-200 flex items-center">
                            Informasi Setiap Saat
                            <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2 border border-gray-100">
                            <div class="py-2">
                                <a href="{{ route('informasi.setiap-saat.hukum') }}" class="block px-5 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 transition duration-200 flex items-center space-x-3 group/item">
                                    <svg class="w-5 h-5 text-gray-400 group-hover/item:text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L11 4.323V3a1 1 0 011-1zm-5 8.274l-.818 2.552c-.25.78.409 1.674 1.484 1.674.75 0 1.54-.196 2.334-.678V9.071L5.682 7.756A1 1 0 004.788 9.545L5 10.274zm11.356 2.552l-.818-2.552.212-.729a1 1 0 00-.894-1.789L12 7.756V13.822c.794.482 1.584.678 2.334.678 1.075 0 1.733-.893 1.484-1.674z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">Dokumen Hukum</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-xl text-gray-700 hover:text-blue-600 hover:bg-blue-50 focus:outline-none transition duration-200">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden lg:hidden bg-white border-t border-gray-100 shadow-inner">
            <div class="px-4 pt-4 pb-4 space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-3 text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:text-blue-600 rounded-xl transition duration-200 font-medium">
                    Home
                </a>
                
                <!-- Mobile Profil Section -->
                <div class="space-y-1">
                    <div class="px-4 py-2 text-sm font-semibold text-gray-900 bg-gray-50 rounded-lg">Profil</div>
                    <a href="{{ route('profil.index') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Profil PPID
                    </a>
                    <a href="{{ route('profil.maklumat') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Maklumat
                    </a>
                    <a href="{{ route('profil.visi-misi') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Visi & Misi
                    </a>
                    <a href="{{ route('profil.tugas-fungsi') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Tugas & Fungsi
                    </a>
                </div>

                <!-- Mobile Tentang PPID Section -->
                <div class="space-y-1">
                    <div class="px-4 py-2 text-sm font-semibold text-gray-900 bg-gray-50 rounded-lg">Tentang PPID</div>
                    <a href="{{ route('tentang.ppid') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Tentang PPID
                    </a>
                    <a href="{{ route('tentang.tata-cara') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Tata Cara
                    </a>
                    <a href="{{ route('tentang.statistik') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Statistik
                    </a>
                </div>

                <!-- Mobile Informasi Publik -->
                <div class="space-y-1">
                    <div class="px-4 py-2 text-sm font-semibold text-gray-900 bg-gray-50 rounded-lg">Informasi Publik</div>
                    <a href="{{ route('informasi.publik') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Informasi Publik
                    </a>
                </div>

                <!-- Mobile Informasi Berkala -->
                <div class="space-y-1">
                    <div class="px-4 py-2 text-sm font-semibold text-gray-900 bg-gray-50 rounded-lg">Informasi Berkala</div>
                    <a href="{{ route('informasi.berkala.keuangan') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Laporan Keuangan
                    </a>
                    <a href="{{ route('informasi.berkala.kinerja') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Laporan Kinerja
                    </a>
                </div>

                <!-- Mobile Informasi Serta Merta -->
                <div class="space-y-1">
                    <div class="px-4 py-2 text-sm font-semibold text-gray-900 bg-gray-50 rounded-lg">Informasi Serta Merta</div>
                    <a href="{{ route('informasi.serta-merta.pengumuman') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Pengumuman
                    </a>
                </div>

                <!-- Mobile Informasi Setiap Saat -->
                <div class="space-y-1">
                    <div class="px-4 py-2 text-sm font-semibold text-gray-900 bg-gray-50 rounded-lg">Informasi Setiap Saat</div>
                    <a href="{{ route('informasi.setiap-saat.hukum') }}" class="block px-4 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition duration-200 ml-2">
                        → Dokumen Hukum
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main class="min-h-screen">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-4 gap-12">
                <!-- PPID Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('image/logo_ma.png') }}" alt="Logo" class="h-12 w-12">
                        <div>
                            <h3 class="text-xl font-bold text-white">PPID</h3>
                            <p class="text-xs text-blue-200">Kota Bogor</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Pejabat Pengelola Informasi Dan Dokumentasi Pengadilan Negeri Kota Bogor
                    </p>
                    <div class="flex space-x-3 pt-2">
                        <a href="#" class="w-9 h-9 bg-blue-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-blue-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-blue-800 hover:bg-blue-700 rounded-lg flex items-center justify-center transition duration-200">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white">Navigasi Cepat</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200 flex items-center group">
                                <span class="w-0 h-0.5 bg-blue-400 group-hover:w-4 transition-all duration-200 mr-0 group-hover:mr-2"></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profil.index') }}" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200 flex items-center group">
                                <span class="w-0 h-0.5 bg-blue-400 group-hover:w-4 transition-all duration-200 mr-0 group-hover:mr-2"></span>
                                Profil PPID
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('informasi.publik') }}" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200 flex items-center group">
                                <span class="w-0 h-0.5 bg-blue-400 group-hover:w-4 transition-all duration-200 mr-0 group-hover:mr-2"></span>
                                Informasi Publik
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tentang.ppid') }}" class="text-gray-300 hover:text-white hover:pl-2 transition-all duration-200 flex items-center group">
                                <span class="w-0 h-0.5 bg-blue-400 group-hover:w-4 transition-all duration-200 mr-0 group-hover:mr-2"></span>
                                Tentang PPID
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white">Hubungi Kami</h3>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start space-x-3 text-gray-300">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span>ppid@pn-bogor.go.id</span>
                        </li>
                        <li class="flex items-start space-x-3 text-gray-300">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span>(0251) 8324906</span>
                        </li>
                        <li class="flex items-start space-x-3 text-gray-300">
                            <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Jl. Bina Marga No.8, Bogor, Jawa Barat</span>
                        </li>
                    </ul>
                </div>

                <!-- Service Hours -->
                <div>
                    <h3 class="text-lg font-bold mb-6 text-white">Jam Layanan</h3>
                    <div class="bg-blue-900/50 rounded-xl p-5 backdrop-blur-sm border border-blue-800">
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <p class="text-white font-medium">Senin - Jumat</p>
                                    <p class="text-blue-200 text-sm">08:00 - 16:00 WIB</p>
                                </div>
                            </div>
                            <div class="pt-3 border-t border-blue-800">
                                <p class="text-blue-200 text-xs">
                                    *Kecuali hari libur nasional
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-sm text-gray-400">
                        © 2025 PPID Pengadilan Negeri Kota Bogor. All rights reserved.
                    </p>
                    <div class="flex items-center space-x-6 text-sm text-gray-400">
                        <a href="#" class="hover:text-white transition duration-200">Kebijakan Privasi</a>
                        <span>•</span>
                        <a href="#" class="hover:text-white transition duration-200">Syarat & Ketentuan</a>
                        <span>•</span>
                        <a href="#" class="hover:text-white transition duration-200">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            const menu = document.querySelector('.mobile-menu');
            menu.classList.toggle('hidden');
            
            // Animate hamburger to X
            const svg = this.querySelector('svg');
            if (menu.classList.contains('hidden')) {
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
            } else {
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.querySelector('.mobile-menu');
            const button = document.querySelector('.mobile-menu-button');
            
            if (!menu.contains(event.target) && !button.contains(event.target)) {
                menu.classList.add('hidden');
                const svg = button.querySelector('svg');
                svg.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
            }
        });

        // Smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>