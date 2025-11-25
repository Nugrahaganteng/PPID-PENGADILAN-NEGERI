<?php
// database/seeders/AdminSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin1',
            'email' => 'admin@gmail.com', // atau 'admin@gmail.com'
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'email_verified_at' => now(), // ← TAMBAHKAN INI
        ]);
    }
}