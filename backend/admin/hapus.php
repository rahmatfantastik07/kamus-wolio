<?php
session_start();
include '../../config.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM kata WHERE id=$id");
header("Location: dashboard.php");
?>