
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masjid Besar Ciparay</title>

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
            max-width: 500px;
        }

        /* Card utama */
        .card {
            background: white;
            border-radius: 25px;
            padding: 35px 28px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.12);
        }

        /* Logo */
        .logo {
            width: 100px;
            height: 100px;
            background: #e8f0ff;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.08);
        }

        .logo img {
            width: 70px;
            height: 70px;
            object-fit: contain;
            display: block;
        }

        /* Judul */
        h1 {
            color: #173b70;
            font-size: 27px;
            margin-bottom: 10px;
        }

        /* Deskripsi */
        .description {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* Tombol */
        .link {
            display: block;
            width: 100%;
            text-decoration: none;
            background: #f5f8ff;
            color: #2563eb;
            padding: 15px;
            margin: 12px 0;
            border-radius: 14px;
            font-weight: bold;
            font-size: 14px;
            border: 1px solid #e5edff;
            transition: 0.25s ease;
        }

        .link:hover {
            transform: translateY(-2px);
            background: #2563eb;
            color: white;
            box-shadow: 0 7px 18px rgba(37, 99, 235, 0.18);
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #9ca3af;
            font-size: 11px;
            margin-top: 20px;
        }

    </style>
</head>

<body>

<div class="container">

    <div class="card">

        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('images/logo img.png') }}" alt="Logo Masjid">
        </div>

        <!-- Judul -->
        <h1>Masjid Besar Ciparay</h1>

        <!-- Deskripsi -->
        <p class="description">
            Pusat kegiatan keislaman dan kemasyarakatan
        </p>

        <!-- Tombol -->
        <a href="{{ url('/profil') }}" class="link">
            🕌 Profil Masjid
        </a>

        <a href="{{ url('/lokasi masjid') }}" class="link">
            📍 Lokasi Masjid
        </a>

        <a href="{{ url('/whatsApp') }}" class="link">
            💬 WhatsApp
        </a>

        <a href="{{ url('/Reservasi-akad') }}" class="link">
            🕌 Reservasi Akad
        </a>

        <a href="{{ url('/agenda kegiatan') }}" class="link">
            📅 Agenda Kegiatan
        </a>

        <a href="{{ url('/infaq & donasi') }}" class="link">
            💰 Infaq & Donasi
        </a>

    </div>

    <div class="footer">
        © 2026 Masjid Besar Ciparay
    </div>

</div>

</body>
</html>
```
