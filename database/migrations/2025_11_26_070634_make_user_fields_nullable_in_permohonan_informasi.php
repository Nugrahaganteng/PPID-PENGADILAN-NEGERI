<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('permohonan_informasi', function (Blueprint $table) {
            $table->string('nama_lengkap')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('no_telp', 20)->nullable()->change();
            $table->text('alamat')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('permohonan_informasi', function (Blueprint $table) {
            $table->string('nama_lengkap')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('no_telp', 20)->nullable(false)->change();
            $table->text('alamat')->nullable(false)->change();
        });
    }
};