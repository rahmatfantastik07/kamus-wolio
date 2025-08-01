<?php
session_start();
include '../config.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM kata WHERE id=$id"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $kata = $_POST['kata'];
  $arti = $_POST['arti'];
  $contoh = $_POST['contoh'];
  mysqli_query($koneksi, "UPDATE kata SET kata='$kata', arti='$arti', contoh='$contoh' WHERE id=$id");
  header("Location: dashboard.php");
  exit;
}
?>
<form method="post">
    <h2>Edit Kata</h2>
    <input type="text" name="kata" value="<?= $data['kata'] ?>" required><br><br>
    <textarea name="arti" required><?= $data['arti'] ?></textarea><br><br>
    <textarea name="contoh"><?= $data['contoh'] ?></textarea><br><br>
    <button type="submit">Simpan</button>
</form>