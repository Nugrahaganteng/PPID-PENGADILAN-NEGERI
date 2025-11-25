<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">🏛️ Dashboard Admin PPID</h1>
            <p class="text-gray-600 mt-1">Selamat datang, {{ auth()->user()->name }}!</p>
        </div>

        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
            <!-- Total Permohonan -->
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm font-medium">Total Permohonan</p>
                        <p class="text-3xl font-bold mt-2">{{ $totalPermohonan }}</p>
                    </div>
                    <div class="text-5xl opacity-50">📊</div>
                </div>
            </div>

            <!-- Pending -->
            <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-yellow-100 text-sm font-medium">Menunggu</p>
                        <p class="text-3xl font-bold mt-2">{{ $pending }}</p>
                    </div>
                    <div class="text-5xl opacity-50">⏳</div>
                </div>
                <a href="{{ route('admin.permohonan.index', ['status' => 'pending']) }}" 
                   class="mt-3 text-xs text-yellow-100 hover:text-white inline-block">
                    Lihat Detail →
                </a>
            </div>

            <!-- Diproses -->
            <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm font-medium">Sedang Diproses</p>
                        <p class="text-3xl font-bold mt-2">{{ $diproses }}</p>
                    </div>
                    <div class="text-5xl opacity-50">🔄</div>
                </div>
                <a href="{{ route('admin.permohonan.index', ['status' => 'diproses']) }}" 
                   class="mt-3 text-xs text-blue-100 hover:text-white inline-block">
                    Lihat Detail →
                </a>
            </div>

            <!-- Selesai -->
            <div class="bg-gradient-to-br from-green-400 to-green-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm font-medium">Selesai</p>
                        <p class="text-3xl font-bold mt-2">{{ $selesai }}</p>
                    </div>
                    <div class="text-5xl opacity-50">✅</div>
                </div>
                <a href="{{ route('admin.permohonan.index', ['status' => 'selesai']) }}" 
                   class="mt-3 text-xs text-green-100 hover:text-white inline-block">
                    Lihat Detail →
                </a>
            </div>

            <!-- Ditolak -->
            <div class="bg-gradient-to-br from-red-400 to-red-600 rounded-lg shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-red-100 text-sm font-medium">Ditolak</p>
                        <p class="text-3xl font-bold mt-2">{{ $ditolak }}</p>
                    </div>
                    <div class="text-5xl opacity-50">❌</div>
                </div>
                <a href="{{ route('admin.permohonan.index', ['status' => 'ditolak']) }}" 
                   class="mt-3 text-xs text-red-100 hover:text-white inline-block">
                    Lihat Detail →
                </a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <a href="{{ route('admin.permohonan.index') }}" 
               class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="text-4xl mr-4">📋</div>
                    <div>
                        <h3 class="font-bold text-gray-900">Semua Permohonan</h3>
                        <p class="text-sm text-gray-600">Kelola semua permohonan informasi</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.permohonan.index', ['status' => 'pending']) }}" 
               class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="text-4xl mr-4">⚡</div>
                    <div>
                        <h3 class="font-bold text-gray-900">Permohonan Baru</h3>
                        <p class="text-sm text-gray-600">Tangani permohonan yang menunggu</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('admin.permohonan.index', ['status' => 'diproses']) }}" 
               class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="text-4xl mr-4">🔧</div>
                    <div>
                        <h3 class="font-bold text-gray-900">Dalam Proses</h3>
                        <p class="text-sm text-gray-600">Lanjutkan permohonan yang sedang diproses</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Permohonan Terbaru -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-900">📬 Permohonan Terbaru</h2>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pemohon</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subjek</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($permohonanTerbaru as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $item->created_at->format('d M Y, H:i') }}
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <div class="font-medium text-gray-900">{{ $item->nama_lengkap }}</div>
                                <div class="text-gray-500 text-xs">{{ $item->email }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                {{ Str::limit($item->subjek, 40) }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $item->status_badge }}">
                                    {{ $item->status_text }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <a href="{{ route('admin.permohonan.show', $item->id) }}" 
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Detail →
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                <div class="text-4xl mb-2">📭</div>
                                <p>Belum ada permohonan</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($permohonanTerbaru->count() > 0)
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 text-center">
                <a href="{{ route('admin.permohonan.index') }}" 
                   class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                    Lihat Semua Permohonan →
                </a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>