<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kata Pengantar</title>
    <style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        display: flex;
        flex-direction: column;
    }

    .content-container {
        flex: 1;
        max-width: 800px;
        margin: 40px auto;
        padding: 20px 30px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        line-height: 1.8;
        text-align: justify;
    }

    .section-title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .italic {
        font-style: italic;
        margin-top: 20px;
    }

    .author-info {
        margin-top: 30px;
        text-align: right;
    }

    footer {
        background-color: #004085;
        color: white;
        text-align: center;
        padding: 15px;
        font-size: 0.9rem;
    }
    </style>
</head>

<body>

    <!-- Konten -->
    <main class="content-container">
        <h1 class="section-title">KATA PENGANTAR</h1>

        <p>
            Penyusunan <strong>Kamus Wolio–Indonesia</strong> ini telah dilakukan dalam rangka merealisasikan salah satu
            saran Seminar Politik Bahasa Nasional tahun 1975 di bidang bahasa daerah yang diselenggarakan oleh Pusat
            Pembinaan dan Pengembangan Bahasa, Departemen Pendidikan dan Kebudayaan, melalui Proyek Pengembangan Bahasa
            dan
            Sastra Indonesia dan Daerah.
        </p>

        <p>
            Pusat Bahasa Universitas Hasanuddin, Ujung Pandang, sangat berbesar hati karena diajak serta ikut
            merealisasikan
            keputusan Seminar Politik Bahasa Nasional itu melalui penyusunan kamus bahasa daerah Wolio–Indonesia,
            sebagaimana tercantum dalam Surat Keputusan Pemimpin Proyek No. 31/SK/1980 tertanggal 30 November 1980.
        </p>

        <p>
            Bahasa Wolio yang merupakan salah satu bahasa daerah di Nusantara terdapat di Pulau Buton, bagian dari
            Provinsi
            Sulawesi Tenggara. Kabupaten Buton, dengan ibukotanya Bau-Bau, memiliki sekitar 350.000 jiwa penduduk. Meski
            tidak seluruh penduduknya adalah penutur bahasa Wolio, bahasa ini memiliki peran dominan sebagai bahasa
            komunikasi utama di wilayah tersebut.
        </p>

        <p>
            Bahasa Wolio kaya akan tradisi sastra lisan maupun tulisan. Sastra tulis Wolio umumnya ditulis dalam aksara
            Arab,
            yang disebut masyarakat sebagai aksara Wolio. Bentuk-bentuk sastra tersebut meliputi surat perjanjian, prosa
            filsafat, hukum kesultanan, dan ceritera rakyat. Beberapa contoh karya sastra prosa antara lain:
            <em>Bulamaling</em>, <em>Indo Malussa</em>, <em>Kalukubtinda</em>, dan <em>Kaokabi</em>.
        </p>

        <p>
            Bahasa Wolio bersifat vokalis (seluruh katanya berakhir dengan vokal), dengan pola sintaksis S–P atau S–P–O,
            meski
            pola P–S juga ditemukan. Bahasa ini memiliki 30 konsonan, 5 vokal, dan 11 diftong (lihat peta fonem).
        </p>

        <p>
            Kami menyadari bahwa kamus ini masih memiliki banyak kekurangan. Namun demikian, kami berharap kekurangan
            tersebut dapat menjadi pendorong bagi tim penyusun selanjutnya untuk menyempurnakannya.
        </p>

        <p>
            Ucapan terima kasih kami sampaikan kepada Pemimpin Proyek Pengembangan Bahasa dan Sastra Indonesia dan
            Daerah,
            serta kepada Rektor Universitas Hasanuddin yang telah memberikan restu melalui surat No. 5484/A31.01/80
            tertanggal
            27 September 1980.
        </p>

        <p>
            Kami juga mengucapkan terima kasih kepada Pemerintah Daerah Tingkat I Provinsi Sulawesi Tenggara di Kendari
            dan
            Pemerintah Daerah Tingkat II Kabupaten Buton di Bau-Bau atas fasilitas yang diberikan selama proses
            penyusunan
            kamus ini.
        </p>

        <p class="italic">
            Semoga <strong>Kamus Wolio–Indonesia</strong> ini bermanfaat sebagai sumbangsih dalam bidang kebahasaan
            untuk generasi kini dan mendatang.
        </p>

        <div class="author-info">
            <p>Penanggung Jawab</p>
            <p>Ujung Pandang, Januari 1982</p>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>

</html>