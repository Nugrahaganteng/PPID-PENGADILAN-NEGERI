{{-- resources/views/layouts/footer.blade.php --}}
<footer class="bg-gray-900 text-white mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-4">PPID Kota Bogor</h3>
                <p class="text-gray-400 text-sm">
                    Pejabat Pengelola Informasi Dan Dokumentasi Pengadilan Negeri Kota Bogor
                </p>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Navigasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Home</a></li>
                    <li><a href="{{ route('profil.index') }}" class="text-gray-400 hover:text-white transition">Profil</a></li>
                    <li><a href="{{ route('informasi.publik') }}" class="text-gray-400 hover:text-white transition">Informasi Publik</a></li>
                    <li><a href="{{ route('pengaduan.index') }}" class="text-gray-400 hover:text-white transition">Pengaduan</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Kontak</h3>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>📧 ppid@pn-bogor.go.id</li>
                    <li>📞 (0251) 8324906</li>
                    <li>📍 Jl. Bina Marga No.8, Bogor</li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Jam Layanan</h3>
                <p class="text-gray-400 text-sm">
                    Senin - Jumat<br>
                    08:00 - 16:00 WIB
                </p>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
            <p>&copy; 2025 PPID Pengadilan Negeri Kota Bogor. All rights reserved.</p>
        </div>
    </div>
</footer>