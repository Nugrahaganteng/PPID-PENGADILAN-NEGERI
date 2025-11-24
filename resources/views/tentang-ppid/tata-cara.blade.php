{{-- resources/views/tentang-ppid/tata-cara.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Tata Cara Permohonan Informasi Publik</h1>
            <p class="text-gray-600">Panduan Lengkap Mengajukan Permohonan Informasi</p>
        </div>

        <!-- Intro -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg shadow-lg p-8 mb-6 text-white">
            <div class="flex items-start space-x-4">
                <div class="bg-white bg-opacity-20 p-4 rounded-lg flex-shrink-0">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-2">Informasi Penting</h2>
                    <p class="leading-relaxed">
                        Setiap orang berhak memperoleh informasi publik sesuai dengan ketentuan Undang-Undang Nomor 14 Tahun 2008. 
                        Permohonan dapat diajukan secara langsung, tertulis, atau melalui media elektronik.
                    </p>
                </div>
            </div>
        </div>

        <!-- Langkah-langkah -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Langkah-Langkah Permohonan</h2>
            
            <div class="space-y-6">
                <!-- Step 1 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                            1
                        </div>
                    </div>
                    <div class="flex-1 bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Persiapan Dokumen</h3>
                        <p class="text-gray-700 mb-3">Siapkan dokumen yang diperlukan untuk mengajukan permohonan:</p>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Fotokopi KTP/identitas diri yang masih berlaku</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Formulir permohonan informasi yang telah diisi lengkap</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Surat kuasa (jika dikuasakan)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                            2
                        </div>
                    </div>
                    <div class="flex-1 bg-green-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Pengisian Formulir</h3>
                        <p class="text-gray-700 mb-3">Isi formulir permohonan informasi dengan lengkap dan jelas:</p>
                        <div class="bg-white p-4 rounded-lg border border-green-200">
                            <div class="grid md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <p class="font-semibold text-gray-900">Data Pemohon:</p>
                                    <ul class="list-disc list-inside text-gray-700 mt-1 space-y-1">
                                        <li>Nama lengkap</li>
                                        <li>Alamat lengkap</li>
                                        <li>Nomor telepon/email</li>
                                        <li>Pekerjaan</li>
                                    </ul>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Data Permohonan:</p>
                                    <ul class="list-disc list-inside text-gray-700 mt-1 space-y-1">
                                        <li>Rincian informasi yang diminta</li>
                                        <li>Tujuan penggunaan informasi</li>
                                        <li>Cara penyampaian informasi</li>
                                        <li>Format informasi yang diinginkan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-yellow-600 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                            3
                        </div>
                    </div>
                    <div class="flex-1 bg-yellow-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Penyampaian Permohonan</h3>
                        <p class="text-gray-700 mb-3">Pilih salah satu cara penyampaian permohonan:</p>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="bg-white p-4 rounded-lg border border-yellow-200">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-yellow-600 text-white p-3 rounded-full mb-3">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2">Langsung</h4>
                                    <p class="text-sm text-gray-700">Datang ke Loket PPID Pengadilan Negeri Kota Bogor</p>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-yellow-200">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-yellow-600 text-white p-3 rounded-full mb-3">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2">Email</h4>
                                    <p class="text-sm text-gray-700">Kirim ke ppid@pn-bogor.go.id</p>
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-yellow-200">
                                <div class="flex flex-col items-center text-center">
                                    <div class="bg-yellow-600 text-white p-3 rounded-full mb-3">
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"/>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-gray-900 mb-2">Pos</h4>
                                    <p class="text-sm text-gray-700">Kirim via pos ke alamat kantor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                            4
                        </div>
                    </div>
                    <div class="flex-1 bg-purple-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Penerimaan Tanda Bukti</h3>
                        <p class="text-gray-700 mb-3">Setelah permohonan diterima, Anda akan mendapatkan:</p>
                        <div class="bg-white p-4 rounded-lg border border-purple-200">
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-700">Tanda bukti penerimaan permohonan dengan nomor register</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-700">Informasi estimasi waktu penyelesaian</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-purple-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-700">Kontak petugas yang dapat dihubungi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                            5
                        </div>
                    </div>
                    <div class="flex-1 bg-red-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Proses Verifikasi</h3>
                        <p class="text-gray-700 mb-3">PPID akan memproses permohonan Anda dengan tahapan:</p>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 bg-white p-3 rounded-lg border border-red-200">
                                <div class="bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">1</div>
                                <p class="text-gray-700">Verifikasi kelengkapan dokumen</p>
                            </div>
                            <div class="flex items-center space-x-3 bg-white p-3 rounded-lg border border-red-200">
                                <div class="bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">2</div>
                                <p class="text-gray-700">Penelitian informasi yang diminta</p>
                            </div>
                            <div class="flex items-center space-x-3 bg-white p-3 rounded-lg border border-red-200">
                                <div class="bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">3</div>
                                <p class="text-gray-700">Pengujian konsekuensi (jika diperlukan)</p>
                            </div>
                            <div class="flex items-center space-x-3 bg-white p-3 rounded-lg border border-red-200">
                                <div class="bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center font-bold text-sm flex-shrink-0">4</div>
                                <p class="text-gray-700">Persetujuan dan penandatanganan</p>
                            </div>
                        </div>
                        <div class="mt-4 bg-white p-3 rounded-lg border-2 border-red-600">
                            <p class="text-sm text-gray-700"><strong class="text-red-600">Waktu Proses:</strong> Maksimal 10 hari kerja (dapat diperpanjang 7 hari kerja)</p>
                        </div>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-indigo-600 text-white rounded-full flex items-center justify-center font-bold text-2xl shadow-lg">
                            6
                        </div>
                    </div>
                    <div class="flex-1 bg-indigo-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Penerimaan Informasi</h3>
                        <p class="text-gray-700 mb-3">Anda akan diberitahu tentang hasil permohonan dan dapat menerima informasi melalui:</p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-lg border border-indigo-200">
                                <h4 class="font-bold text-gray-900 mb-2">Jika Disetujui:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Penyerahan langsung di loket PPID</li>
                                    <li>• Pengiriman via email</li>
                                    <li>• Pengiriman via pos</li>
                                    <li>• Download dari website</li>
                                </ul>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-indigo-200">
                                <h4 class="font-bold text-gray-900 mb-2">Jika Ditolak:</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Surat pemberitahuan penolakan</li>
                                    <li>• Alasan penolakan secara tertulis</li>
                                    <li>• Informasi cara mengajukan keberatan</li>
                                    <li>• Batas waktu pengajuan keberatan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Timeline Proses Permohonan</h2>
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-1 bg-blue-200"></div>
                <div class="space-y-8">
                    <div class="relative flex items-center">
                        <div class="absolute left-8 w-4 h-4 bg-blue-600 rounded-full transform -translate-x-1.5"></div>
                        <div class="ml-20 flex-1 bg-blue-50 p-4 rounded-lg">
                            <p class="font-bold text-gray-900">Hari ke-0: Permohonan diterima</p>
                            <p class="text-sm text-gray-600">Pemohon menyerahkan formulir dan dokumen</p>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="absolute left-8 w-4 h-4 bg-blue-600 rounded-full transform -translate-x-1.5"></div>
                        <div class="ml-20 flex-1 bg-blue-50 p-4 rounded-lg">
                            <p class="font-bold text-gray-900">Hari ke-1 s/d 3: Verifikasi</p>
                            <p class="text-sm text-gray-600">PPID melakukan verifikasi dan penelitian</p>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="absolute left-8 w-4 h-4 bg-blue-600 rounded-full transform -translate-x-1.5"></div>
                        <div class="ml-20 flex-1 bg-blue-50 p-4 rounded-lg">
                            <p class="font-bold text-gray-900">Hari ke-4 s/d 8: Pengolahan</p>
                            <p class="text-sm text-gray-600">Penyiapan dan penggandaan informasi</p>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="absolute left-8 w-4 h-4 bg-blue-600 rounded-full transform -translate-x-1.5"></div>
                        <div class="ml-20 flex-1 bg-blue-50 p-4 rounded-lg">
                            <p class="font-bold text-gray-900">Hari ke-9 s/d 10: Penyerahan</p>
                            <p class="text-sm text-gray-600">Informasi diserahkan kepada pemohon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download & Contact -->
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-8 text-white">
                <div class="flex items-center mb-4">
                    <svg class="w-12 h-12 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <div>
                        <h3 class="text-xl font-bold">Download Formulir</h3>
                        <p class="text-sm text-green-100">Formulir Permohonan Informasi Publik</p>
                    </div>
                </div>
                <button class="w-full bg-white text-green-600 px-6 py-3 rounded-lg font-bold hover:bg-green-50 transition">
                    Download Formulir PDF
                </button>
            </div>

            <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-8 text-white">
                <div class="flex items-center mb-4">
                    <svg class="w-12 h-12 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <div>
                        <h3 class="text-xl font-bold">Butuh Bantuan?</h3>
                        <p class="text-sm text-blue-100">Hubungi Petugas PPID</p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <p>📧 ppid@pn-bogor.go.id</p>
                    <p>📞 (0251) 8324906</p>
                    <p>🕐 Senin - Jumat, 08:00 - 16:00 WIB</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection