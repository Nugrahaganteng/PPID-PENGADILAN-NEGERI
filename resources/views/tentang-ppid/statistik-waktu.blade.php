{{-- resources/views/tentang-ppid/statistik-waktu.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Statistik Waktu Layanan PPID</h1>
            <p class="text-gray-600">Pengadilan Negeri Kota Bogor - Tahun 2024</p>
        </div>

        <!-- Summary Cards -->
        <div class="grid md:grid-cols-4 gap-6 mb-6">
            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm">Total Permohonan</p>
                        <p class="text-4xl font-bold mt-2">156</p>
                        <p class="text-xs text-blue-100 mt-1">Tahun 2024</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm">Tepat Waktu</p>
                        <p class="text-4xl font-bold mt-2">142</p>
                        <p class="text-xs text-green-100 mt-1">91% dari total</p>
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
                        <p class="text-yellow-100 text-sm">Terlambat</p>
                        <p class="text-4xl font-bold mt-2">14</p>
                        <p class="text-xs text-yellow-100 mt-1">9% dari total</p>
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
                        <p class="text-purple-100 text-sm">Rata-rata Hari</p>
                        <p class="text-4xl font-bold mt-2">7.2</p>
                        <p class="text-xs text-purple-100 mt-1">Hari kerja</p>
                    </div>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                </div>
            </div>
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
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Bulan</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Semua Bulan</option>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
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

        <!-- Statistik Bulanan -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Statistik Bulanan</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Bulan</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Total Permohonan</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Tepat Waktu</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Terlambat</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Rata-rata (Hari)</th>
                            <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Persentase Tepat Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Januari</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">15</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">14</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">1</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 font-semibold">6.8</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center">
                                    <div class="w-24 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 93%"></div>
                                    </div>
                                    <span class="text-gray-700 font-semibold">93%</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Februari</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">18</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">16</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">2</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 font-semibold">7.5</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center">
                                    <div class="w-24 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 89%"></div>
                                    </div>
                                    <span class="text-gray-700 font-semibold">89%</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Maret</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">12</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">11</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">1</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 font-semibold">6.2</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center">
                                    <div class="w-24 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 92%"></div>
                                    </div>
                                    <span class="text-gray-700 font-semibold">92%</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">April</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">20</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">18</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">2</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 font-semibold">7.8</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center">
                                    <div class="w-24 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 90%"></div>
                                    </div>
                                    <span class="text-gray-700 font-semibold">90%</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Mei</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">14</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">13</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">1</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 font-semibold">6.5</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center">
                                    <div class="w-24 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 93%"></div>
                                    </div>
                                    <span class="text-gray-700 font-semibold">93%</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Juni</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">16</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">15</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">1</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900 font-semibold">7.1</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <div class="flex items-center justify-center">
                                    <div class="w-24 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 94%"></div>
                                    </div>
                                    <span class="text-gray-700 font-semibold">94%</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-blue-50 font-bold">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">TOTAL / RATA-RATA</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-gray-900">95</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-green-100 text-green-800">87</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="px-3 py-1 inline-flex text-xs font-semibold rounded-full bg-red-100 text-red-800">8</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-blue-900">7.0</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                                <span class="text-blue-900">91.6%</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Grafik Perbandingan -->
        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Perbandingan Tepat Waktu vs Terlambat</h3>
                <div class="flex items-center justify-center h-64">
                    <div class="relative">
                        <svg class="w-48 h-48" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" fill="none" stroke="#e5e7eb" stroke-width="20"/>
                            <circle cx="50" cy="50" r="40" fill="none" stroke="#10b981" stroke-width="20" 
                                    stroke-dasharray="229.3" stroke-dashoffset="20.6" 
                                    transform="rotate(-90 50 50)"/>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <p class="text-3xl font-bold text-green-600">91%</p>
                                <p class="text-sm text-gray-600">Tepat Waktu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center space-x-6 mt-4">
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-green-500 rounded mr-2"></div>
                        <span class="text-sm text-gray-700">Tepat Waktu (142)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-4 h-4 bg-red-500 rounded mr-2"></div>
                        <span class="text-sm text-gray-700">Terlambat (14)</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Tren Bulanan</h3>
                <div class="h-64 flex items-end justify-around space-x-2">
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-blue-500 rounded-t" style="height: 60%"></div>
                        <span class="text-xs text-gray-600 mt-2">Jan</span>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-blue-500 rounded-t" style="height: 72%"></div>
                        <span class="text-xs text-gray-600 mt-2">Feb</span>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-blue-500 rounded-t" style="height: 48%"></div>
                        <span class="text-xs text-gray-600 mt-2">Mar</span>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-blue-500 rounded-t" style="height: 80%"></div>
                        <span class="text-xs text-gray-600 mt-2">Apr</span>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-blue-500 rounded-t" style="height: 56%"></div>
                        <span class="text-xs text-gray-600 mt-2">Mei</span>
                    </div>
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-blue-500 rounded-t" style="height: 64%"></div>
                        <span class="text-xs text-gray-600 mt-2">Jun</span>
                    </div>
                </div>
                <p class="text-center text-sm text-gray-600 mt-4">Jumlah Permohonan per Bulan</p>
            </div>
        </div>

        <!-- Catatan -->
        <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg">
            <h3 class="font-bold text-blue-900 mb-2">Catatan:</h3>
            <ul class="list-disc list-inside space-y-1 text-gray-700 text-sm">
                <li>Standar waktu penyelesaian permohonan informasi adalah 10 hari kerja</li>
                <li>Perpanjangan waktu maksimal 7 hari kerja dengan alasan tertulis</li>
                <li>Statistik ini diperbaharui setiap bulan</li>
                <li>Data yang ditampilkan adalah data semester pertama tahun 2024</li>
            </ul>
        </div>
    </div>
</div>
@endsection