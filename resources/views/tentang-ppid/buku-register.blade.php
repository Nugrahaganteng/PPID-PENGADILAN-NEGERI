@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6 text-gray-800">Buku Register</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <table class="min-w-full table-auto border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Tanggal</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">Jenis Permohonan</th>
                    <th class="px-4 py-2 border">Status</th>
                </tr>
            </thead>

            <tbody>
                {{-- Contoh data statis --}}
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">12 Nov 2025</td>
                    <td class="border px-4 py-2">Adi Pratama</td>
                    <td class="border px-4 py-2">Permohonan Informasi</td>
                    <td class="border px-4 py-2">Selesai</td>
                </tr>

                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">13 Nov 2025</td>
                    <td class="border px-4 py-2">Siti Handayani</td>
                    <td class="border px-4 py-2">Keberatan</td>
                    <td class="border px-4 py-2">Proses</td>
                </tr>

                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">14 Nov 2025</td>
                    <td class="border px-4 py-2">Bagus Saputra</td>
                    <td class="border px-4 py-2">Permohonan Dokumen Publik</td>
                    <td class="border px-4 py-2">Ditolak</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection
