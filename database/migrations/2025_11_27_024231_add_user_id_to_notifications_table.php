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
        // Cek apakah tabel notifications sudah ada
        if (!Schema::hasTable('notifications')) {
            // Jika belum ada, buat tabel baru
            Schema::create('notifications', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('permohonan_id')->nullable()->constrained('permohonan_informasi')->onDelete('cascade');
                $table->enum('type', ['email', 'sms', 'whatsapp', 'system'])->default('email');
                $table->enum('status', ['sent', 'failed', 'pending'])->default('pending');
                $table->text('message')->nullable();
                $table->text('response')->nullable();
                $table->timestamp('sent_at')->nullable();
                $table->timestamps();
                
                $table->index('user_id');
                $table->index('permohonan_id');
                $table->index('status');
            });
        } else {
            // Jika sudah ada, tambahkan kolom user_id jika belum ada
            if (!Schema::hasColumn('notifications', 'user_id')) {
                Schema::table('notifications', function (Blueprint $table) {
                    $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->after('id');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('notifications', function (Blueprint $table) {
        // Drop foreign key dulu sebelum drop column
        $table->dropForeign(['permohonan_id']);
        $table->dropForeign(['user_id']); // jika ada
        $table->dropColumn('permohonan_id');
        $table->dropColumn('user_id'); // jika ada
    });
}
};