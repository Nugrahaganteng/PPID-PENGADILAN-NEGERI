<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('permohonan_informasi', function (Blueprint $table) {
            // Cek dulu apakah kolom sudah ada atau belum
            
            // Kolom alamat (mungkin sudah ada)
            if (!Schema::hasColumn('permohonan_informasi', 'alamat')) {
                $table->text('alamat')->nullable()->after('no_telp');
            }
            
            // Kolom file_tanggapan (BARU)
            if (!Schema::hasColumn('permohonan_informasi', 'file_tanggapan')) {
                $table->string('file_tanggapan')->nullable()->after('file_pendukung');
            }
            
            // Kolom tanggapan_admin (BARU)
            if (!Schema::hasColumn('permohonan_informasi', 'tanggapan_admin')) {
                $table->text('tanggapan_admin')->nullable()->after('file_tanggapan');
            }
            
            // Kolom tanggal_tanggapan (BARU)
            if (!Schema::hasColumn('permohonan_informasi', 'tanggal_tanggapan')) {
                $table->timestamp('tanggal_tanggapan')->nullable()->after('tanggapan_admin');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permohonan_informasi', function (Blueprint $table) {
            $table->dropColumn(['alamat', 'file_tanggapan', 'tanggapan_admin', 'tanggal_tanggapan']);
        });
    }
};