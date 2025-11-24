{{-- resources/views/informasi-berkala/laporan-kinerja.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Laporan Kinerja</h1>
            <p class="text-gray-600">Pengadilan Negeri Kota Bogor</p>
        </div>

        <!-- Filter -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="grid md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option>2024</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Laporan</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option>Semua Jenis</option>
                        <option>Laporan Kinerja Tahunan</option>
                        <option>Laporan Kinerja Triwulan</option>
                        <option>Laporan Kinerja Bulanan</option>
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
                        <p class="text-blue-100 text-sm">Perkara Masuk</p>
                        <p class="text-4xl font-bold mt-2">2,456</p>
                        <p class="text-xs text-blue-100 mt-1">Tahun 2024</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm">Perkara Selesai</p>
                        <p class="text-4xl font-bold mt-2">2,198</p>
                        <p class="text-xs text-green-100 mt-1">89.5% dari total</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-yellow-100 text-sm">Sisa Perkara</p>
                        <p class="text-4xl font-bold mt-2">258</p>
                        <p class="text-xs text-yellow-100 mt-1">10.5% dari total</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm">Tingkat Penyelesaian</p>
                        <p class="text-4xl font-bold mt-2">89.5%</p>
                        <p class="text-xs text-purple-100 mt-1">Target: 85%</p>
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
                <h2 class="text-2xl font-bold text-gray-900">Laporan Kinerja Tahunan</h2>
                <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">Tahun 2024</span>
            </div>

            <div class="space-y-4">
                <!-- Example Item -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4 flex-1">
                            <div class="bg-blue-100 p-3 rounded-lg">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7V3h5.586L18 9v12z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Kinerja Tahun 2024</h3>
                                <p class="text-sm text-gray-600 mb-3">Laporan kinerja Pengadilan Negeri Kota Bogor tahun 2024, berisi capaian, evaluasi, dan indikator kinerja.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Terverifikasi</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">85 halaman</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">PDF - 8.5 MB</span>
                                    <span class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-xs">Diupload: 15 Jan 2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 ml-4">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7V5h5.586L18 11"/>
                                </svg>
                                Download
                            </button>
                            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Lihat
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Kamu bisa duplikat item ini untuk 2023, 2022, dll -->
            </div>
        </div>

        <!-- Highlights Kinerja -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Highlights Kinerja 2024</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border-l-4 border-blue-600">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Perkara Pidana</h3>
                    <p class="text-3xl font-bold text-blue-600 mb-2">1,245</p>
                    <p class="text-sm text-gray-600">Kenaikan 12% dibanding 2023</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg border-l-4 border-green-600">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Perkara Perdata</h3>
                    <p class="text-3xl font-bold text-green-600 mb-2">1,211</p>
                    <p class="text-sm text-gray-600">Kenaikan 8% dibanding 2023</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border-l-4 border-purple-600">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Tingkat Kepatuhan</h3>
                    <p class="text-3xl font-bold text-purple-600 mb-2">92%</p>
                    <p class="text-sm text-gray-600">Melebihi target 90%</p>
                </div>
            </div>
        </div>

        <!-- Catatan -->
        <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
            <div class="flex items-start">
                <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <h3 class="font-bold text-blue-900 mb-2">Informasi Penting:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700 text-sm">
                        <li>Laporan kinerja diperbarui setiap tahun</li>
                        <li>Seluruh data telah diverifikasi dan tervalidasi</li>
                        <li>Untuk detail lebih lengkap, silakan download laporan</li>
                        <li>Jika mengalami kendala, hubungi PPID di ppid@pn-bogor.go.id</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
