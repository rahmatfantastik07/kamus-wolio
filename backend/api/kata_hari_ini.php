<?php
include '../config.php';

// Ambil total jumlah kata
$result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM kata");
$data = mysqli_fetch_assoc($result);
$total = $data['total'];

// Tentukan indeks berdasarkan hari
$hari_ini = date('Y-m-d');
$index = crc32($hari_ini) % $total;

// Ambil kata sesuai index
$result_kata = mysqli_query($koneksi, "SELECT * FROM kata LIMIT 1 OFFSET $index");
$kata = mysqli_fetch_assoc($result_kata);

// Tampilkan dalam format JSON
header('Content-Type: application/json');
echo json_encode($kata, JSON_UNESCAPED_UNICODE);
?>