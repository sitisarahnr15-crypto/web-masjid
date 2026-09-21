
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Masjid Besar Ciparay</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f8fc;
            color: #333;
            line-height: 1.7;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;
            height: 430px;
            overflow: hidden;
            background: #0d47a1;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.10),
                rgba(0, 31, 78, 0.80)
            );
        }

        .hero-content {
            position: absolute;
            z-index: 2;
            left: 50%;
            bottom: 50px;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1100px;
            color: white;
        }

        .hero-content h1 {
            font-size: 42px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 17px;
            opacity: 0.95;
        }

        /* =========================
           BACK BUTTON
        ========================= */

        .back-btn {
            position: absolute;
            z-index: 5;
            top: 25px;
            left: 25px;
            text-decoration: none;
            color: white;
            background: rgba(13, 71, 161, 0.92);
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #1976d2;
            transform: translateY(-2px);
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 92%;
            max-width: 1100px;
            margin: 40px auto;
        }

        /* =========================
           CARD
        ========================= */

        .card {
            background: white;
            border-radius: 18px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 6px 22px rgba(13, 71, 161, 0.08);
            border: 1px solid #e2edf8;
        }

        .card-title {
            color: #0d47a1;
            font-size: 25px;
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 10px;
        }

        .card-title::after {
            content: "";
            position: absolute;
            width: 55px;
            height: 4px;
            background: #1976d2;
            border-radius: 5px;
            left: 0;
            bottom: 0;
        }

        .card p {
            color: #667085;
            font-size: 14px;
        }

        /* =========================
           IDENTITAS
        ========================= */

        .identitas-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 22px;
        }

        .identitas {
            background: #eef6ff;
            padding: 20px;
            border-radius: 14px;
            border: 1px solid #d5e8fb;
            text-align: center;
        }

        .identitas .icon {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .identitas h3 {
            color: #0d47a1;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .identitas p {
            color: #667085;
            font-size: 13px;
        }

        /* =========================
           SEJARAH
        ========================= */

        .timeline {
            margin-top: 25px;
            border-left: 3px solid #1976d2;
            padding-left: 25px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 25px;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #1976d2;
            left: -33px;
            top: 7px;
            border: 3px solid white;
            box-shadow: 0 0 0 2px #1976d2;
        }

        .timeline-item h3 {
            color: #0d47a1;
            margin-bottom: 5px;
            font-size: 17px;
        }

        .timeline-item p {
            font-size: 14px;
        }

        /* =========================
           VISI MISI
        ========================= */

        .visi-misi {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            margin-top: 22px;
        }

        .visi,
        .misi {
            padding: 25px;
            border-radius: 15px;
            background: #eef6ff;
            border: 1px solid #d5e8fb;
        }

        .visi h3,
        .misi h3 {
            color: #0d47a1;
            margin-bottom: 10px;
        }

        .misi ul {
            padding-left: 20px;
            color: #667085;
            font-size: 14px;
        }

        /* =========================
           KEGIATAN
        ========================= */

        .kegiatan-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 22px;
        }

        .kegiatan {
            background: #f7faff;
            border: 1px solid #dceaf8;
            padding: 22px 15px;
            border-radius: 15px;
            text-align: center;
            transition: 0.3s;
        }

        .kegiatan:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(13, 71, 161, 0.12);
        }

        .kegiatan .emoji {
            font-size: 35px;
            display: block;
            margin-bottom: 10px;
        }

        .kegiatan h3 {
            color: #0d47a1;
            font-size: 16px;
            margin-bottom: 6px;
        }

        .kegiatan p {
            font-size: 13px;
        }

        /* =========================
           FASILITAS
        ========================= */

        .fasilitas-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 25px;
        }

        .fasilitas-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .fasilitas {
            overflow: hidden;
            background: white;
            border-radius: 15px;
            border: 1px solid #dceaf8;
            box-shadow: 0 4px 14px rgba(13, 71, 161, 0.06);
            transition: 0.3s;
        }

        .fasilitas:hover {
            transform: translateY(-5px);
            box-shadow: 0 9px 22px rgba(13, 71, 161, 0.15);
        }

        .fasilitas-img {
            width: 100%;
            height: 185px;
            object-fit: cover;
            display: block;
            transition: 0.4s;
        }

        .fasilitas:hover .fasilitas-img {
            transform: scale(1.04);
        }

        .fasilitas-content {
            padding: 17px 15px 20px;
        }

        .fasilitas-content .emoji {
            font-size: 27px;
            display: block;
            margin-bottom: 5px;
        }

        .fasilitas-content h3 {
            color: #0d47a1;
            font-size: 17px;
            margin-bottom: 7px;
        }

        .fasilitas-content p {
            color: #667085;
            font-size: 13px;
            line-height: 1.6;
        }

        .klik {
            display: block;
            margin-top: 10px;
            color: #1976d2;
            font-size: 12px;
            font-weight: bold;
        }

        /* =========================
           PENGURUS
        ========================= */

        .pengurus-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 22px;
        }

        .pengurus {
            background: #eef6ff;
            padding: 22px 15px;
            border-radius: 15px;
            text-align: center;
            border: 1px solid #d5e8fb;
        }

        .pengurus .icon {
            font-size: 35px;
            margin-bottom: 8px;
        }

        .pengurus h3 {
            color: #0d47a1;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .pengurus p {
            font-size: 13px;
        }

        /* =========================
           CLOSING
        ========================= */

        .closing {
            text-align: center;
            background: linear-gradient(
                135deg,
                #0d47a1,
                #1976d2
            );
            color: white;
            padding: 40px 25px;
            border-radius: 18px;
            margin-bottom: 30px;
        }

        .closing h2 {
            margin-bottom: 10px;
        }

        .closing p {
            color: white;
            opacity: 0.95;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #082d63;
            color: white;
            text-align: center;
            padding: 25px 15px;
            font-size: 13px;
        }

        /* =========================
           TABLET
        ========================= */

        @media (max-width: 900px) {

            .identitas-grid,
            .kegiatan-grid,
            .fasilitas-grid,
            .pengurus-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-content h1 {
                font-size: 34px;
            }
        }

        /* =========================
           HP
        ========================= */

        @media (max-width: 600px) {

            .hero {
                height: 360px;
            }

            .hero-content {
                bottom: 35px;
            }

            .hero-content h1 {
                font-size: 27px;
            }

            .hero-content p {
                font-size: 14px;
            }

            .back-btn {
                top: 15px;
                left: 15px;
                padding: 8px 13px;
                font-size: 12px;
            }

            .container {
                width: 94%;
                margin: 25px auto;
            }

            .card {
                padding: 22px 17px;
                border-radius: 15px;
            }

            .card-title {
                font-size: 21px;
            }

            .identitas-grid,
            .visi-misi,
            .kegiatan-grid,
            .fasilitas-grid,
            .pengurus-grid {
                grid-template-columns: 1fr;
            }

            .fasilitas-img {
                height: 200px;
            }

            .timeline {
                padding-left: 20px;
            }

            .timeline-item::before {
                left: -28px;
            }
        }

    </style>
