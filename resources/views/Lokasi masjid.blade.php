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
            padding: 25px;
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.12);
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 18px;
        }

        .icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 10px;
            border-radius: 50%;
            background: #e8f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
        }

        h1 {
            color: #173b70;
            font-size: 25px;
            margin-bottom: 5px;
        }

        .alamat {
            color: #6b7280;
            font-size: 13px;
        }

        /* Maps */
        .map {
            width: 100%;
            background: #f5f8ff;
            padding: 7px;
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.08);
            overflow: hidden;
        }

        .map iframe {
            width: 100%;
            height: 250px;
            border: 0;
            border-radius: 11px;
            display: block;
        }

        /* Keterangan lokasi */
        .location-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 15px;
            padding: 13px;
            background: #f5f8ff;
            border: 1px solid #e5edff;
            border-radius: 15px;
        }

        .location-icon {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            border-radius: 12px;
            background: #e8f0ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .location-text {
            text-align: left;
        }

        .location-title {
            color: #173b70;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 3px;
        }

        .location-subtitle {
            color: #7b8794;
            font-size: 11px;
            line-height: 1.4;
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #9ca3af;
            font-size: 11px;
            margin-top: 15px;
        }

        /* HP */
        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            .back {
                margin-bottom: 12px;
            }

            .card {
                padding: 20px 16px;
                border-radius: 22px;
            }

            .icon {
                width: 58px;
                height: 58px;
                font-size: 27px;
            }

            h1 {
                font-size: 23px;
            }

            .map iframe {
                height: 220px;
            }

            .location-info {
                padding: 11px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Kembali di atas -->
    <a href="{{ url('/') }}" class="back">
        ← Kembali ke Beranda
    </a>

    <div class="card">

        <!-- Header -->
        <div class="header">

            <div class="icon">
                📍
            </div>

            <h1>Lokasi Masjid</h1>

            <p class="alamat">
                Masjid Besar Ciparay
            </p>

        </div>

        <!-- Google Maps -->
        <div class="map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7734401092093!2d107.71032097499752!3d-7.035892892966066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c1a64f08293b%3A0x8909c44fb25b275c!2sMasjid%20Besar%20Ciparay!5e0!3m2!1sid!2sid!4v1789367751455!5m2!1sid!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>

        </div>

        <!-- Keterangan -->
        <div class="location-info">

            <div class="location-icon">
                📍
            </div>

            <div class="location-text">

                <div class="location-title">
                    Masjid Besar Ciparay
                </div>

                <div class="location-subtitle">
                    Lihat lokasi dan petunjuk arah melalui Google Maps
                </div>

            </div>

        </div>

    </div>

    <div class="footer">
        © 2026 Masjid Besar Ciparay
    </div>

</div>

</body>
</html>