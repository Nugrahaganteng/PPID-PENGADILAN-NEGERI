{{-- resources/views/layouts/navigation.blade.php --}}
<nav class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <!-- Top Header Bar -->
    <div class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center space-x-4">
                    <span>📧 ppid@pn-bogor.go.id</span>
                    <span>📞 (0251) 8324906</span>
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
                        <a href="{{ route('login') }}" class="px-3 py-1 border border-white rounded-md hover:bg-white hover:text-blue-900 transition text-xs">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="px-3 py-1 bg-white text-blue-900 rounded-md hover:bg-blue-50 transition text-xs">
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
                <img src="{{ asset('images/logo-pn.png') }}" alt="Logo" class="h-14 w-auto">
                <div class="flex flex-col">
                    <h1 class="text-lg font-bold text-gray-900">PPID</h1>
                    <p class="text-xs text-gray-600">Pengadilan Negeri Kota Bogor</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition">
                    🏠 Home
                </a>

                <!-- Profil Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Profil
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('profil.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Profil Pengadilan</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Visi & Misi</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Struktur Organisasi</a>
                    </div>
                </div>

                <!-- Tentang PPID Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Tentang PPID
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('tentang-ppid') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Tentang PPID</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Dasar Hukum</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Tugas & Fungsi</a>
                    </div>
                </div>

                <!-- Informasi Publik Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Publik
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.publik') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Informasi Publik</a>
                    </div>
                </div>

                <!-- Informasi Berkala Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Berkala
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.berkala') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Laporan Keuangan</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Laporan Kinerja</a>
                    </div>
                </div>

                <!-- Informasi Serta Merta Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Serta Merta
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.serta-merta') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Pengumuman Darurat</a>
                    </div>
                </div>

                <!-- Informasi Setiap Saat Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Informasi Setiap Saat
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('informasi.setiap-saat') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Dokumen Hukum</a>
                    </div>
                </div>

                <a href="{{ route('ipkd') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition">
                    IPKD
                </a>

                <!-- Pengaduan Dropdown -->
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition flex items-center">
                        Pengaduan
                        <svg class="ml-1 h-4 w-4" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open" x-transition class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('pengaduan.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">Form Pengaduan</a>
                    </div>
                </div>

                <a href="{{ route('sibadra') }}" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md transition">
                    Sibadra
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2 rounded-md text-gray-700 hover:bg-gray-100">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush