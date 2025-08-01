<?php
// Simpan komentar ke file (atau nanti bisa ke database)
$pesanTerkirim = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $komentar = htmlspecialchars($_POST['komentar']);

    // Simpan ke file (atau bisa ke DB)
    $data = "$nama: $komentar\n";
    file_put_contents("komentar.txt", $data, FILE_APPEND);
    $pesanTerkirim = true;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Diskusi Kamus</title>
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9fafb;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 700px;
        margin: 50px auto;
        background: white;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        border-radius: 10px;
    }

    h2 {
        text-align: center;
        color: #1f2937;
    }

    form {
        margin-top: 20px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #d1d5db;
        border-radius: 5px;
    }

    button {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #3b82f6;
        border: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .komentar {
        margin-top: 30px;
    }

    .komentar-item {
        border-bottom: 1px solid #e5e7eb;
        padding: 10px 0;
    }

    .wa-link {
        display: inline-block;
        margin-top: 20px;
        background-color: #25d366;
        color: white;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
    }

    .alert {
        background: #d1fae5;
        color: #065f46;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php include'navbar.php'?>
    <div class="container">
        <h2>Diskusi Kamus Bahasa Wolio</h2>

        <?php if ($pesanTerkirim): ?>
        <div class="alert">Komentar Anda berhasil dikirim!</div>
        <?php endif; ?>

        <form action="diskusi.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Anda" required>
            <textarea name="komentar" rows="4" placeholder="Tulis komentar Anda..." required></textarea>
            <button type="submit">Kirim Komentar</button>
        </form>

        <a href="https://wa.me/6281234567890" target="_blank" class="wa-link">Diskusi via WhatsApp</a>

        <div class="komentar">
            <h3>Komentar Sebelumnya:</h3>
            <?php
        if (file_exists("komentar.txt")) {
            $komentarList = array_reverse(file("komentar.txt"));
            foreach ($komentarList as $komentar) {
                echo "<div class='komentar-item'>" . nl2br(htmlspecialchars($komentar)) . "</div>";
            }
        } else {
            echo "<p>Belum ada komentar.</p>";
        }
        ?>
        </div>
    </div>
    <?php include'footer.php'?>
</body>

</html>