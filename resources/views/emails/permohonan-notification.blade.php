<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Permohonan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        .content {
            padding: 30px;
        }
        .greeting {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }
        .info-card {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .info-row {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: 600;
            color: #495057;
            min-width: 150px;
        }
        .info-value {
            color: #212529;
            flex: 1;
        }
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }
        .status-menunggu {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-diproses {
            background-color: #cfe2ff;
            color: #084298;
        }
        .status-selesai {
            background-color: #d1e7dd;
            color: #0f5132;
        }
        .status-ditolak {
            background-color: #f8d7da;
            color: #842029;
        }
        .message-box {
            background-color: #e7f3ff;
            border: 1px solid #b3d9ff;
            border-radius: 5px;
            padding: 15px;
            margin: 20px 0;
        }
        .message-box p {
            margin: 0;
            color: #004085;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: 600;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #6c757d;
        }
        .footer p {
            margin: 5px 0;
        }
        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔔 Notifikasi Permohonan Informasi</h1>
            <p>Sistem Informasi Permohonan</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                <p>Yth. <strong>{{ $permohonan->nama_pemohon }}</strong>,</p>
            </div>
            
            <p>Permohonan informasi Anda telah <strong>ditanggapi</strong> oleh petugas kami. Berikut adalah detail informasinya:</p>
            
            <div class="info-card">
                <div class="info-row">
                    <span class="info-label">No. Registrasi</span>
                    <span class="info-value">{{ $permohonan->no_registrasi ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Tanggal Permohonan</span>
                    <span class="info-value">{{ $permohonan->created_at->format('d F Y, H:i') }} WIB</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Informasi Diminta</span>
                    <span class="info-value">{{ $permohonan->informasi_yang_diminta ?? 'N/A' }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Status Permohonan</span>
                    <span class="info-value">
                        <span class="status-badge status-{{ strtolower($permohonan->status_permohonan ?? 'menunggu') }}">
                            {{ ucfirst($permohonan->status_permohonan ?? 'Menunggu') }}
                        </span>
                    </span>
                </div>
            </div>

            @if($permohonan->tanggapan)
            <div class="message-box">
                <strong>💬 Tanggapan Petugas:</strong>
                <p style="margin-top: 10px;">{{ $permohonan->tanggapan }}</p>
            </div>
            @endif

            @if($permohonan->catatan)
            <div class="divider"></div>
            <p><strong>📝 Catatan Tambahan:</strong></p>
            <p style="color: #6c757d; font-style: italic;">{{ $permohonan->catatan }}</p>
            @endif

            <div class="divider"></div>

            <p>Untuk informasi lebih lanjut atau mengajukan permohonan baru, silakan kunjungi sistem kami.</p>

            @if(config('app.url'))
            <center>
                <a href="{{ config('app.url') }}" class="button">Buka Sistem</a>
            </center>
            @endif

            <p style="margin-top: 30px; font-size: 14px; color: #6c757d;">
                Jika Anda memiliki pertanyaan, silakan hubungi kami melalui kontak yang tersedia di sistem.
            </p>
        </div>
        
        <div class="footer">
            <p><strong>{{ config('app.name', 'Sistem Permohonan Informasi') }}</strong></p>
            <p>Email ini dikirim secara otomatis, mohon tidak membalas email ini.</p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>