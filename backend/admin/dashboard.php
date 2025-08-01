<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include '../config.php';

$kata = isset($_GET['kata']) ? $_GET['kata'] : '';
$query = mysqli_query($koneksi, "SELECT * FROM kata WHERE kata LIKE '%$kata%' ORDER BY id DESC");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        /* min-height: 100vh; */
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        /* display: flex;
        flex-direction: column; */
    }

    .container {
        max-width: 960px;
        margin: 40px auto;
        background: #fff;
        padding: 80px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        border-radius: 12px;
    }

    header {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    #search {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        max-width: 250px;
    }

    h1 {
        font-size: 24px;
        color: #222;
        margin: 0;
    }

    h2 {
        font-size: 16px;
        color: #555;
        margin: 10px 0 0;
    }

    .btn {
        display: inline-block;
        background: #f53d2d;
        color: white;
        padding: 10px 18px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.2s ease;
        margin-left: 10px;
    }

    .btn:hover {
        background: #c92a1d;
    }

    .btn-success {
        display: inline-block;
        background: #69c402ff;
        color: white;
        padding: 10px 18px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.2s ease;
        margin-left: 10px;
    }

    .btn-success:hover {
        background: #0b6701ff;
    }

    .btn-out {
        display: inline-block;
        background: #3b3b39ff;
        color: white;
        padding: 10px 18px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.2s ease;
        margin-left: 10px;
    }

    .btn-out:hover {
        background: #0e0e0eff;
    }

    form {
        flex-basis: 100%;
        margin-top: 15px;
    }

    #search {
        padding: 10px;
        width: 100%;
        max-width: 300px;
        border: 1px solid #ccc;
        border-radius: 6px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 15px;
    }

    th {
        background: #fafafa;
        padding: 12px;
        border-bottom: 2px solid #eee;
        text-align: left;
        color: #333;
    }

    td {
        padding: 12px;
        border-bottom: 1px solid #eee;
    }

    .jaksi {
        display: inline-block;
        left: 1rem;
        position: relative;
        justify-content: end;
    }

    .aksi a {
        display: block;
        padding: 6px 11px;
        font-size: 13px;
        border-radius: 4px;
        left: 1rem;
        position: relative;
        color: white;
        text-decoration: none;
    }

    .edit {
        background: #00bfa5;

    }

    .hapus {
        background: #ff5252;
        margin-top: 10px;
    }

    .edit:hover {
        background: #009e88;
    }

    .hapus:hover {
        background: #d73333;
    }

    .contoh {
        margin: 10px 9.6em;
        display: inline-block;
    }

    @media (max-width: 600px) {
        header {
            flex-direction: column;
            align-items: flex-start;
        }

        .btn,
        .btn btn-success {
            margin-top: 10px;
        }
    }
    </style>
</head>

<body>
    <?php include 'navbar-admin.php'; ?>
    <div class="container">
        <header>
            <div>
                <h1>Dashboard Admin</h1>
                <h2>Selamat Datang, <?= htmlspecialchars($_SESSION['admin']) ?>!</h2>
            </div>
            <div>
                <a href="tambah.php" class="btn">+ Tambah Kata</a>
                <a href="upload.php" class="btn btn-success">Import CSV</a>
                <a href="logout.php" class="btn-out">Logout</a>
            </div>
            <form method="GET">
                <input type="text" id="search" name="kata" placeholder="Cari kata..."
                    value="<?= htmlspecialchars($kata) ?>">
            </form>
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kata</th>
                    <th>Arti</th>
                    <th>Pengunaan</th>
                    <th class="jaksi">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['kata']) ?></td>
                    <td><?= htmlspecialchars($row['arti']) ?></td>
                    <td class="contoh"><?= htmlspecialchars($row['contoh']) ?></td>
                    <td class="aksi">
                        <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')"
                            class="hapus">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>