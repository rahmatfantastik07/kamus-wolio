<?php
$target_dir = "data/";
$target_file = $target_dir . "kamus.csv";

// Cek apakah file valid CSV
if (isset($_FILES["csv_file"]) && $_FILES["csv_file"]["type"] == "text/csv") {
    if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $target_file)) {
        echo "<script>alert('CSV berhasil diunggah dan diganti!'); window.location.href='kamus.php';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah file.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('File tidak valid. Harus berformat CSV.'); window.history.back();</script>";
}
?>