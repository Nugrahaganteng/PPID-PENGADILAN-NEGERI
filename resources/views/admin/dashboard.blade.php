@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Dashboard Admin</h1>
            <p class="text-gray-600">Selamat datang kembali! Berikut ringkasan permohonan hari ini.</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6 mb-8">
            <!-- Total Permohonan -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-gray-400">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm font-medium mb-1">Total Permohonan</p>
                        <p class="text-3xl font-bold text-gray-800">{{ $stats['total_permohonan'] }}</p>
                    </div>
                    <div class="bg-gray-100 rounded-full p-3">
                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Pending -->
            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-yellow-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-yellow-700 text-sm font-medium mb-1">Pending</p>
                        <p class="text-3xl font-bold text-yellow-800">{{ $stats['pending'] }}</p>
                    </div>
                    <div class="bg-yellow-200 rounded-full p-3">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Diproses -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-blue-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-700 text-sm font-medium mb-1">Diproses</p>
                        <p class="text-3xl font-bold text-blue-800">{{ $stats['proses'] }}</p>
                    </div>
                    <div class="bg-blue-200 rounded-full p-3">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Selesai -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-green-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-700 text-sm font-medium mb-1">Selesai</p>
                        <p class="text-3xl font-bold text-green-800">{{ $stats['selesai'] }}</p>
                    </div>
                    <div class="bg-green-200 rounded-full p-3">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Ditolak -->
            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-red-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-red-700 text-sm font-medium mb-1">Ditolak</p>
                        <p class="text-3xl font-bold text-red-800">{{ $stats['ditolak'] }}</p>
                    </div>
                    <div class="bg-red-200 rounded-full p-3">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Users -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 border-l-4 border-purple-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-700 text-sm font-medium mb-1">Total Users</p>
                        <p class="text-3xl font-bold text-purple-800">{{ $stats['total_users'] }}</p>
                    </div>
                    <div class="bg-purple-200 rounded-full p-3">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Submissions Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Table Header -->
            <div class="px-6 py-5 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-white">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Permohonan Terbaru</h2>
                        <p class="text-sm text-gray-600 mt-1">Daftar permohonan yang baru masuk</p>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('admin.permohonan.index') }}" 
                           class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 font-medium shadow-sm hover:shadow-md">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            Proses Permohonan
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Table Content -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pemohon</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Subjek</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($permohonan_terbaru as $item)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-sm font-medium text-gray-900">
                                        {{ $item->created_at->format('d M Y') }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-semibold">
                                        {{ strtoupper(substr($item->user->name, 0, 1)) }}
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">{{ $item->user->name }}</p>
                                        <p class="text-xs text-gray-500">{{ $item->user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 font-medium">{{ Str::limit($item->subjek, 50) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $item->status_badge }}">
                                    {{ $item->status_text }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <a href="{{ route('admin.permohonan.show', $item->id) }}" 
                                   class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 font-medium shadow-sm hover:shadow-md">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Detail
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <p class="text-gray-500 text-lg font-medium">Belum ada permohonan</p>
                                    <p class="text-gray-400 text-sm mt-1">Permohonan baru akan muncul di sini</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection