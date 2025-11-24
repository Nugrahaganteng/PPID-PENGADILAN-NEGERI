{{-- resources/views/profil/visi-misi.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Visi & Misi</h1>
            <p class="text-gray-600">Pengadilan Negeri Kota Bogor</p>
        </div>

        <!-- Visi -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <div class="flex items-center mb-6">
                <div class="bg-blue-600 text-white p-3 rounded-lg mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-blue-900">VISI</h2>
            </div>
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-600 p-6 rounded-r-lg">
                <p class="text-xl text-gray-800 font-semibold leading-relaxed text-center">
                    "Terwujudnya Pengadilan Negeri Kota Bogor yang Agung"
                </p>
            </div>
        </div>

        <!-- Misi -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="flex items-center mb-6">
                <div class="bg-green-600 text-white p-3 rounded-lg mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-green-900">MISI</h2>
            </div>

            <div class="space-y-4">
                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex-shrink-0 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                        1
                    </div>
                    <div class="flex-1 pt-1">
                        <p class="text-gray-800 leading-relaxed">
                            Menjaga kemandirian badan peradilan dengan mengedepankan integritas, profesionalisme, dan transparansi
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex-shrink-0 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                        2
                    </div>
                    <div class="flex-1 pt-1">
                        <p class="text-gray-800 leading-relaxed">
                            Memberikan pelayanan hukum yang berkeadilan kepada pencari keadilan dengan menerapkan prinsip peradilan yang cepat, sederhana, dan biaya ringan
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex-shrink-0 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                        3
                    </div>
                    <div class="flex-1 pt-1">
                        <p class="text-gray-800 leading-relaxed">
                            Meningkatkan kualitas kepemimpinan badan peradilan dalam rangka mewujudkan visi dan melaksanakan reformasi birokrasi
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex-shrink-0 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                        4
                    </div>
                    <div class="flex-1 pt-1">
                        <p class="text-gray-800 leading-relaxed">
                            Meningkatkan kredibilitas dan transparansi badan peradilan melalui pengawasan yang efektif dan efisien serta sistem merit
                        </p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 bg-gray-50 p-4 rounded-lg hover:bg-gray-100 transition">
                    <div class="flex-shrink-0 bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">
                        5
                    </div>
                    <div class="flex-1 pt-1">
                        <p class="text-gray-800 leading-relaxed">
                            Meningkatkan kepatuhan terhadap putusan pengadilan dan akses peradilan bagi masyarakat miskin dan terpinggirkan melalui pemberdayaan fungsi pelayanan hukum
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nilai-nilai -->
        <div class="bg-white rounded-lg shadow-md p-8 mt-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Nilai-Nilai</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg text-center">
                    <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Integritas</h3>
                    <p class="text-gray-600 text-sm">Bersikap jujur, konsisten, dan dapat dipercaya</p>
                </div>

                <div class="bg-green-50 p-6 rounded-lg text-center">
                    <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Profesionalisme</h3>
                    <p class="text-gray-600 text-sm">Bekerja dengan kompeten dan bertanggung jawab</p>
                </div>

                <div class="bg-yellow-50 p-6 rounded-lg text-center">
                    <div class="bg-yellow-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pelayanan</h3>
                    <p class="text-gray-600 text-sm">Memberikan layanan prima kepada masyarakat</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection