<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hak Cipta</title>
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

    .copyright-container {
        max-width: 800px;
        margin: 60px auto;
        padding: 30px;
        background-color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        line-height: 1.7;
        font-size: 16px;
        color: #333;
    }

    .copyright-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #D6242B;
    }

    @media (max-width: 600px) {
        .copyright-container {
            padding: 20px;
            margin: 30px 10px;
        }
    }
    </style>
</head>

<body>

    <div class="copyright-container">
        <h2>Hak Cipta</h2>
        <p style="text-align: center;">
            Hak Cipta pada Departemen Pendidikan dan Kebudayaan<br>
            <strong>Penyunting:</strong> Ipon S. Purawidjaja<br><br>

            <strong>Cetakan Pertama</strong><br>
            Naskah buku ini, yang semula merupakan hasil Proyek Pengembangan
            Bahasa dan Sastra Indonesia dan Daerah tahun 1981/1982, diterbitkan
            dengan dana Proyek Pengembangan Bahasa dan Sastra Indonesia.<br><br>

            <strong>Staf Inti Proyek</strong><br>
            Drs. Tony S. Rachmadie (Pemimpin), Sainidjo (Bendaharawan), Drs. S.R.H.
            Sitanggang (Sekretaris), Drs. S. Amran Tasai, Drs. A. Patoni, Dra. Siti Zahra
            Yundiafi, dan Drs. E. Zainal Arifin (Asisten).<br><br>

            Sebagian atau seluruh isi buku ini dilarang diperbanyak dalam bentuk
            apa pun tanpa izin tertulis dari penerbit, kecuali dalam hal kutipan
            untuk keperluan penulisan artikel atau karangan ilmiah.<br><br>

            <strong>Alamat Penerbit</strong><br>
            Pusat Pembinaan dan Pengembangan Bahasa<br>
            Jalan Daksinapati Barat IV, Rawamangun<br>
            Jakarta 13220
        </p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>