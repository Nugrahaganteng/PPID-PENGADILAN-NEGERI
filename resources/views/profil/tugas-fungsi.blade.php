{{-- resources/views/profil/tugas-fungsi.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Tugas dan Fungsi</h1>
            <p class="text-gray-600">PPID Pengadilan Negeri Kota Bogor</p>
        </div>

        <!-- Tugas Pokok -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <div class="flex items-center mb-6">
                <div class="bg-blue-600 text-white p-3 rounded-lg mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-900">TUGAS POKOK</h2>
            </div>
            
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-600 p-6 rounded-r-lg mb-6">
                <p class="text-lg text-gray-800 leading-relaxed">
                    Pejabat Pengelola Informasi dan Dokumentasi (PPID) bertanggung jawab dalam penyimpanan, 
                    pendokumentasian, penyediaan, dan/atau pelayanan informasi di lingkungan Pengadilan Negeri Kota Bogor.
                </p>
            </div>

            <div class="space-y-3">
                <div class="flex items-start space-x-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-700">Mengelola dan menyediakan informasi publik yang wajib tersedia setiap saat</p>
                </div>
                <div class="flex items-start space-x-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-700">Menerima dan memproses permohonan informasi publik</p>
                </div>
                <div class="flex items-start space-x-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-700">Mengkoordinasikan pemberian pelayanan informasi publik</p>
                </div>
                <div class="flex items-start space-x-3">
                    <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-gray-700">Melakukan pengujian tentang konsekuensi atas informasi yang dikecualikan</p>
                </div>
            </div>
        </div>

        <!-- Fungsi -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="flex items-center mb-6">
                <div class="bg-green-600 text-white p-3 rounded-lg mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-green-900">FUNGSI PPID</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Fungsi 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg border-l-4 border-blue-600">
                    <div class="flex items-center mb-3">
                        <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            1
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Pengelolaan Informasi</h3>
                    </div>
                    <p class="text-gray-700 text-sm">
                        Mengelola, mengumpulkan, dan memelihara informasi publik yang berada di bawah penguasaan 
                        Pengadilan Negeri secara sistematis dan teratur.
                    </p>
                </div>

                <!-- Fungsi 2 -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg border-l-4 border-green-600">
                    <div class="flex items-center mb-3">
                        <div class="bg-green-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            2
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Dokumentasi</h3>
                    </div>
                    <p class="text-gray-700 text-sm">
                        Melakukan pendokumentasian seluruh informasi publik yang berada di bawah penguasaan 
                        instansi dengan sistem yang memudahkan pencarian.
                    </p>
                </div>

                <!-- Fungsi 3 -->
                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-6 rounded-lg border-l-4 border-yellow-600">
                    <div class="flex items-center mb-3">
                        <div class="bg-yellow-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            3
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Penyediaan Informasi</h3>
                    </div>
                    <p class="text-gray-700 text-sm">
                        Menyediakan informasi publik yang dapat diakses oleh masyarakat baik secara langsung 
                        maupun melalui media elektronik.
                    </p>
                </div>

                <!-- Fungsi 4 -->
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg border-l-4 border-purple-600">
                    <div class="flex items-center mb-3">
                        <div class="bg-purple-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            4
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Pelayanan Informasi</h3>
                    </div>
                    <p class="text-gray-700 text-sm">
                        Memberikan pelayanan informasi kepada pemohon informasi sesuai dengan peraturan 
                        perundang-undangan yang berlaku.
                    </p>
                </div>

                <!-- Fungsi 5 -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-lg border-l-4 border-red-600">
                    <div class="flex items-center mb-3">
                        <div class="bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            5
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Pengujian Informasi</h3>
                    </div>
                    <p class="text-gray-700 text-sm">
                        Melakukan pengujian terhadap konsekuensi yang timbul dari pemberian informasi yang dikecualikan 
                        berdasarkan ketentuan peraturan perundang-undangan.
                    </p>
                </div>

                <!-- Fungsi 6 -->
                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-lg border-l-4 border-indigo-600">
                    <div class="flex items-center mb-3">
                        <div class="bg-indigo-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            6
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Koordinasi</h3>
                    </div>
                    <p class="text-gray-700 text-sm">
                        Melakukan koordinasi dengan unit kerja terkait dalam rangka pelayanan informasi publik 
                        yang optimal dan terintegrasi.
                    </p>
                </div>
            </div>
        </div>

        <!-- Kewenangan -->
        <div class="bg-white rounded-lg shadow-md p-8 mt-6">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Kewenangan PPID</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full p-2 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 pt-1">Menolak memberikan informasi yang dikecualikan sesuai dengan ketentuan peraturan perundang-undangan</p>
                </div>
                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full p-2 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 pt-1">Meminta informasi dari unit kerja terkait untuk memenuhi permohonan informasi publik</p>
                </div>
                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg">
                    <div class="bg-blue-600 text-white rounded-full p-2 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 pt-1">Mengkoordinasikan pemberian pelayanan informasi dengan unit kerja terkait</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection