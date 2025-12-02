<?php

namespace App\Services;

use App\Models\Notification;
use App\Models\PermohonanInformasi;
use App\Models\User;
use App\Notifications\PermohonanDitanggapiNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Exception;

class NotificationService
{
    /**
     * Kirim notifikasi berdasarkan tipe (email, whatsapp, atau both)
     * Method utama yang dipanggil dari controller
     */
    public function sendNotification(PermohonanInformasi $permohonan, $notificationType)
    {
        $results = [];
        $user = $permohonan->user;

        if (!$user) {
            Log::error("User tidak ditemukan untuk permohonan ID: {$permohonan->id}");
            return [
                'email' => ['success' => false, 'message' => 'User tidak ditemukan'],
                'whatsapp' => ['success' => false, 'message' => 'User tidak ditemukan']
            ];
        }

        // Kirim berdasarkan tipe
        if ($notificationType === 'email' || $notificationType === 'both') {
            $emailResult = $this->sendEmailNotification($user, $permohonan);
            
            $results['email'] = [
                'success' => $emailResult['success'],
                'message' => $emailResult['message']
            ];
        }

        if ($notificationType === 'whatsapp' || $notificationType === 'both') {
            $waResult = $this->sendWhatsAppNotification($user, $permohonan);
            
            $results['whatsapp'] = [
                'success' => $waResult['success'],
                'message' => $waResult['message']
            ];
        }

        return $results;
    }

