@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">

    {{-- HERO SECTION --}}
    <div class="bg-green-50 border border-green-300 rounded-xl p-8 mb-10">
        <h1 class="text-3xl font-bold text-green-700 mb-4">Dokumen Hukum</h1>
        <p class="text-green-900 leading-relaxed">
            Halaman ini menyediakan berbagai dokumen hukum resmi yang diterbitkan dan digunakan
            dalam proses penyelenggaraan layanan publik, termasuk peraturan, keputusan, standar,
            dan pedoman yang berlaku di lingkungan instansi.
        </p>
    </div>

    {{-- IKHTISAR DOKUMEN --}}
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Ikhtisar Dokumen Hukum</h2>
        <div class="grid md:grid-cols-3 gap-6">

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-green-700 mb-2">Peraturan Perundang-Undangan</h3>
                <p class="text-gray-700 text-sm">
                    Undang-undang, PP, Perpres, dan regulasi nasional yang menjadi dasar hukum.
                </p>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-green-700 mb-2">Keputusan & Surat Edaran</h3>
                <p class="text-gray-700 text-sm">
                    SK Ketua, SE, pedoman internal, serta ketetapan operasional instansi.
                </p>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-green-700 mb-2">Standar & SOP</h3>
                <p class="text-gray-700 text-sm">
                    Standar pelayanan, SOP proses kerja, serta panduan pelaksanaan tugas.
                </p>
            </div>

        </div>
    </div>

    {{-- HIGHLIGHTS DOKUMEN --}}
    <div class="mb-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Dokumen Unggulan</h2>

        <div class="grid md:grid-cols-2 gap-6">

            <div class="border rounded-xl p-6 bg-green-50">
                <h3 class="text-lg font-semibold text-green-700 mb-2">Regulasi yang Sering Digunakan</h3>
                <ul class="text-sm text-gray-800 space-y-2">
                    <li>• Undang-Undang No. 14 Tahun 2008 tentang KIP</li>
                    <li>• Peraturan Mahkamah Agung (PERMA) terkait administrasi</li>
                    <li>• Peraturan internal tentang tata kelola layanan</li>
                    <li>• Peraturan terkait pelayanan publik</li>
                </ul>
            </div>

            <div class="border rounded-xl p-6 bg-white shadow">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Dokumen yang Dapat Diunduh</h3>
                <ul class="text-sm text-gray-700
