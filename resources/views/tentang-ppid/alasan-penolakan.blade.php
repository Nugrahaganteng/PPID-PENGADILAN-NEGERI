@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-10">

    {{-- Judul --}}
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Alasan Penolakan Permohonan Informasi</h1>

    <p class="text-gray-600 leading-relaxed mb-10">
        Berdasarkan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik,
        PPID berhak menolak memberikan informasi publik secara sebagian atau keseluruhan apabila
        informasi tersebut termasuk ke dalam kategori yang dikecualikan dan dapat membahayakan
        kepentingan tertentu. Berikut adalah daftar alasan resmi penolakan permohonan informasi.
    </p>

    {{-- Card Daftar Alasan --}}
    <div class="space-y-6">

        {{-- 1 --}}
        <div class="border bg-white shadow rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                1. Menghambat Proses Penegakan Hukum
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Informasi yang apabila dibuka dapat mengganggu proses penyelidikan, penyidikan,
                pemeriksaan di pengadilan, atau proses penegakan hukum lainnya dapat ditolak.
            </p>
        </div>

        {{-- 2 --}}
        <div class="border bg-white shadow rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                2. Mengganggu Kepentingan Perlindungan Data Pribadi
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Informasi yang mengandung data pribadi seperti alamat lengkap, riwayat kesehatan,
                atau informasi sensitif lainnya tidak dapat diberikan tanpa persetujuan pemilik data.
            </p>
        </div>

        {{-- 3 --}}
        <div class="border bg-white shadow rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                3. Mengancam Keamanan Negara
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Informasi yang berdampak pada pertahanan, keamanan, atau strategi negara dapat
                ditolak demi kepentingan nasional.
            </p>
        </div>

        {{-- 4 --}}
        <div class="border bg-white shadow rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                4. Mengganggu Kepentingan Bisnis atau Persaingan Sehat
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Informasi yang berkaitan dengan rahasia dagang, kontrak kerja sama, atau informasi
                perusahaan yang bersifat strategis tidak dapat dibuka ke publik.
            </p>
        </div>

        {{-- 5 --}}
        <div class="border bg-white shadow rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                5. Dokumen yang Masih dalam Proses Penyusunan
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Dokumen rancangan yang belum ditetapkan secara resmi tidak dapat diberikan karena
                belum bersifat final dan masih dapat berubah.
            </p>
        </div>

        {{-- 6 --}}
        <div class="border bg-white shadow rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">
                6. Melanggar Hak Kekayaan Intelektual
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Informasi yang dilindungi hak cipta, lisensi, atau hak kekayaan intelektual lainnya
                tidak dapat diberikan tanpa izin pemegang hak.
            </p>
        </div>
    </div>

</div>
@endsection
