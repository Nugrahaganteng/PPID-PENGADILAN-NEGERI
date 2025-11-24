
<x-app-layout>
    <div class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold">Profil Pengadilan Negeri Kota Bogor</h1>
            <p class="mt-2 text-blue-100">Informasi lengkap mengenai Pengadilan Negeri Kota Bogor</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Sidebar -->
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="font-bold text-lg mb-4 text-gray-900">Menu Profil</h3>
                    <ul class="space-y-2">
                        <li><a href="#sejarah" class="text-blue-600 hover:underline">Sejarah</a></li>
                        <li><a href="#visi-misi" class="text-blue-600 hover:underline">Visi & Misi</a></li>
                        <li><a href="#struktur" class="text-blue-600 hover:underline">Struktur Organisasi</a></li>
                        <li><a href="#lokasi" class="text-blue-600 hover:underline">Lokasi</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="md:col-span-2 space-y-8">
                <!-- Sejarah -->
                <div id="sejarah" class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Sejarah Pengadilan Negeri Kota Bogor</h2>
                    <img src="{{ asset('image/pn.png') }}" alt="Gedung PN Bogor" class="w-full rounded-lg mb-4">
                    <div class="prose max-w-none text-gray-700">
                        <p class="mb-4">
                            Pengadilan Negeri Kota Bogor didirikan pada tahun 1950 sebagai salah satu lembaga peradilan tingkat pertama yang berkedudukan di Kota Bogor. 
                            Sejak awal berdirinya, Pengadilan Negeri Bogor telah menjalankan fungsinya sebagai pelaksana kekuasaan kehakiman dalam menegakkan hukum dan keadilan.
                        </p>
                        <p class="mb-4">
                            Wilayah hukum Pengadilan Negeri Bogor meliputi seluruh wilayah Kota Bogor dengan luas wilayah sekitar 118,50 km² yang terdiri dari 6 kecamatan 
                            dan 68 kelurahan dengan jumlah penduduk mencapai lebih dari 1 juta jiwa.
                        </p>
                        <p class="mb-4">
                            Seiring dengan perkembangan zaman, Pengadilan Negeri Bogor terus melakukan pembenahan dan modernisasi dalam sistem peradilan untuk memberikan 
                            pelayanan hukum yang lebih baik kepada masyarakat.
                        </p>
                    </div>
                </div>

                <!-- Visi & Misi -->
                <div id="visi-misi" class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
                    
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-blue-600 mb-3">VISI</h3>
                        <div class="bg-blue-50 border-l-4 border-blue-600 p-4">
                            <p class="text-gray-700 italic">
                                "Terwujudnya Pengadilan Negeri Bogor yang Agung dalam mewujudkan badan peradilan Indonesia yang agung"
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-blue-600 mb-3">MISI</h3>
                        <ol class="space-y-3 list-decimal list-inside text-gray-700">
                            <li>Menjaga kemandirian dan kewibawaan peradilan</li>
                            <li>Memberikan pelayanan hukum yang berkeadilan kepada masyarakat pencari keadilan</li>
                            <li>Meningkatkan kualitas kepemimpinan pengadilan</li>
                            <li>Meningkatkan kredibilitas dan transparansi pengadilan</li>
                            <li>Mewujudkan kepastian hukum dalam penanganan perkara</li>
                        </ol>
                    </div>
                </div>

                <!-- Struktur Organisasi -->
                <div id="struktur" class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Struktur Organisasi</h2>
                    
                    <div class="space-y-4">
                        <div class="border-l-4 border-blue-600 pl-4">
                            <h4 class="font-semibold text-gray-900">Ketua Pengadilan Negeri</h4>
                            <p class="text-gray-600">Dr. H. Ahmad Suryadi, S.H., M.H.</p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-4">
                            <h4 class="font-semibold text-gray-900">Wakil Ketua Pengadilan Negeri</h4>
                            <p class="text-gray-600">Hj. Siti Nurhasanah, S.H., M.H.</p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-4">
                            <h4 class="font-semibold text-gray-900">Hakim Ketua Muda Pidana</h4>
                            <p class="text-gray-600">Bambang Wibowo, S.H., M.H.</p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-4">
                            <h4 class="font-semibold text-gray-900">Hakim Ketua Muda Perdata</h4>
                            <p class="text-gray-600">Drs. H. Rizal Effendi, S.H., M.H.</p>
                        </div>

                        <div class="border-l-4 border-orange-600 pl-4">
                            <h4 class="font-semibold text-gray-900">Panitera/Sekretaris</h4>
                            <p class="text-gray-600">Ir. Hendra Kusuma, S.H., M.H.</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4 mt-6">
                            <div class="bg-gray-50 p-4 rounded">
                                <h5 class="font-semibold text-sm mb-2">Hakim</h5>
                                <p class="text-xs text-gray-600">15 Hakim</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded">
                                <h5 class="font-semibold text-sm mb-2">Panitera Muda</h5>
                                <p class="text-xs text-gray-600">8 Panitera</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded">
                                <h5 class="font-semibold text-sm mb-2">Jurusita</h5>
                                <p class="text-xs text-gray-600">12 Jurusita</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded">
                                <h5 class="font-semibold text-sm mb-2">Staff Administrasi</h5>
                                <p class="text-xs text-gray-600">35 Pegawai</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lokasi -->
                <div id="lokasi" class="bg-white rounded-lg shadow-md p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Lokasi & Kontak</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <span class="text-2xl">📍</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Alamat</h4>
                                <p class="text-gray-600">Jl. Bina Marga No.8, Tanah Sareal, Kota Bogor, Jawa Barat 16161</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <span class="text-2xl">📞</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Telepon</h4>
                                <p class="text-gray-600">(0251) 8324906</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <span class="text-2xl">📠</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Fax</h4>
                                <p class="text-gray-600">(0251) 8328652</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <span class="text-2xl">📧</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600">ppid@pn-bogor.go.id</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <span class="text-2xl">⏰</span>
                            <div>
                                <h4 class="font-semibold text-gray-900">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Jumat: 08.00 - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>