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
        'nama_lengkap',
        'email',
        'no_telp',
        'alamat',
        'subjek',
        'isi_permohonan',
        'file_pendukung',
        'status',
        'tanggapan',
        'file_tanggapan',
        'tanggal_tanggapan',
        
        // Field lama (bisa dihapus kalau tidak dipakai)
        'nama_pemohon',
        'no_telepon',
        'jenis_informasi',
        'detail_informasi',
        'tujuan_penggunaan',
    ];

    protected $casts = [
        'tanggal_tanggapan' => 'datetime',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class, 'permohonan_informasi_id');
    }

    // ========== TAMBAHKAN INI ==========
    
    // Accessor untuk menampilkan teks status
    public function getStatusTextAttribute()
    {
        return match($this->status) {
            'pending' => 'Menunggu',
            'diproses' => 'Diproses',
            'selesai' => 'Selesai',
            'ditolak' => 'Ditolak',
            default => 'Tidak Diketahui'
        };
    }

    // Accessor untuk badge warna status
    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => 'bg-yellow-100 text-yellow-800',
            'diproses' => 'bg-blue-100 text-blue-800',
            'selesai' => 'bg-green-100 text-green-800',
            'ditolak' => 'bg-red-100 text-red-800',
            default => 'bg-gray-100 text-gray-800'
        };
    }
}