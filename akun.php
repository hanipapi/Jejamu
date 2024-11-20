<?php
session_start();
include 'cn.php';
if (empty($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("location:index.php?pesan=belum_login");
    exit();
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Jejejamu</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <img src="asset/logo1.png" alt="Jejamu" width="auto" height="50">
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                    <li><a href="akun.php"><img src="asset/profile-icon.jpg" alt="Profil" width="30" height="30">Akun</a>
                    </li>
                <?php else: ?>
                    <li><a href="login.php" class="nav__btn">Masuk</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <div class="box">
            <div class="box-content">
                <div class="col">
                    <div class="logo">
                        <img src="asset/logo1.png" alt="Jejamu">
                    </div>
                    <div class="judul">
                        <h4>Profil Pengguna</h4>
                    </div>
                    <div class="info">
                        <p>Email : <?= $_SESSION['email']; ?></p>
                        <p>ID : <?= $_SESSION['id']; ?></p>
                        <p>Nama : <?= $_SESSION['nama']; ?></p>
                        <p>Tanggal Lahir : <?= $_SESSION['tanggallahir']; ?></p>
                        <p>Golongan Darah : <?= $_SESSION['golongandarah']; ?></p>
                        <p>Jenis Kelamin : <?= $_SESSION['jeniskelamin']; ?></p>
                    </div>
                    <div class="teks-tengah">
                        <a href="logout.php" class="tombol-login">Logout</a>
                        <a class="tombol-login" href="update_profil.php?id=<?= $_SESSION['id'] ?>">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!--Footer -->
    <footer class="site-footer">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Jejamu<i> Tentang Kami </i> Jejamu adalah perusahaan yang didirikan dengan visi
                    melestarikan tradisi jamu di Indonesia dan memperkenalkannya kepada dunia. Kami menawarkan berbagai
                    macam produk jamu tradisional dan modern yang terbuat dari bahan-bahan alami pilihan, diolah dengan
                    teknologi terkini untuk memastikan kualitas dan keamanan produk.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Contact</h6>
                <ul class="footer-links">
                    <li>Email: info@jejamu.com</li>
                    <li>Phone: 123-456-7890</li>
                    <li>Address: Jl. Jamu Sehat No. 123, Jakarta</li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Keranjang</a></li>
                    <li><a href="#">Informasi</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright © 2024 All Rights Reserved by
                    <a href="#">Jejamu</a>.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>