{{-- resources/views/informasi-berkala/laporan-keuangan.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Laporan Keuangan</h1>
            <p class="text-gray-600">Pengadilan Negeri Kota Bogor</p>
        </div>

        <!-- Filter -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="grid md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Laporan</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Semua Jenis</option>
                        <option>Laporan Realisasi Anggaran</option>
                        <option>Laporan Neraca</option>
                        <option>Laporan Operasional</option>
                        <option>CaLK (Catatan atas Laporan Keuangan)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">&nbsp;</label>
                    <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Summary Cards -->
        <div class="grid md:grid-cols-4 gap-6 mb-6">
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm">Total Anggaran</p>
                        <p class="text-4xl font-bold mt-2">Rp 12.4 M</p>
                        <p class="text-xs text-blue-100 mt-1">Tahun 2024</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v4H3zM3 9h18v12H3z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm">Realisasi Anggaran</p>
                        <p class="text-4xl font-bold mt-2">Rp 11.2 M</p>
                        <p class="text-xs text-green-100 mt-1">90.3% terealisasi</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l-3-3m3 3l3-3"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-yellow-100 text-sm">Sisa Anggaran</p>
                        <p class="text-4xl font-bold mt-2">Rp 1.2 M</p>
                        <p class="text-xs text-yellow-100 mt-1">Belum direalisasikan</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm">Persentase Realisasi</p>
                        <p class="text-4xl font-bold mt-2">90.3%</p>
                        <p class="text-xs text-purple-100 mt-1">Target: 95%</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laporan Tahunan -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Laporan Keuangan Tahunan</h2>
                <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">Tahun 2024</span>
            </div>

            <div class="space-y-4">

                <!-- 2024 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4 flex-1">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Keuangan Tahun 2024</h3>
                                <p class="text-sm text-gray-600 mb-3">
                                    Laporan Keuangan yang mencakup Realisasi Anggaran, Neraca, Laporan Operasional, dan CaLK Tahun 2024.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Terverifikasi</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">120 halaman</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">PDF - 12.3 MB</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">Diupload: 18 Jan 2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 ml-4">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M5 20h14"/>
                                </svg>
                                Download
                            </button>
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-width="2" d="M2.5 12a9.5 9.5 0 1119 0 9.5 9.5 0 01-19 0z"/>
                                </svg>
                                Lihat
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4 flex-1">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M3 3h18v18H3z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Keuangan Tahun 2023</h3>
                                <p class="text-sm text-gray-600 mb-3">
                                    Laporan Realisasi Anggaran, Neraca, LO, dan CaLK Tahun Anggaran 2023.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Terverifikasi</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">110 halaman</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">PDF - 11.1 MB</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">Diupload: 21 Jan 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 ml-4">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M5 20h14"/>
                                </svg>
                                Download
                            </button>
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Lihat
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4 flex-1">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M3 3h18v18H3z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Keuangan Tahun 2022</h3>
                                <p class="text-sm text-gray-600 mb-3">
                                    Laporan Keuangan Tahun Anggaran 2022 termasuk Neraca dan CaLK.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Terverifikasi</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">98 halaman</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">PDF - 9.8 MB</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">Diupload: 15 Jan 2023</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 ml-4">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M5 20h14"/>
                                </svg>
                                Download
                            </button>
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor">
                                    <path stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Lihat
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Highlights -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Highlights Keuangan 2024</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border-l-4 border-blue-600">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Belanja Pegawai</h3>
                    <p class="text-3xl font-bold text-blue-600 mb-2">Rp 6.7 M</p>
                    <div class="text-sm text-gray-600">Meningkat 5% dari tahun sebelumnya</div>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg border-l-4 border-green-600">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Belanja Barang</h3>
                    <p class="text-3xl font-bold text-green-600 mb-2">Rp 3.4 M</p>
                    <div class="text-sm text-gray-600">Efisiensi: 12% penghematan</div>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border-l-4 border-purple-600">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Belanja Modal</h3>
                    <p class="text-3xl font-bold text-purple-600 mb-2">Rp 1.1 M</p>
                    <div class="text-sm text-gray-600">Tepat sasaran sesuai perencanaan</div>
                </div>
            </div>
        </div>

        <!-- Catatan Penting -->
        <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
            <div class="flex items-start">
                <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 110 20 10 10 0 010-20z"/>
                </svg>
                <div>
                    <h3 class="font-bold text-blue-900 mb-2">Informasi Penting:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700 text-sm">
                        <li>Laporan keuangan diperbaharui setiap tahun.</li>
                        <li>Data telah melalui proses verifikasi dan audit internal.</li>
                        <li>Silakan download dokumen untuk detail lebih lengkap.</li>
                        <li>Jika kesulitan mengakses laporan, hubungi PPID di ppid@pn-bogor.go.id</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
