<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reservasi Akad - Masjid Besar Ciparay</title>

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
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 650px;
        }

        /* Tombol kembali */
        .back {
            display: inline-block;
            margin-bottom: 14px;
            padding: 10px 16px;
            background: white;
            color: #2563eb;
            text-decoration: none;
            border-radius: 12px;
            font-size: 13px;
            font-weight: bold;
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.10);
            transition: 0.25s ease;
        }

        .back:hover {
            background: #2563eb;
            color: white;
            transform: translateY(-2px);
        }

        /* Card */
        .card {
            background: white;
            border-radius: 25px;
            padding: 30px 25px;
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.12);
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 22px;
        }

        .icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 13px;
            border-radius: 50%;
            background: #e8f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        h1 {
            color: #173b70;
            font-size: 26px;
            margin-bottom: 7px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.6;
        }

        /* Informasi */
        .info {
            background: #f5f8ff;
            border: 1px solid #e5edff;
            border-radius: 17px;
            padding: 17px;
            margin-bottom: 18px;
        }

        .info-title {
            color: #173b70;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .info-text {
            color: #6b7280;
            font-size: 12px;
            line-height: 1.7;
        }

        .info ul {
            padding-left: 18px;
            margin-top: 5px;
        }

        .info li {
            margin-bottom: 3px;
        }

        /* Tombol Google Form */
        .form-button {
            display: block;
            width: 100%;
            padding: 15px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 14px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.25s ease;
            box-shadow: 0 7px 18px rgba(37, 99, 235, 0.18);
        }

        .form-button:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(37, 99, 235, 0.25);
        }

        .note {
            text-align: center;
            color: #9ca3af;
            font-size: 11px;
            margin-top: 12px;
            line-height: 1.5;
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #9ca3af;
            font-size: 11px;
            margin-top: 15px;
        }

        /* Tampilan HP */
        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            .card {
                padding: 24px 17px;
                border-radius: 22px;
            }

            .icon {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }

            h1 {
                font-size: 23px;
            }

            .info {
                padding: 14px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Kembali -->
    <a href="{{ url('/') }}" class="back">
        ← Kembali ke Beranda
    </a>

    <div class="card">

        <!-- Header -->
        <div class="header">

            <div class="icon">
                💍
            </div>

            <h1>Reservasi Akad Nikah</h1>

            <p class="subtitle">
                Ajukan reservasi penggunaan Masjid Besar Ciparay
                untuk pelaksanaan akad nikah.
            </p>

        </div>

        <!-- Informasi -->
        <div class="info">

            <div class="info-title">
                📋 Informasi Reservasi
            </div>

            <div class="info-text">
                Silakan mengisi formulir reservasi melalui Google Form
                dengan data yang benar dan lengkap.
            </div>

            <ul class="info-text">
                <li>Data calon pengantin</li>
                <li>Tanggal dan waktu akad</li>
                <li>Data kontak yang dapat dihubungi</li>
                <li>Informasi tambahan yang diperlukan</li>
            </ul>

        </div>

        <!-- Tombol Google Form -->
        <a
            href="MASUKKAN_LINK_GOOGLE_FORM_DI_SINI"
            target="_blank"
            class="form-button">
            📝 Isi Formulir Reservasi
        </a>

        <p class="note">
            Formulir akan terbuka di halaman Google Form baru.
        </p>

    </div>

    <div class="footer">
        © 2026 Masjid Besar Ciparay
    </div>

</div>

</body>
</html>