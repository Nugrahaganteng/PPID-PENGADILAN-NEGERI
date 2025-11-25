<?php

namespace App\Notifications;

use App\Models\PermohonanInformasi;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class PermohonanDisetujui extends Notification
{
    use Queueable;

    protected $permohonan;

    /**
     * Create a new notification instance.
     */
    public function __construct(PermohonanInformasi $permohonan)
    {
        $this->permohonan = $permohonan;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable): array
    {
        // Kirim ke database dan email
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        $statusText = match($this->permohonan->status) {
            'diproses' => 'Sedang Diproses',
            'selesai' => 'Telah Selesai (Disetujui)',
            'ditolak' => 'Ditolak',
            default => 'Diperbarui'
        };

        $statusIcon = match($this->permohonan->status) {
            'diproses' => '🔄',
            'selesai' => '✅',
            'ditolak' => '❌',
            default => '📬'
        };

        $mail = (new MailMessage)
            ->subject($statusIcon . ' Permohonan Informasi Anda ' . $statusText)
            ->greeting('Halo ' . $this->permohonan->nama_lengkap . ',')
            ->line('Permohonan informasi Anda telah diproses oleh Admin PPID Kota Bogor.')
            ->line('**Subjek:** ' . $this->permohonan->subjek)
            ->line('**Status:** ' . $statusIcon . ' ' . $statusText)
            ->line('**Tanggal Diproses:** ' . $this->permohonan->tanggal_diproses->format('d F Y, H:i'));

        // Tambahkan catatan admin jika ada
        if ($this->permohonan->catatan_admin) {
            $mail->line('')
                ->line('**Catatan dari Admin:**')
                ->line($this->permohonan->catatan_admin);
        }

        // Tambahkan informasi file balasan jika ada
        if ($this->permohonan->file_balasan) {
            $mail->line('')
                ->line('📎 Admin telah mengupload file balasan untuk Anda.')
                ->line('Silakan login untuk mengunduh file tersebut.');
        }

        $mail->action('Lihat Detail Permohonan', url('/permohonan'))
            ->line('')
            ->line('Terima kasih telah menggunakan layanan PPID Kota Bogor!')
            ->salutation('Salam, Tim PPID Kota Bogor');

        return $mail;
    }

    /**
     * Get the array representation of the notification (untuk database).
     */
    public function toArray($notifiable): array
    {
        return [
            'permohonan_id' => $this->permohonan->id,
            'subjek' => $this->permohonan->subjek,
            'status' => $this->permohonan->status,
            'status_text' => $this->permohonan->status_text,
            'catatan_admin' => $this->permohonan->catatan_admin,
            'has_file_balasan' => !empty($this->permohonan->file_balasan),
            'tanggal_diproses' => $this->permohonan->tanggal_diproses->toDateTimeString(),
            'message' => 'Permohonan informasi Anda telah ' . strtolower($this->permohonan->status_text),
        ];
    }
}