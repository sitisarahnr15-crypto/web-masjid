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
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #6ac8e2, #72c5de);
            display: flex;
            justify-content: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .logo {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 30px;
            color: #e4e7ea;
            margin-bottom: 8px;
        }

        .description {
            color: #eaecee;
            font-size: 18px;
            margin-bottom: 25px;
        }

        .link {
            display: block;
            text-decoration: none;
            background: white;
            color: rgb(7, 135, 198);
            padding: 17px;
            margin: 13px 0;
            border-radius: 15px;
            font-weight: bold;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .link:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 18px rgba(0,0,0,0.12);
            background: #155e4b;
            color: white;
        }

        .footer {
            margin-top: 30px;
            color: #777;
            font-size: 12px;
        }

        .logo img {
    width: 70px !important;
    height: 70px !important;
    object-fit: contain;
    display: block;
}
        
    </style>
</head>

<body>

<div class="container">

   <div class="logo">
    <img src="{{ asset('images/logo img.png') }}" alt="Logo Masjid">
    

    
</div>
    <h1>Masjid Besar Ciparay</h1>

    <p class="description">
        Pusat kegiatan keislaman dan kemasyarakatan
    </p>
    <a href="{{ url('/profil') }}" class="link">
    🕌 Profil Masjid
</a>

<a href="{{ url('/lokasi masjid') }}" class="link">
    📍 Lokasi Masjid
</a>
    <a href="{{ url('/instagram') }}" class="link">
        📱 Instagram
    </a>

    <a href="{{ url('/youtube') }}" class="link">
        ▶️ YouTube
    </a>

    <a href="{{ url('/whatsApp') }}" class="link">
        💬 WhatsApp
    </a>

    <a href="{{ url('/reservasi akad') }}" class="link">
        🕌 reservasi akad
    </a>

    <a href="{{ url('agenda kegiatan') }}" class="link">
        📅 Agenda Kegiatan
    </a>

    <a href="{{ url('infaq & donasi') }}" class="link">
        💰 Infaq & Donasi
    </a>

    <a href="{{ url('Hotline Mbc') }}" class="link">
        📞 hotline mbc
    </a>

    <div class="footer">
        © 2026 Masjid Besar Ciparay
    </div>

</div>

</body>
</html>