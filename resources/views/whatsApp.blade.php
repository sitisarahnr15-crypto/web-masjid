
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>WhatsApp Hotline - Masjid Besar Ciparay</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eef5ff, #dceaff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .container {
            width: 100%;
            max-width: 430px;
        }

        /* Tombol kembali */
        .back {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .back:hover {
            color: #1d4ed8;
        }

        /* Card utama */
        .card {
            background: white;
            border-radius: 25px;
            padding: 35px 28px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.12);
        }

        /* Icon */
        .icon {
            width: 85px;
            height: 85px;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: #e8f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 43px;
        }

        /* Badge */
        .badge {
            display: inline-block;
            background: #e8f0ff;
            color: #2563eb;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        /* Judul */
        h1 {
            color: #173b70;
            font-size: 26px;
            margin-bottom: 12px;
        }

        /* Deskripsi */
        .description {
            color: #6b7280;
            line-height: 1.7;
            font-size: 14px;
            margin-bottom: 25px;
        }

        /* Informasi */
        .info {
            background: #f5f8ff;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 25px;
            text-align: left;
        }

        .info-title {
            color: #173b70;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        .info-text {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.5;
        }

        /* Tombol WhatsApp */
        .button {
            display: block;
            width: 100%;
            padding: 15px;
            border-radius: 14px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            transition: 0.2s;
        }

        .button:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        /* Keterangan template */
        .template {
            margin-top: 20px;
            color: #9ca3af;
            font-size: 11px;
            line-height: 1.5;
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #7b8b82;
            font-size: 11px;
            margin-top: 18px;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Kembali -->
        <a href="/" class="back">
            ← Kembali ke Beranda
        </a>

        <!-- Card -->
        <div class="card">

            <!-- Icon -->
            <div class="icon">
                💬
            </div>

            <!-- Badge -->
            <div class="badge">
                WHATSAPP HOTLINE
            </div>

            <!-- Judul -->
            <h1>Hubungi Kami</h1>

            <!-- Deskripsi -->
            <p class="description">
                Silakan hubungi Admin Masjid Besar Ciparay
                melalui WhatsApp untuk mendapatkan informasi
                mengenai kegiatan dan pelayanan masjid.
            </p>

            <!-- Informasi -->
            <div class="info">

                <div class="info-title">
                    📱 WhatsApp Hotline
                </div>

                <div class="info-text">
                    Admin Masjid Besar Ciparay siap membantu
                    memberikan informasi kepada jamaah.
                </div>

            </div>

            <!-- Tombol WhatsApp -->
            <a
                href="https://wa.me/6285134345876?text=Assalamu%27alaikum%2C%20Admin%20Masjid%20Besar%20Ciparay.%0A%0ASaya%20ingin%20mendapatkan%20informasi%20mengenai%20kegiatan%20masjid.%0A%0ANama%3A%0AKeperluan%3A"
                target="_blank"
                class="button"
            >
                💬 Mulai Chat WhatsApp
            </a>

            <!-- Keterangan -->
            <p class="template">
                Pesan otomatis akan disiapkan ketika
                tombol WhatsApp ditekan.
            </p>

        </div>

        <!-- Footer -->
        <div class="footer">
            © 2026 Masjid Besar Ciparay
        </div>

    </div>

</body>
</html>
```
