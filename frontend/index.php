<?php
include '../backend/config.php';

$keyword = isset($_GET['search']) ? trim($_GET['search']) : '';
$escaped = mysqli_real_escape_string($koneksi, $keyword);

$query = "SELECT * FROM kata";
if (!empty($escaped)) {
    $query .= " WHERE kata = '$escaped'";
}
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kamus Bahasa Wolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
        background: #f7f7f7;
        color: #333;
    }

    header {
        background-color: #4B0082;
        color: white;
        padding: 20px;
        text-align: center;
    }

    header h1 {
        margin: 0 0 10px;
    }

    header form {
        margin-top: 10px;
    }

    header input[type="text"] {
        padding: 10px;
        width: 90%;
        max-width: 400px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
    }

    main {
        padding: 20px;
    }

    .card {
        background: white;
        border-radius: 10px;
        padding: 15px;
        margin: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    #kata-hari-ini {
        max-width: 500px;
        margin: 0 auto 30px;
        text-align: center;
    }

    .grid-kata {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 15px;
    }

    #loader {
        position: fixed;
        width: 100%;
        height: 100%;
        background: white;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .spinner {
        width: 40px;
        height: 40px;
        border: 5px solid #ccc;
        border-top-color: #4B0082;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    @media (max-width: 600px) {
        header input[type="text"] {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <div id="loader">
        <div class="spinner"></div>
    </div>

    <?php include 'navbar.php'; ?>

    <header>
        <h1>Kamus Bahasa Wolio</h1>
        <form method="GET" action="index.php">
            <input type="text" id="search" name="search" placeholder="Cari kata..."
                value="<?= htmlspecialchars($keyword) ?>">
        </form>
    </header>

    <main>
        <?php if (empty($keyword)): ?>
        <section id="kata-hari-ini" class="card">
            <h2>Kata Hari Ini</h2>
            <div id="kata-hari">
                <?php
                $randomQuery = mysqli_query($koneksi, "SELECT * FROM kata ORDER BY RAND() LIMIT 1");
                if ($randomData = mysqli_fetch_assoc($randomQuery)) {
                    echo "<strong>" . htmlspecialchars($randomData['kata']) . "</strong><br>";
                    echo "<em>" . htmlspecialchars($randomData['arti']) . "</em><br>";
                    echo "<small>Contoh: " . htmlspecialchars($randomData['contoh']) . "</small>";
                } else {
                    echo "Belum ada data.";
                }
                ?>
            </div>
        </section>
        <?php endif; ?>

        <section id="semua-kata">
            <h2><?= empty($keyword) ? 'Semua Kata' : 'Hasil Pencarian' ?></h2>
            <?php if (mysqli_num_rows($result) > 0): ?>
            <div class="grid-kata">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="card">
                    <strong><?= htmlspecialchars($row['kata']) ?></strong><br>
                    <em><?= htmlspecialchars($row['arti']) ?></em><br>
                    <small>Contoh: <?= htmlspecialchars($row['contoh']) ?></small>
                </div>
                <?php endwhile; ?>
            </div>
            <?php else: ?>
            <p>Tidak ditemukan kata yang cocok.</p>
            <?php endif; ?>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
    window.addEventListener("load", function() {
        document.getElementById("loader").style.display = "none";
    });

    function toggleMenu() {
        document.getElementById('nav-links').classList.toggle('show');
    }
    </script>
</body>

</html>