<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'permohonan_informasi_id',  // ✅ FIXED: ganti dari permohonan_id
        'type',
        'status',
        'message',
        'response',
        'sent_at',
    ];

    protected $casts = [
        'sent_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Permohonan Informasi
     */
    public function permohonanInformasi(): BelongsTo
    {
        return $this->belongsTo(PermohonanInformasi::class, 'permohonan_informasi_id');  // ✅ FIXED
    }

    /**
     * Alias untuk backward compatibility (opsional)
     */
    public function permohonan(): BelongsTo
    {
        return $this->permohonanInformasi();
    }
}