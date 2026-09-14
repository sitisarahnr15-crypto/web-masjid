<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lokasi Masjid Besar Ciparay</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #51e3e8, #ffffff);
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 700px;
            margin: auto;
            text-align: center;
        }

        h1 {
            color: #2983bf;
            margin-bottom: 10px;
        }

        .alamat {
            color: #666;
            margin-bottom: 50px;
            line-height: 1.6;
        }

        .map {
            width: 100%;
            background: white;
            padding: 10px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .map iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 10px;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 25px;
            background: #2abde6;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
        }

        .back:hover {
            background: #55e0f0;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>📍 Lokasi Masjid</h1>

    <p class="alamat">
        Masjid Besar Ciparay
    </p>

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7734401092093!2d107.71032097499752!3d-7.035892892966066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c1a64f08293b%3A0x8909c44fb25b275c!2sMasjid%20Besar%20Ciparay!5e0!3m2!1sid!2sid!4v1789367751455!5m2!1sid!2sid"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>

    <a href="{{ url('/') }}" class="back">
        ← Kembali
    </a>

</div>

</body>
</html>