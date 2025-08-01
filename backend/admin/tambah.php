<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kata = htmlspecialchars(trim($_POST['kata']));
    $arti = htmlspecialchars(trim($_POST['arti']));
    $contoh = htmlspecialchars(trim($_POST['contoh']));

    if (!empty($kata) && !empty($arti) && !empty($contoh)) {
        $query = "INSERT INTO kata (kata, arti, contoh) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "sss", $kata, $arti, $contoh);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>
                alert('✅ Data berhasil ditambahkan!');
                window.location.href = 'dashboard.php';
            </script>";
            exit;
        } else {
            echo "<script>alert('❌ Gagal menambahkan data!');</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('⚠️ Semua kolom wajib diisi.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kata</title>
    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f9f9f9;
        padding: 40px;
    }

    .form-container {
        background: white;
        width: 100%;
        max-width: 500px;
        margin: auto;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        border-radius: 10px;
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    input[type=text],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: white;
        padding: 12px;
        width: 100%;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0069d9;
    }
    </style>
    <script>
    function validateForm() {
        const kata = document.forms["formTambah"]["kata"].value.trim();
        const arti = document.forms["formTambah"]["arti"].value.trim();
        const contoh = document.forms["formTambah"]["contoh"].value.trim();

        if (kata === "" || arti === "" || contoh === "") {
            alert("⚠️ Semua kolom harus diisi.");
            return false;
        }
        return true;
    }
    </script>
</head>

<body>
    <div class="form-container">
        <h2>Tambah Kosakata</h2>
        <form name="formTambah" method="POST" action="tambah.php" onsubmit="return validateForm()">
            <label for="kata">Kata:</label>
            <input type="text" name="kata" id="kata" required>

            <label for="arti">Arti:</label>
            <input type="text" name="arti" id="arti" required>

            <label for="contoh">Contoh:</label>
            <textarea name="contoh" id="contoh" rows="4" required></textarea>

            <button type="submit">Tambah</button>
        </form>
    </div>
</body>

</html>