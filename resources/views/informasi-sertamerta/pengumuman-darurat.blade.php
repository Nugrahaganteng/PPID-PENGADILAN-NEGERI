@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">

    {{-- HERO SECTION --}}
    <div class="bg-red-50 border border-red-300 rounded-xl p-8 mb-10">
        <h1 class="text-3xl font-bold text-red-700 mb-4">Pengumuman Darurat</h1>
        <p class="text-red-800 leading-relaxed">
            Informasi ini disampaikan sebagai pemberitahuan resmi terkait kondisi darurat yang membutuhkan
            perhatian segera. Pengumuman ini termasuk dalam kategori Informasi Serta-Merta sesuai ketentuan
            UU Keterbukaan Informasi Publik.
        </p>
    </div>

    {{-- IKHTISAR DARURAT --}}
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Ikhtisar Situasi Darurat</h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-red-600 mb-2">Jenis Situasi</h3>
                <p class="text-gray-700 text-sm">
                    • Gangguan Sistem  
                    • Keadaan Darurat Bencana  
                    • Gangguan Layanan Publik  
                </p>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-red-600 mb-2">Tanggal Pengumuman</h3>
                <p class="text-gray-700 text-sm">
                    {{ now()->format('d F Y') }}
                </p>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-red-600 mb-2">Status Terkini</h3>
                <p class="text-gray-700 text-sm">
                    Sedang ditangani oleh tim terkait.  
                </p>
            </div>

        </div>
    </div>

    {{-- DETAIL PENTING --}}
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Informasi Penting</h2>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="border rounded-xl p-6 bg-red-50">
                <h3 class="text-lg font-semibold text-red-700 mb-2">Dampak yang Terjadi</h3>
                <ul class="text-sm text-gray-800 space-y-2">
                    <li>• Gangguan akses sistem layanan</li>
                    <li>• Proses pelayanan publik mengalami keterlambatan</li>
                    <li>• Beberapa fitur tidak dapat digunakan sementara</li>
                </ul>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Langkah Penanganan</h3>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li>• Tim teknis sedang melakukan pemulihan sistem</li>
                    <li>• Monitoring dilakukan setiap 30 menit</li>
                    <li>• Informasi perkembangan akan diperbarui secara berkala</li>
                </ul>
            </div>

        </div>
    </div>

    {{-- CATATAN TAMBAHAN --}}
    <div class="bg-yellow-50 border border-yellow-300 rounded-xl p-6 mb-10">
        <h3 class="text-lg font-semibold text-gray-800 mb-3">Pemberitahuan untuk Masyarakat</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
            Kami mengimbau masyarakat untuk tetap tenang dan mengikuti informasi resmi dari kanal PPID.
            Mohon tidak menyebarkan informasi yang belum terverifikasi. Apabila membutuhkan bantuan lebih lanjut,
            silakan menghubungi petugas melalui kontak resmi yang tersedia.
        </p>
    </div>

    {{-- PENUTUP --}}
    <div class="text-center mt-12">
        <p class="text-gray-700 text-sm leading-relaxed">
            Pengumuman ini dikeluarkan sebagai bentuk kewajiban untuk memberikan informasi darurat
            secara cepat dan tepat kepada masyarakat.
            Perkembangan terbaru akan kami sampaikan sesegera mungkin.
        </p>
    </div>

</div>
@endsection
