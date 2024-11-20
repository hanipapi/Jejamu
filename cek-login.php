<?php
session_start();

include 'cn.php'; // Pastikan file koneksi database Anda benar

// DECLARATION
$email = $_POST['email'];
$password = $_POST['password'];

// QUERY
$query = mysqli_query($cn, "SELECT * FROM profil WHERE email='$email' AND password='$password'");
$data = mysqli_fetch_assoc($query); // Ambil data pengguna jika ada

// Verifikasi
if ($data) { // Jika pengguna ditemukan
    // Set variabel sesi dengan informasi pengguna
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $data['email'];
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['tanggallahir'] = $data['tanggallahir'];
    $_SESSION['jeniskelamin'] = $data['jeniskelamin'];
    $_SESSION['golongandarah'] = $data['golongandarah'];

    // Redirect ke halaman akun
    header("Location: index.php");
    exit();
} else {
    // Jika login gagal
    header("Location: login.php?pesan=login_gagal");
    exit();
}
?>