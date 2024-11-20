<?php
include ("cn.php");
session_start(); // Mulai sesi
$id_cart = $_POST['id_cart'];
$total = $_POST['total'];

$query = mysqli_query($cn, "UPDATE keranjang SET total='$total' WHERE id_cart=$id_cart");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Edit Jumlah</title>
    <link rel="stylesheet" href="detail.css">
</head>

<body>
    <!-- Nav -->
    <header>
        <img src="asset/logo1.png" alt="Jejamu" width="auto" height="50">
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <li><a href="akun.php"><img src="asset/profile-icon.jpg" alt="Profil" width="50">Akun</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="nav__btn">Masuk</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- Notification -->
    <div class="centered-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proses Edit Jumlah</h5>
                <?php if ($query): ?>
                    <p class="card-text">Proses update berhasil!</p>
                    <a href="keranjang.php" class="btn btn-primary">Lihat Data</a>
                <?php else: ?>
                    <p class="card-text">Proses update gagal. Silakan coba lagi.</p>
                    <a href="keranjang.php" class="btn btn-primary">Update Lagi</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>