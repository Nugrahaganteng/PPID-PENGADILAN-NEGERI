<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\PermohonanInformasi;

class PermohonanDitanggapiNotification extends Notification
{
    use Queueable;

    protected $permohonan;

    public function __construct(PermohonanInformasi $permohonan)
    {
        $this->permohonan = $permohonan;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $statusText = $this->getStatusText($this->permohonan->status);
        $statusEmoji = $this->getStatusEmoji($this->permohonan->status);

        $mail = (new MailMessage)
            ->subject('Tanggapan Permohonan Informasi - ' . $this->permohonan->subjek)
            ->greeting('Halo, ' . $this->permohonan->nama_lengkap . '!')
            ->line('Permohonan informasi Anda telah ditanggapi.')
            ->line('━━━━━━━━━━━━━━━━━━━━━━')
            ->line('**Status:** ' . $statusEmoji . ' ' . $statusText)
            ->line('**Subjek:** ' . $this->permohonan->subjek)
            ->line('**Tanggal Tanggapan:** ' . $this->permohonan->tanggal_tanggapan->format('d F Y, H:i'))
            ->line('━━━━━━━━━━━━━━━━━━━━━━')
            ->line('**Tanggapan:**')
            ->line($this->permohonan->tanggapan);

        if ($this->permohonan->file_tanggapan) {
            $mail->line('📎 File tanggapan telah dilampirkan. Silakan login untuk mengunduh.');
        }

        $mail->action('Lihat Detail Permohonan', route('permohonan.show', $this->permohonan->id))
            ->line('Terima kasih telah menggunakan layanan kami!');

        return $mail;
    }

    private function getStatusEmoji($status)
    {
        $emojis = [
            'pending' => '⏳',
            'proses' => '🔄',
            'selesai' => '✅',
            'ditolak' => '❌'
        ];

        return $emojis[$status] ?? '📋';
    }

    private function getStatusText($status)
    {
        $texts = [
            'pending' => 'Menunggu',
            'proses' => 'Sedang Diproses',
            'selesai' => 'Selesai',
            'ditolak' => 'Ditolak'
        ];

        return $texts[$status] ?? 'Unknown';
    }

    public function toArray($notifiable)
    {
        return [
            'permohonan_id' => $this->permohonan->id,
            'subjek' => $this->permohonan->subjek,
            'status' => $this->permohonan->status,
        ];
    }
}