<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permohonan_informasi_id')->constrained('permohonan_informasi')->onDelete('cascade');
            $table->enum('type', ['email', 'whatsapp']); // Tipe notifikasi
            $table->enum('status', ['success', 'failed'])->default('success'); // Status pengiriman
            $table->text('message')->nullable(); // Pesan notifikasi
            $table->timestamp('sent_at')->nullable(); // Waktu pengiriman
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};