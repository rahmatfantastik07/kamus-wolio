<?php
include '../config.php';

$query = "SELECT * FROM kata ORDER BY kata ASC";
$result = $koneksi->query($query);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>