<?php
// Koneksi ke database
include '../config.php';

// Query untuk mengambil semua data dari tabel 'kata'
$query = "SELECT * FROM kata ORDER BY kata ASC";
$result = $koneksi->query($query);

// Siapkan array untuk menyimpan data
$data = [];

// Ambil setiap baris dan masukkan ke dalam array
while ($row = $result->fetch_assoc()) {
    $data[] = [
        'id' => $row['id'],
        'kata' => $row['kata'],
        'arti' => $row['arti'],
        'contoh' => $row['contoh'],
        'created_at' => $row['created_at']
    ];
}

// Ubah array menjadi format JSON dan tampilkan
header('Content-Type: application/json');
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>