</head>

<body>


    <!-- =========================
         HERO
    ========================= -->

    <section class="hero">

        <img
    src="{{ asset('images/masjid.jpg') }}"
    alt="Masjid Besar Ciparay"
>
        <a href="{{ url('/') }}" class="back-btn">
            ← Kembali
        </a>

        <div class="hero-content">

            <h1>
                Profil Masjid Besar Ciparay
            </h1>

            <p>
                Pusat kegiatan keislaman dan kemasyarakatan
            </p>

        </div>

    </section>


    <main class="container">


        <!-- =========================
             IDENTITAS
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Identitas Masjid
            </h2>

            <p>
                Masjid Besar Ciparay merupakan salah satu pusat
                kegiatan keagamaan dan kemasyarakatan yang berada
                di wilayah Ciparay.
            </p>

            <div class="identitas-grid">

                <div class="identitas">

                    <div class="icon">
                        🕌
                    </div>

                    <h3>
                        Nama
                    </h3>

                    <p>
                        Masjid Besar Ciparay
                    </p>

                </div>


                <div class="identitas">

                    <div class="icon">
                        📍
                    </div>

                    <h3>
                        Lokasi
                    </h3>

                    <p>
                        Ciparay, Kabupaten Bandung
                    </p>

                </div>


                <div class="identitas">

                    <div class="icon">
                        ☪️
                    </div>

                    <h3>
                        Fungsi
                    </h3>

                    <p>
                        Ibadah & Kemasyarakatan
                    </p>

                </div>

            </div>

        </section>


        <!-- =========================
             TENTANG MASJID
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Tentang Masjid
            </h2>

            <p>
                Masjid Besar Ciparay merupakan tempat ibadah yang
                tidak hanya digunakan untuk pelaksanaan shalat
                berjamaah, tetapi juga menjadi pusat kegiatan
                keislaman, pendidikan, sosial dan kemasyarakatan.
            </p>

            <br>

            <p>
                Keberadaan masjid diharapkan dapat menjadi sarana
                bagi masyarakat dalam meningkatkan kualitas
                keimanan, mempererat silaturahmi serta mendukung
                berbagai kegiatan positif di lingkungan sekitar.
            </p>

        </section>


        <!-- =========================
             SEJARAH
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Sejarah Masjid
            </h2>

            <div class="timeline">

                <div class="timeline-item">

                    <h3>
                        1933
                    </h3>

                    <p>
                        Masjid mulai dikenal sebagai salah satu
                        tempat ibadah dan pusat kegiatan keagamaan
                        masyarakat di wilayah Ciparay.
                    </p>

                </div>


                <div class="timeline-item">

                    <h3>
                        1980-an
                    </h3>

                    <p>
                        Masjid mengalami perkembangan dan mulai
                        digunakan untuk kegiatan keagamaan serta
                        pembinaan masyarakat yang lebih luas.
                    </p>

                </div>


                <div class="timeline-item">

                    <h3>
                        2019
                    </h3>

                    <p>
                        Pengembangan dan penataan fasilitas masjid
                        terus dilakukan untuk meningkatkan
                        kenyamanan jamaah.
                    </p>

                </div>


                <div class="timeline-item">

                    <h3>
                        2021
                    </h3>

                    <p>
                        Kegiatan pendidikan, sosial dan keagamaan
                        semakin berkembang dengan melibatkan
                        masyarakat sekitar.
                    </p>

                </div>


                <div class="timeline-item">

                    <h3>
                        Sekarang
                    </h3>

                    <p>
                        Masjid Besar Ciparay terus menjadi salah satu
                        pusat kegiatan ibadah, pendidikan dan
                        kemasyarakatan bagi masyarakat sekitar.
                    </p>

                </div>

            </div>

        </section>


        <!-- =========================
             VISI MISI
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Visi & Misi
            </h2>

            <div class="visi-misi">

                <div class="visi">

                    <h3>
                        Visi
                    </h3>

                    <p>
                        Menjadikan Masjid Besar Ciparay sebagai pusat
                        ibadah, pendidikan dan kegiatan sosial yang
                        memberikan manfaat bagi masyarakat.
                    </p>

                </div>


                <div class="misi">

                    <h3>
                        Misi
                    </h3>

                    <ul>

                        <li>
                            Meningkatkan kualitas kegiatan keagamaan.
                        </li>

                        <li>
                            Mendukung pendidikan dan pembinaan
                            keislaman.
                        </li>

                        <li>
                            Mempererat silaturahmi masyarakat.
                        </li>

                        <li>
                            Mengembangkan kegiatan sosial dan
                            kemasyarakatan.
                        </li>

                    </ul>

                </div>

            </div>

        </section>


        <!-- =========================
             KEGIATAN
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Kegiatan Masjid
            </h2>

            <p>
                Berbagai kegiatan yang dilaksanakan untuk
                mendukung aktivitas keagamaan dan kemasyarakatan.
            </p>

            <div class="kegiatan-grid">

                <div class="kegiatan">

                    <span class="emoji">
                        🕌
                    </span>

                    <h3>
                        Shalat Berjamaah
                    </h3>

                    <p>
                        Pelaksanaan shalat berjamaah bersama
                        masyarakat.
                    </p>

                </div>


                <div class="kegiatan">

                    <span class="emoji">
                        📖
                    </span>

                    <h3>
                        Kajian Keislaman
                    </h3>

                    <p>
                        Kegiatan kajian dan pembelajaran
                        keislaman.
                    </p>

                </div>


                <div class="kegiatan">

                    <span class="emoji">
                        🎓
                    </span>

                    <h3>
                        Pendidikan
                    </h3>

                    <p>
                        Kegiatan pendidikan dan pembinaan
                        keagamaan bagi santri.
                    </p>

                </div>


                <div class="kegiatan">

                    <span class="emoji">
                        🤲
                    </span>

                    <h3>
                        Kegiatan Sosial
                    </h3>

                    <p>
                        Kegiatan sosial dan kepedulian
                        terhadap masyarakat.
                    </p>

                </div>


                <div class="kegiatan">

                    <span class="emoji">
                        🌙
                    </span>

                    <h3>
                        Kegiatan Ramadhan
                    </h3>

                    <p>
                        Berbagai kegiatan ibadah selama
                        bulan Ramadhan.
                    </p>

                </div>


                <div class="kegiatan">

                    <span class="emoji">
                        👥
                    </span>

                    <h3>
                        Kegiatan Masyarakat
                    </h3>

                    <p>
                        Kegiatan yang melibatkan masyarakat
                        dan lingkungan sekitar.
                    </p>

                </div>

            </div>

        </section>


        <!-- =========================
             FASILITAS
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Fasilitas Masjid
            </h2>

            <p>
                Berbagai fasilitas yang tersedia di Masjid Besar
                Ciparay untuk menunjang kenyamanan jamaah dan
                kegiatan masjid.
            </p>


            <div class="fasilitas-grid">


                <!-- RUANG UTAMA -->

                <div class="fasilitas">

                    <img
                        src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                        alt="Ruang Utama Masjid Besar Ciparay"
                        class="fasilitas-img"
                    >

                    <div class="fasilitas-content">

                        <span class="emoji">
                            🕌
                        </span>

                        <h3>
                            Ruang Utama
                        </h3>

                        <p>
                            Ruang utama masjid yang digunakan
                            untuk pelaksanaan shalat berjamaah
                            dan berbagai kegiatan keagamaan.
                        </p>

                    </div>

                </div>


                <!-- TEMPAT WUDHU -->

                <div class="fasilitas">

                    <img
                        src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                        alt="Tempat Wudhu Masjid Besar Ciparay"
                        class="fasilitas-img"
                    >

                    <div class="fasilitas-content">

                        <span class="emoji">
                            💧
                        </span>

                        <h3>
                            Tempat Wudhu
                        </h3>

                        <p>
                            Fasilitas tempat wudhu yang disediakan
                            untuk menunjang kebutuhan jamaah
                            sebelum melaksanakan ibadah.
                        </p>

                    </div>

                </div>


                <!-- TOILET -->

                <div class="fasilitas">

                    <img
                        src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                        alt="Toilet Masjid Besar Ciparay"
                        class="fasilitas-img"
                    >

                    <div class="fasilitas-content">

                        <span class="emoji">
                            🚻
                        </span>

                        <h3>
                            Toilet
                        </h3>

                        <p>
                            Fasilitas toilet yang dapat digunakan
                            oleh jamaah selama berada di lingkungan
                            Masjid Besar Ciparay.
                        </p>

                    </div>

                </div>


                <!-- AREA PARKIR -->

                <div class="fasilitas">

                    <img
                        src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                        alt="Area Parkir Masjid Besar Ciparay"
                        class="fasilitas-img"
                    >

                    <div class="fasilitas-content">

                        <span class="emoji">
                            🚗
                        </span>

                        <h3>
                            Area Parkir
                        </h3>

                        <p>
                            Area parkir yang digunakan untuk
                            kendaraan jamaah dan pengunjung
                            Masjid Besar Ciparay.
                        </p>

                    </div>

                </div>


                <!-- FASILITAS PENDIDIKAN -->

                <a
                    href="{{ url('/fasilitas/pendidikan') }}"
                    class="fasilitas-link"
                >

                    <div class="fasilitas">

                        <img
                            src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                            alt="Fasilitas Pendidikan Masjid Besar Ciparay"
                            class="fasilitas-img"
                        >

                        <div class="fasilitas-content">

                            <span class="emoji">
                                📚
                            </span>

                            <h3>
                                Fasilitas Pendidikan
                            </h3>

                            <p>
                                Fasilitas pendidikan yang mendukung
                                kegiatan pembelajaran dan pembinaan
                                keislaman bagi santri.
                            </p>

                            <span class="klik">
                                Lihat Selengkapnya →
                            </span>

                        </div>

                    </div>

                </a>


                <!-- PERLENGKAPAN KEGIATAN -->

                <div class="fasilitas">

                    <img
                        src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                        alt="Perlengkapan Kegiatan Masjid Besar Ciparay"
                        class="fasilitas-img"
                    >

                    <div class="fasilitas-content">

                        <span class="emoji">
                            🎤
                        </span>

                        <h3>
                            Perlengkapan Kegiatan
                        </h3>

                        <p>
                            Berbagai perlengkapan yang digunakan
                            untuk mendukung kegiatan keagamaan
                            dan kemasyarakatan di masjid.
                        </p>

                    </div>

                </div>


            </div>

        </section>


        <!-- =========================
             PENGURUS
        ========================= -->

        <section class="card">

            <h2 class="card-title">
                Pengurus Masjid
            </h2>

            <p>
                Pengelolaan Masjid Besar Ciparay didukung oleh
                pengurus yang berperan dalam mengelola kegiatan
                ibadah, pendidikan, sosial dan kemasyarakatan.
            </p>

            <div class="pengurus-grid">

                <div class="pengurus">

                    <div class="icon">
                        👤
                    </div>

                    <h3>
                        Ketua DKM
                    </h3>

                    <p>
                        Pengelolaan dan koordinasi kegiatan masjid.
                    </p>

                </div>


                <div class="pengurus">

                    <div class="icon">
                        📋
                    </div>

                    <h3>
                        Sekretaris
                    </h3>

                    <p>
                        Administrasi dan dokumentasi kegiatan.
                    </p>

                </div>


                <div class="pengurus">

                    <div class="icon">
                        💰
                    </div>

                    <h3>
                        Bendahara
                    </h3>

                    <p>
                        Pengelolaan keuangan dan dana kegiatan.
                    </p>

                </div>

            </div>

        </section>


        <!-- =========================
             PENUTUP
        ========================= -->

        <section class="closing">

            <h2>
                Masjid Besar Ciparay
            </h2>

            <p>
                Bersama membangun masjid sebagai pusat ibadah,
                pendidikan, silaturahmi dan kemaslahatan masyarakat.
            </p>

        </section>


    </main>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        © 2026 Masjid Besar Ciparay.
        Pusat kegiatan keislaman dan kemasyarakatan.

    </footer>


</body>
</html>
```
