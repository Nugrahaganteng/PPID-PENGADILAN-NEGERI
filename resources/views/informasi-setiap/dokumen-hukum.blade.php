@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HERO SECTION --}}
        <div class="bg-gradient-to-r from-green-600 to-green-700 rounded-2xl shadow-xl p-8 md:p-12 mb-12 text-white">
            <div class="flex items-center mb-4">
                <svg class="w-12 h-12 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <h1 class="text-4xl font-bold">Dokumen Hukum</h1>
            </div>
            <p class="text-green-50 text-lg leading-relaxed max-w-4xl">
                Halaman ini menyediakan berbagai dokumen hukum resmi yang diterbitkan dan digunakan
                dalam proses penyelenggaraan layanan publik, termasuk peraturan, keputusan, standar,
                dan pedoman yang berlaku di lingkungan instansi.
            </p>
        </div>

        {{-- IKHTISAR DOKUMEN --}}
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Ikhtisar Dokumen Hukum</h2>
            <div class="grid md:grid-cols-3 gap-6">

                {{-- Card 1 --}}
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="bg-green-600 h-2"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Peraturan Perundang-Undangan</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Undang-undang, PP, Perpres, dan regulasi nasional yang menjadi dasar hukum.
                        </p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="bg-blue-600 h-2"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Keputusan & Surat Edaran</h3>
                        <p class="text-gray-600 leading-relaxed">
                            SK Ketua, SE, pedoman internal, serta ketetapan operasional instansi.
                        </p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="bg-purple-600 h-2"></div>
                    <div class="p-6">
                        <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Standar & SOP</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Standar pelayanan, SOP proses kerja, serta panduan pelaksanaan tugas.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        {{-- HIGHLIGHTS DOKUMEN --}}
        <div class="mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Dokumen Unggulan</h2>

            <div class="grid md:grid-cols-2 gap-8">

                {{-- Regulasi yang Sering Digunakan --}}
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Regulasi yang Sering Digunakan</h3>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-green-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span class="text-gray-700">Undang-Undang No. 14 Tahun 2008 tentang KIP</span>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-green-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span class="text-gray-700">Peraturan Mahkamah Agung (PERMA) terkait administrasi</span>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-green-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span class="text-gray-700">Peraturan internal tentang tata kelola layanan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-green-600 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <span class="text-gray-700">Peraturan terkait pelayanan publik</span>
                        </li>
                    </ul>
                </div>

                {{-- Dokumen yang Dapat Diunduh --}}
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Dokumen yang Dapat Diunduh</h3>
                    </div>
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center justify-between p-4 bg-white rounded-lg hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/>
                                    </svg>
                                    <span class="text-gray-700 font-medium">UU No. 14 Tahun 2008</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between p-4 bg-white rounded-lg hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/>
                                    </svg>
                                    <span class="text-gray-700 font-medium">PERMA Administrasi</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-between p-4 bg-white rounded-lg hover:shadow-md transition-shadow duration-200">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-red-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/>
                                    </svg>
                                    <span class="text-gray-700 font-medium">SOP Pelayanan Publik</span>
                                </div>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        {{-- CTA SECTION --}}
        <div class="bg-gradient-to-r from-gray-800 to-gray-900 rounded-2xl shadow-xl p-8 md:p-12 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Butuh Dokumen Tertentu?</h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                Jika Anda memerlukan dokumen hukum khusus yang tidak tersedia di halaman ini, 
                silakan hubungi tim kami atau ajukan permohonan informasi publik.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Hubungi Kami
                </a>
                <a href="#" class="inline-flex items-center justify-center px-8 py-3 bg-white hover:bg-gray-100 text-gray-900 font-semibold rounded-lg transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Ajukan Permohonan
                </a>
            </div>
        </div>

    </div>
</div>
@endsection