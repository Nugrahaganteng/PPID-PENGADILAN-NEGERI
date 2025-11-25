<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

     public function getIsAdminAttribute()
    {
        // Sesuaikan dengan sistem role Anda
        // Contoh sederhana:
        return $this->role === 'admin' || $this->email === 'admin@ppid.go.id';
        
        // Atau jika menggunakan kolom boolean:
        // return $this->attributes['is_admin'] ?? false;
    }

    /**
     * Relasi ke permohonan informasi
     */
    public function permohonanInformasi()
    {
        return $this->hasMany(PermohonanInformasi::class);
    }

    public function isTamu(): bool
    {
        return $this->role === 'tamu';
    }
}
