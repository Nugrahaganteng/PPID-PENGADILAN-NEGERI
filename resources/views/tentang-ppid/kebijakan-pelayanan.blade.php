@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold text-gray-800 mb-6">Kebijakan Pelayanan Informasi Publik</h1>

    <p class="text-gray-600 leading-relaxed mb-6">
        Kebijakan Pelayanan Informasi Publik ini disusun sebagai bentuk komitmen dalam
        memberikan pelayanan informasi yang cepat, tepat, dan transparan kepada masyarakat,
        sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.
    </p>

    {{-- Card Kebijakan --}}
    <div class="space-y-6">

        <div class="bg-white shadow rounded-xl p-6 border">
            <h3 class="text-xl font-semibold mb-2">1. Keterbukaan Informasi</h3>
            <p class="text-gray-600 text-sm">
                Setiap informasi publik bersifat terbuka dan dapat diakses oleh setiap pengguna informasi,
                kecuali informasi yang termasuk kategori dikecualikan.
            </p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 border">
            <h3 class="text-xl font-semibold mb-2">2. Pelayanan Cepat dan Tepat</h3>
            <p class="text-gray-600 text-sm">
                PPID wajib memberikan pelayanan informasi secara cepat, tepat waktu,
                dan menggunakan prosedur yang jelas dan sederhana.
            </p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 border">
            <h3 class="text-xl font-semibold mb-2">3. Biaya yang Wajar</h3>
            <p class="text-gray-600 text-sm">
                Pelayanan informasi publik tidak dipungut biaya, kecuali biaya penggandaan atau pengiriman dokumen.
            </p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 border">
            <h3 class="text-xl font-semibold mb-2">4. Perlindungan Data Pribadi</h3>
            <p class="text-gray-600 text-sm">
                PPID menjaga kerahasiaan data pribadi pemohon yang tidak terkait langsung dengan proses layanan informasi.
            </p>
        </div>

        <div class="bg-white shadow rounded-xl p-6 border">
            <h3 class="text-xl font-semibold mb-2">5. Kepastian Hak Pemohon</h3>
            <p class="text-gray-600 text-sm">
                Pemohon memiliki hak untuk mengajukan keberatan apabila permohonan informasinya ditolak atau tidak diproses.
            </p>
        </div>

    </div>

</div>
@endsection
