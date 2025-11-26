<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanInformasi extends Model
{
    use HasFactory;

    protected $table = 'permohonan_informasi';

    protected $fillable = [
        'user_id',
        'nama_lengkap',      // ✅ TAMBAHKAN
        'email',             // ✅ TAMBAHKAN
        'no_telp',           // ✅ TAMBAHKAN
        'alamat',            // ✅ TAMBAHKAN
        'subjek',
        'isi_permohonan',
        'file_pendukung',
        'status',
        'tanggapan',
        'file_tanggapan',
        'tanggal_tanggapan'  // ✅ TAMBAHKAN
    ];

    protected $casts = [
        'tanggal_tanggapan' => 'datetime', // ✅ TAMBAHKAN
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ✅ UPDATE Accessor untuk status badge
    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => 'bg-yellow-100 text-yellow-800',  // ✅ UBAH
            'proses' => 'bg-blue-100 text-blue-800',       // ✅ UBAH
            'selesai' => 'bg-green-100 text-green-800',
            'ditolak' => 'bg-red-100 text-red-800',
            default => 'bg-gray-100 text-gray-800'
        };
    }

    // ✅ UPDATE Accessor untuk status text
    public function getStatusTextAttribute()
    {
        return match($this->status) {
            'pending' => 'Menunggu',   // ✅ UBAH
            'proses' => 'Diproses',    // ✅ UBAH
            'selesai' => 'Selesai',
            'ditolak' => 'Ditolak',
            default => 'Unknown'
        };
    }
}