<?php
session_start();
include '../config.php'; // sesuaikan path file koneksi

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
    
    if ($query && mysqli_num_rows($query) == 1) {
        $data = mysqli_fetch_assoc($query);
        
        if (password_verify($password, $data['password'])) {
            $_SESSION['admin'] = $data['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Login gagal. Username atau password salah.";
        }
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>