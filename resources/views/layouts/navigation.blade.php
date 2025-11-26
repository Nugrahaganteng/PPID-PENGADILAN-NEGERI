{{-- resources/views/layouts/navigation.blade.php --}}
<nav class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <!-- Top Header Bar -->
    <div class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center space-x-4">
                    <!-- <span>📧 ppid@pn-bogor.go.id</span>
                    <span>📞 (0251) 8324906</span> -->
                </div>
                <div class="flex items-center space-x-3">
                    @auth
                        <span class="text-xs">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-xs hover:text-blue-200 transition">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-3 py-1 border border-white rounded-md hover:bg-white hover:text-blue-900 transition text-xs">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="px-3 py-1 bg-white text-blue-900 rounded-md hover:bg-blue-50 transition text-xs">
                            Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('image/logo_ma.png') }}" alt="Logo" class="h-14 w-auto">
                <div class="flex flex-col">
                    <h1 class="text-lg font-bold text-gray-900">PPID</h1>
                    <p class="text-xs text-gray-600">Pengadilan Negeri Kota Bogor</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}"
                    class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition">
                    Home
                </a>

                <!-- Profil Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open"
                        class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Profil
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('profil.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Profil Pengadilan</a>
                        <a href="{{ route('profil.maklumat') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Maklumat</a>
                        <a href="{{ route('profil.visi-misi') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Visi & Misi</a>
                        <a href="{{ route('profil.tugas-fungsi') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Tugas dan Fungsi</a>
                    </div>
                </div>

                <!-- Tentang PPID Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open"
                        class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Tentang PPID
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('tentang.ppid') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Tentang PPID</a>
                        <a href="{{ route('tentang.buku-register') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Buku Register</a>
                        <a href="{{ route('tentang.alasan-penolakan') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Alasan Penolakan</a>
                        <a href="{{ route('tentang.kebijakan') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Kebijakan Pelayanan</a>
                        <a href="{{ route('tentang.statistik') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Statistik Waktu PPID</a>
                        <a href="{{ route('tentang.tata-cara') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Tata Cara</a>
                    </div>
                </div>

                <!-- Informasi Publik Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open"
                        class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Publik
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.publik') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Informasi Publik</a>
                    </div>
                </div>

                <!-- Informasi Berkala Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open"
                        class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Berkala
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.berkala.keuangan') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Laporan Keuangan</a>
                        <a href="{{ route('informasi.berkala.kinerja') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Laporan Kinerja</a>
                    </div>
                </div>

                <!-- Informasi Serta Merta Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open"
                        class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Serta Merta
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.serta-merta.pengumuman') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Pengumuman Darurat</a>
                    </div>
                </div>

                <!-- Informasi Setiap Saat Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open"
                        class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Setiap Saat
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.setiap-saat.hukum') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Dokumen Hukum</a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden" x-data="{ mobileMenuOpen: false }">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="p-2 rounded-md text-gray-700 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Mobile Menu -->
                <div x-show="mobileMenuOpen" 
                     @click.away="mobileMenuOpen = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform scale-95"
                     x-transition:enter-end="opacity-100 transform scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 transform scale-100"
                     x-transition:leave-end="opacity-0 transform scale-95"
                     class="absolute top-full left-0 right-0 bg-white shadow-lg py-2 px-4 mt-2 mx-4 rounded-md lg:hidden z-50">
                    
                    <a href="{{ route('home') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-blue-50 rounded-md">Home</a>
                    
                    <!-- Mobile Profil Section -->
                    <div x-data="{ open: false }" class="border-t border-gray-200 pt-2 mt-2">
                        <button @click="open = !open" class="w-full text-left px-3 py-2 text-sm font-medium text-gray-700 hover:bg-blue-50 rounded-md flex justify-between items-center">
                            Profil
                            <svg class="h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="pl-4 mt-1 space-y-1">
                            <a href="{{ route('profil.index') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Profil Pengadilan</a>
                            <a href="{{ route('profil.maklumat') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Maklumat</a>
                            <a href="{{ route('profil.visi-misi') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Visi & Misi</a>
                            <a href="{{ route('profil.tugas-fungsi') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Tugas dan Fungsi</a>
                        </div>
                    </div>

                    <!-- Mobile Tentang PPID Section -->
                    <div x-data="{ open: false }" class="border-t border-gray-200 pt-2 mt-2">
                        <button @click="open = !open" class="w-full text-left px-3 py-2 text-sm font-medium text-gray-700 hover:bg-blue-50 rounded-md flex justify-between items-center">
                            Tentang PPID
                            <svg class="h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition class="pl-4 mt-1 space-y-1">
                            <a href="{{ route('tentang.ppid') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Tentang PPID</a>
                            <a href="{{ route('tentang.buku-register') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Buku Register</a>
                            <a href="{{ route('tentang.alasan-penolakan') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Alasan Penolakan</a>
                            <a href="{{ route('tentang.kebijakan') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Kebijakan Pelayanan</a>
                            <a href="{{ route('tentang.statistik') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Statistik Waktu PPID</a>
                            <a href="{{ route('tentang.tata-cara') }}" class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 rounded-md">Tata Cara</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush