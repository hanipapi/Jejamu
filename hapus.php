<?php
include "cn.php"; // menyambung dengan database
session_start(); // Mulai sesi
// Memastikan id_cart ada di URL sebelum mengaksesnya
if (isset($_GET['id_cart'])) {
    $keranjang = $_GET['id_cart']; // mengambil var id

    // Melakukan query delete
    $query = mysqli_query($cn, "DELETE FROM keranjang WHERE id_cart=$keranjang");
    $result_message = $query ? "Data Anda Berhasil Dihapus!" : "Data Anda Gagal Dihapus!";
    $link_text = $query ? "Klik disini untuk melihat data" : "Klik disini untuk mencoba lagi";
} else {
    $result_message = "ID keranjang tidak ditemukan!";
    $link_text = "Klik disini untuk kembali";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Hapus Keranjang</title>
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
                <h5 class="card-title">Proses Hapus Keranjang</h5>
                <p class="card-text"><?php echo $result_message; ?></p>
                <a href="keranjang.php" class="btn btn-primary"><?php echo $link_text; ?></a>
            </div>
        </div>
    </div>
</body>

</html>