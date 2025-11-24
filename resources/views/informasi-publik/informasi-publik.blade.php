@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">

    {{-- HERO SECTION --}}
    <div class="bg-blue-50 border border-blue-200 rounded-xl p-8 mb-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Informasi Publik</h1>
        <p class="text-gray-700 leading-relaxed">
            Halaman ini menyediakan berbagai informasi publik yang wajib tersedia bagi masyarakat 
            sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (KIP).
            Informasi disajikan secara transparan, akurat, dan mudah diakses.
        </p>
    </div>

    {{-- IKHTISAR INFORMASI --}}
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Ikhtisar Informasi Publik</h2>
        <div class="grid md:grid-cols-3 gap-6">

            <div class="border rounded-xl p-6 shadow bg-white">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Berkala</h3>
                <p class="text-gray-600 text-sm">
                    Informasi yang diperbarui dan diumumkan secara rutin seperti profil, kegiatan, dan statistik.
                </p>
            </div>

            <div class="border rounded-xl p-6 shadow bg-white">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Setiap Saat</h3>
                <p class="text-gray-600 text-sm">
                    Informasi yang dapat diakses kapan saja, seperti SOP, layanan, data perkara, dan prosedur permohonan.
                </p>
            </div>

            <div class="border rounded-xl p-6 shadow bg-white">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Informasi Serta-Merta</h3>
                <p class="text-gray-600 text-sm">
                    Informasi yang wajib diumumkan segera terkait kondisi yang dapat mengancam hajat hidup orang banyak.
                </p>
            </div>

        </div>
    </div>

    {{-- HIGHLIGHTS INFORMASI --}}
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Highlight Informasi Publik</h2>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="border rounded-xl p-6 bg-blue-50">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Dokumen Wajib Umum</h3>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li>• Struktur Organisasi</li>
                    <li>• Profil Pejabat Pengadilan</li>
                    <li>• Program & Kegiatan</li>
                    <li>• Laporan Akses Informasi</li>
                    <li>• Informasi Layanan Publik</li>
                </ul>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Dokumen yang Dapat Diunduh</h3>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li>• SOP Pelayanan Publik</li>
                    <li>• Standar Maklumat Pelayanan</li>
                    <li>• Daftar Informasi Publik (DIP)</li>
                    <li>• Formulir Permohonan Informasi</li>
                    <li>• Formulir Keberatan Informasi</li>
                </ul>
            </div>

        </div>
    </div>

    {{-- CATATAN TAMBAHAN --}}
    <div class="bg-yellow-50 border border-yellow-300 rounded-xl p-6 mb-10">
        <h3 class="text-lg font-semibold text-gray-800 mb-3">Catatan Tambahan</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
            Apabila terdapat informasi yang belum tersedia pada halaman ini, masyarakat dapat mengajukan
            permohonan informasi melalui layanan PPID dengan mengisi formulir resmi. Setiap permohonan akan
            ditangani sesuai prosedur yang berlaku.
        </p>
    </div>

    {{-- PENUTUP --}}
    <div class="text-center mt-12">
        <p class="text-gray-700 text-sm leading-relaxed">
            Informasi ini disampaikan sebagai bentuk komitmen terhadap keterbukaan publik dan pelayanan prima.  
            Untuk mengakses informasi lebih lanjut, silakan kunjungi halaman PPID atau hubungi petugas informasi.
        </p>
    </div>

</div>
@endsection
