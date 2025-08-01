<?php
include '../config.php'; // ganti path ini sesuai lokasi koneksi

$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT); // Password: admin123

$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
if (mysqli_query($koneksi, $sql)) {
    echo "Admin berhasil ditambahkan.";
} else {
    echo "Gagal: " . mysqli_error($koneksi);
}
?>