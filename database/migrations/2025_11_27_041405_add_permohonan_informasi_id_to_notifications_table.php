<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Drop foreign key jika sudah ada
        try {
            DB::statement('ALTER TABLE notifications DROP FOREIGN KEY notifications_permohonan_informasi_id_foreign');
        } catch (\Exception $e) {
            // Foreign key belum ada, lanjutkan
        }
        
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('permohonan_informasi_id')
                ->references('id')
                ->on('permohonan_informasi')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['permohonan_informasi_id']);
        });
    }
};