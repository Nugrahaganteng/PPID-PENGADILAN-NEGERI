<?php

namespace App\Mail;

use App\Models\Permohonan;
use App\Models\PermohonanInformasi;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PermohonanNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $permohonan;

    public function __construct(PermohonanInformasi $permohonan)
    {
        $this->permohonan = $permohonan;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Notifikasi: Permohonan Anda Telah Ditanggapi',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.permohonan-notification',
        );
    }

    public function attachments()
    {
        return [];
    }
}