    /**
     * Kirim notifikasi email menggunakan Laravel Notification
     */
    private function sendEmailNotification(User $user, PermohonanInformasi $permohonan)
    {
        try {
            // Simpan notifikasi dengan status pending
            $notification = Notification::create([
                'user_id' => $user->id,
                'permohonan_informasi_id' => $permohonan->id, // ✅ FIXED
                'type' => 'email',
                'status' => 'pending',
                'message' => $this->createNotificationMessage($permohonan),
                'sent_at' => null,
            ]);

            try {
                // Kirim email menggunakan Laravel Notification
                $user->notify(new PermohonanDitanggapiNotification($permohonan));

                // Update status menjadi sent
                $notification->update([
                    'status' => 'sent',
                    'sent_at' => now(),
                    'response' => 'Email berhasil dikirim ke ' . $user->email,
                ]);

                Log::info("Email berhasil dikirim ke {$user->email} untuk permohonan #{$permohonan->id}");
                
                return [
                    'success' => true,
                    'message' => '✅ Email berhasil dikirim ke ' . $user->email
                ];

            } catch (Exception $e) {
                // Update status menjadi failed
                $notification->update([
                    'status' => 'failed',
                    'response' => $e->getMessage(),
                ]);

                Log::error("Gagal mengirim email ke {$user->email}: " . $e->getMessage());
                
                return [
                    'success' => false,
                    'message' => '❌ Email gagal dikirim: ' . $e->getMessage()
                ];
            }

        } catch (Exception $e) {
            Log::error("Error NotificationService (Email): " . $e->getMessage());
            
            // Jika gagal membuat notifikasi, coba simpan tanpa exception
            try {
                Notification::create([
                    'user_id' => $user->id,
                    'permohonan_informasi_id' => $permohonan->id, // ✅ FIXED
                    'type' => 'email',
                    'status' => 'failed',
                    'message' => $this->createNotificationMessage($permohonan),
                    'response' => $e->getMessage(),
                    'sent_at' => now(),
                ]);
            } catch (Exception $innerException) {
                Log::critical("Gagal menyimpan notifikasi email: " . $innerException->getMessage());
            }
            
            return [
                'success' => false,
                'message' => '❌ Error sistem: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Kirim notifikasi WhatsApp
     */
    private function sendWhatsAppNotification(User $user, PermohonanInformasi $permohonan)
    {
        try {
            // Ambil nomor telepon
            $phone = $permohonan->no_telp ?? $user->phone ?? $user->no_telepon ?? null;

            if (!$phone) {
                Log::warning("Nomor telepon tidak tersedia untuk user {$user->id}");
                return [
                    'success' => false,
                    'message' => '❌ Nomor telepon tidak tersedia'
                ];
            }

            // Simpan notifikasi dengan status pending
            $notification = Notification::create([
                'user_id' => $user->id,
                'permohonan_informasi_id' => $permohonan->id, // ✅ FIXED
                'type' => 'whatsapp',
                'status' => 'pending',
                'message' => $this->createWhatsAppMessage($permohonan),
                'sent_at' => null,
            ]);

            try {
                // Format nomor telepon
                $formattedPhone = $this->formatPhoneNumber($phone);
                
                // Buat pesan WhatsApp
                $message = $this->createWhatsAppMessage($permohonan);

                // IMPLEMENTASI WHATSAPP API
                // Uncomment salah satu sesuai provider yang kamu pakai:
                
                // Contoh 1: Fonnte
                // $response = Http::withHeaders([
                //     'Authorization' => config('services.fonnte.token')
                // ])->post('https://api.fonnte.com/send', [
                //     'target' => $formattedPhone,
                //     'message' => $message,
                // ]);

                // Contoh 2: Wablas
                // $response = Http::post('https://console.wablas.com/api/send-message', [
                //     'phone' => $formattedPhone,
                //     'message' => $message,
                //     'token' => config('services.wablas.token'),
                // ]);

                // SIMULASI: Hapus ini saat production
                Log::info("SIMULASI: WhatsApp akan dikirim ke {$formattedPhone}");
                $simulationSuccess = true; // Ubah jadi false untuk test gagal
                
                if ($simulationSuccess) {
                    // Update status menjadi sent
                    $notification->update([
                        'status' => 'sent',
                        'sent_at' => now(),
                        'response' => 'WhatsApp berhasil dikirim ke ' . $formattedPhone,
                    ]);

                    Log::info("WhatsApp berhasil dikirim ke {$formattedPhone}");
                    
                    return [
                        'success' => true,
                        'message' => '✅ WhatsApp berhasil dikirim ke ' . $formattedPhone
                    ];
                } else {
                    throw new Exception("Simulasi gagal");
                }

            } catch (Exception $e) {
                // Update status menjadi failed
                $notification->update([
                    'status' => 'failed',
                    'response' => $e->getMessage(),
                ]);

                Log::error("Gagal mengirim WhatsApp: " . $e->getMessage());
                
                return [
                    'success' => false,
                    'message' => '❌ WhatsApp gagal dikirim: ' . $e->getMessage()
                ];
            }

        } catch (Exception $e) {
            Log::error("Error NotificationService (WhatsApp): " . $e->getMessage());
            
            return [
                'success' => false,
                'message' => '❌ Error sistem: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Format nomor telepon untuk WhatsApp (format Indonesia)
     */
    private function formatPhoneNumber($phone)
    {
        // Hapus karakter non-digit
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // Tambahkan kode negara jika belum ada (Indonesia = 62)
        if (substr($phone, 0, 1) === '0') {
            $phone = '62' . substr($phone, 1);
        } elseif (substr($phone, 0, 2) !== '62') {
            $phone = '62' . $phone;
        }

        return $phone;
    }

    /**
     * Buat pesan notifikasi berdasarkan status permohonan
     */
    private function createNotificationMessage(PermohonanInformasi $permohonan)
    {
        $statusText = [
            'pending' => 'menunggu diproses',
            'proses' => 'sedang diproses',
            'selesai' => 'telah selesai diproses',
            'ditolak' => 'ditolak'
        ];

        $status = $statusText[$permohonan->status] ?? $permohonan->status;

        $message = "Yth. {$permohonan->user->name},\n\n";
        $message .= "Permohonan informasi Anda dengan nomor registrasi #{$permohonan->id} {$status}.\n\n";
        
        if ($permohonan->tanggapan) {
            $message .= "Tanggapan: {$permohonan->tanggapan}\n\n";
        }
        
        if ($permohonan->file_tanggapan) {
            $message .= "File tanggapan telah tersedia untuk diunduh.\n\n";
        }
        
        $message .= "Silakan login ke sistem untuk melihat detail lengkap.\n\n";
        $message .= "Terima kasih.";

        return $message;
    }

    /**
     * Buat pesan WhatsApp yang lebih formatted
     */
    private function createWhatsAppMessage(PermohonanInformasi $permohonan)
    {
        $statusEmoji = [
            'pending' => '⏳',
            'proses' => '🔄',
            'selesai' => '✅',
            'ditolak' => '❌'
        ];

        $statusText = [
            'pending' => 'Menunggu',
            'proses' => 'Sedang Diproses',
            'selesai' => 'Selesai',
            'ditolak' => 'Ditolak'
        ];

        $emoji = $statusEmoji[$permohonan->status] ?? '📋';
        $status = $statusText[$permohonan->status] ?? $permohonan->status;
        $detailUrl = route('permohonan.show', $permohonan->id);

        $message = "*🔔 Tanggapan Permohonan Informasi*\n\n";
        $message .= "Halo *{$permohonan->nama_lengkap}*,\n\n";
        $message .= "Permohonan informasi Anda telah ditanggapi:\n\n";
        $message .= "━━━━━━━━━━━━━━━━━━\n";
        $message .= "*Status:* {$emoji} {$status}\n";
        $message .= "*Subjek:* {$permohonan->subjek}\n";
        $message .= "*Tanggal:* " . $permohonan->tanggal_tanggapan->format('d M Y, H:i') . "\n";
        $message .= "━━━━━━━━━━━━━━━━━━\n\n";
        
        if ($permohonan->tanggapan) {
            $message .= "*Tanggapan:*\n{$permohonan->tanggapan}\n\n";
        }
        
        if ($permohonan->file_tanggapan) {
            $message .= "📎 File tanggapan tersedia untuk diunduh.\n\n";
        }
        
        $message .= "Lihat detail lengkap:\n{$detailUrl}\n\n";
        $message .= "_Terima kasih telah menggunakan layanan kami._";

        return $message;
    }

    /**
     * Log notifikasi tanpa mengirim (untuk testing)
     */
    public function logNotification($userId, $permohonanId, $message)
    {
        try {
            Notification::create([
                'user_id' => $userId,
                'permohonan_informasi_id' => $permohonanId, // ✅ FIXED
                'type' => 'system',
                'status' => 'sent',
                'message' => $message,
                'sent_at' => now(),
            ]);
            
            return true;
        } catch (Exception $e) {
            Log::error("Gagal menyimpan log notifikasi: " . $e->getMessage());
            return false;
        }
    }
}