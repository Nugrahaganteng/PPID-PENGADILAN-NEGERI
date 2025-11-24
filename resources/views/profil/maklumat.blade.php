{{-- resources/views/profil/maklumat.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Maklumat Pelayanan</h1>
            <p class="text-gray-600">Pengadilan Negeri Kota Bogor</p>
        </div>

        <!-- Content -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="prose max-w-none">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">MAKLUMAT PELAYANAN INFORMASI PUBLIK</h2>
                
                <div class="bg-blue-50 border-l-4 border-blue-600 p-6 mb-6">
                    <p class="text-lg text-gray-800 leading-relaxed">
                        Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan informasi publik 
                        sesuai dengan standar pelayanan yang telah ditetapkan dan apabila tidak menepati 
                        janji ini, kami siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku.
                    </p>
                </div>

                <div class="space-y-4 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900">Kami Berkomitmen:</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Memberikan pelayanan informasi publik yang berkualitas</li>
                        <li>Menyediakan informasi yang akurat, benar, dan tidak menyesatkan</li>
                        <li>Melayani permohonan informasi sesuai waktu yang telah ditentukan</li>
                        <li>Memberikan kemudahan dalam memperoleh informasi publik</li>
                        <li>Menjaga kerahasiaan informasi yang dikecualikan</li>
                        <li>Meningkatkan kualitas pelayanan secara berkelanjutan</li>
                    </ul>
                </div>

                <div class="bg-gray-50 rounded-lg p-6 mb-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Standar Pelayanan:</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Waktu Penyelesaian</p>
                                <p class="text-sm text-gray-600">Maksimal 10 hari kerja</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Biaya</p>
                                <p class="text-sm text-gray-600">Sesuai peraturan yang berlaku</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Transparansi</p>
                                <p class="text-sm text-gray-600">Informasi terbuka untuk publik</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">Akuntabilitas</p>
                                <p class="text-sm text-gray-600">Dapat dipertanggungjawabkan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t pt-6">
                    <p class="text-sm text-gray-600 text-center">
                        Bogor, {{ date('d F Y') }}<br>
                        <span class="font-semibold">Pejabat Pengelola Informasi dan Dokumentasi (PPID)</span><br>
                        Pengadilan Negeri Kota Bogor
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection