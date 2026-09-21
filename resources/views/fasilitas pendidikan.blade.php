<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fasilitas Pendidikan - Masjid Besar Ciparay</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f8fc;
            color: #26354a;
            line-height: 1.6;
        }

        /* =========================
           HERO
        ========================= */
        .hero {
            position: relative;
            min-height: 300px;
            background:
                linear-gradient(
                    rgba(13, 71, 161, 0.82),
                    rgba(5, 35, 85, 0.92)
                ),
                url("{{ asset('images/masjid-besar-ciparay.jpg') }}");
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 40px 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero-icon {
            font-size: 58px;
            margin-bottom: 10px;
        }

        .hero h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 17px;
            opacity: 0.95;
        }

        /* =========================
           KEMBALI
        ========================= */
        .back-wrapper {
            max-width: 1100px;
            margin: 25px auto 0;
            padding: 0 20px;
        }

        .back-button {
            display: inline-block;
            text-decoration: none;
            background: white;
            color: #0d47a1;
            padding: 11px 18px;
            border-radius: 10px;
            font-weight: bold;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .back-button:hover {
            background: #0d47a1;
            color: white;
            transform: translateY(-2px);
        }

        /* =========================
           CONTAINER
        ========================= */
        .container {
            max-width: 1100px;
            margin: 30px auto 60px;
            padding: 0 20px;
        }

        /* =========================
           INTRO
        ========================= */
        .intro {
            background: white;
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 35px;
            box-shadow: 0 5px 20px rgba(13, 71, 161, 0.08);
            border-left: 5px solid #1976d2;
        }

        .intro h2 {
            color: #0d47a1;
            margin-bottom: 12px;
            font-size: 26px;
        }

        .intro p {
            color: #526274;
            font-size: 16px;
        }

        /* =========================
           JUDUL
        ========================= */
        .section-title {
            text-align: center;
            margin-bottom: 28px;
        }

        .section-title h2 {
            color: #0d47a1;
            font-size: 28px;
            margin-bottom: 8px;
        }

        .section-title p {
            color: #64748b;
        }

        /* =========================
           CARD PENDIDIKAN
        ========================= */
        .education-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .education-link {
            text-decoration: none;
            color: inherit;
        }

        .education-card {
            background: white;
            border-radius: 20px;
            padding: 35px 28px;
            text-align: center;
            border: 1px solid #e1ebf7;
            box-shadow: 0 6px 22px rgba(13, 71, 161, 0.08);
            transition: 0.3s;
            height: 100%;
        }

        .education-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 13px 30px rgba(13, 71, 161, 0.16);
            border-color: #1976d2;
        }

        .education-icon {
            width: 95px;
            height: 95px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #eef6ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
        }

        .education-card h3 {
            color: #0d47a1;
            font-size: 24px;
            margin-bottom: 12px;
        }

        .education-card p {
            color: #64748b;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .lihat {
            display: inline-block;
            background: #0d47a1;
            color: white;
            padding: 10px 19px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }

        .education-card:hover .lihat {
            background: #1976d2;
        }

        /* =========================
           INFORMASI
        ========================= */
        .info-box {
            margin-top: 35px;
            background: #eaf3ff;
            border: 1px solid #d4e6fa;
            border-radius: 16px;
            padding: 25px;
            text-align: center;
        }

        .info-box h3 {
            color: #0d47a1;
            margin-bottom: 8px;
        }

        .info-box p {
            color: #526274;
            font-size: 15px;
        }

        /* =========================
           FOOTER
        ========================= */
        footer {
            background: #082d63;
            color: white;
            text-align: center;
            padding: 25px 20px;
        }

        footer p {
            font-size: 14px;
            opacity: 0.9;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 700px) {

            .hero {
                min-height: 270px;
            }

            .hero h1 {
                font-size: 29px;
            }

            .hero p {
                font-size: 15px;
            }

            .hero-icon {
                font-size: 48px;
            }

            .education-grid {
                grid-template-columns: 1fr;
            }

            .intro {
                padding: 25px 20px;
            }

            .intro h2 {
                font-size: 23px;
            }

            .section-title h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         HERO
    ========================= -->
    <section class="hero">

        <div class="hero-content">

            <div class="hero-icon">
                📚
            </div>

            <h1>
                Fasilitas Pendidikan
            </h1>

            <p>
                Sarana pendidikan dan pembelajaran
                di lingkungan Masjid Besar Ciparay
            </p>

        </div>

    </section>


    <!-- =========================
         KEMBALI KE PROFIL
    ========================= -->
    <div class="back-wrapper">

        <a href="{{ url('/profil') }}" class="back-button">
            ← Kembali ke Profil
        </a>

    </div>


    <!-- =========================
         ISI
    ========================= -->
    <main class="container">

        <!-- PENJELASAN -->
        <div class="intro">

            <h2>
                📖 Pendidikan di Masjid Besar Ciparay
            </h2>

            <p>
                Masjid Besar Ciparay tidak hanya menjadi tempat
                pelaksanaan ibadah, tetapi juga menjadi bagian
                dari kegiatan pendidikan dan pembinaan keislaman
                bagi anak-anak dan santri di lingkungan sekitar.
            </p>

        </div>


        <!-- PILIHAN -->
        <div class="section-title">

            <h2>
                Pilih Fasilitas Pendidikan
            </h2>

            <p>
                Pilih salah satu fasilitas pendidikan
                untuk melihat informasi lebih lengkap.
            </p>

        </div>


        <div class="education-grid">

            <!-- =========================
                 MADRASAH
            ========================= -->
            <a
                href="{{ url('/fasilitas/pendidikan/madrasah') }}"
                class="education-link"
            >

                <div class="education-card">

                    <div class="education-icon">
                        📚
                    </div>

                    <h3>
                        MDT Masjid Besar Ciparay
                    </h3>

                    <p>
                        Kegiatan pendidikan keislaman bagi
                        santri melalui pembelajaran Al-Qur'an,
                        ilmu agama, dan pembinaan karakter.
                    </p>

                    <span class="lihat">
                        Lihat Madrasah →
                    </span>

                </div>

            </a>


            <!-- =========================
                 TK
            ========================= -->
            <a
                href="{{ url('/fasilitas/pendidikan/tk') }}"
                class="education-link"
            >

                <div class="education-card">

                    <div class="education-icon">
                        🧒
                    </div>

                    <h3>
                        TK MBC
                    </h3>

                    <p>
                        Fasilitas pendidikan anak usia dini
                        yang mendukung kegiatan belajar,
                        bermain, dan pembentukan karakter anak.
                    </p>

                    <span class="lihat">
                        Lihat TK →
                    </span>

                </div>

            </a>

        </div>


        <!-- INFORMASI -->
        <div class="info-box">

            <h3>
                🌱 Pendidikan untuk Generasi Islami
            </h3>

            <p>
                Kegiatan pendidikan di lingkungan masjid
                diharapkan dapat membantu membentuk generasi
                yang berilmu, berakhlak, dan memiliki nilai-nilai
                keislaman sejak usia dini.
            </p>

        </div>

    </main>


    <!-- =========================
         FOOTER
    ========================= -->
    <footer>

        <p>
            © 2026 Masjid Besar Ciparay
        </p>

        <p>
            Pusat kegiatan keislaman dan kemasyarakatan
        </p>

    </footer>

</body>
</html>