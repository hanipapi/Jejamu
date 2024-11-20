<?php
session_start(); // Mulai sesi
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Jejamu</title>
    <!-- style -->
    <link rel="stylesheet" href="style.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                <li><a href="keranjang.php">Keranjang</a></li>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <li><a href="akun.php"><img src="asset/profile-icon.jpg" alt="Profil" width="30" height="30">Akun</a>
                </li>
                <?php else: ?>
                <li><a href="login.php" class="nav__btn">Masuk</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- About Section -->
    <main>
        <section class="about-section">
            <div class="container">
                <h1 class="title">Tentang Jejamu</h1>
                <div class="card about-card">
                    <p class="description" align="justify">
                        JejaMu adalah sebuah website yang dibangun sebagai proyek akhir praktikum pemrograman web dasar.
                        Website ini bertujuan untuk mengedukasi dan melestarikan budaya minum jamu di Indonesia. Nama
                        "JejaMu" sendiri merupakan gabungan dari kata "jejamu" yang berarti jamu-jamuan dan kata "-mu"
                        yang menunjukkan kepemilikan.

                        Website ini menyajikan informasi tentang jamu, termasuk jenis-jenis jamu, bahan-bahan yang
                        digunakan, dan manfaatnya bagi kesehatan. Pengguna dapat mendaftar dan login untuk mengakses
                        fitur-fitur tertentu, seperti melihat profil pengguna, melakukan pemesanan jamu, dan mengedit
                        informasi profil. Terdapat juga fitur untuk mengelola keranjang belanja, di mana pengguna dapat
                        melihat pesanan yang telah dibuat, mengubah jumlah pesanan, dan melakukan checkout.

                        Selain itu, JejaMu juga menyediakan informasi tentang tim pengembangnya dan deskripsi singkat
                        mengenai website tersebut. Pengguna dapat mengakses semua fitur dan informasi yang disediakan
                        oleh JejaMu untuk memperoleh pemahaman yang lebih baik mengenai jamu dan
                        manfaatnya bagi kesehatan.
                    </p>
                </div>
                <h2 class="subtitle">Developer Kami</h2>
                <div class="developers">
                    <div class="developer">
                        <img src="asset/developer1.jpg" alt="Developer 1" class="developer-img">
                        <h3 class="developer-name">Hanif Afifudin</h3>
                        <p class="developer-role">Role: Front-end Developer</p>
                        <p class="developer-bio">Developer 1 sedang belajar terkait pengembangan front-end dan
                            bersemangat tentang desain antarmuka pengguna yang intuitif.</p>
                        <div class="developer-links">
                            <a href="https://www.instagram.com/h.nfudi" target="_blank">Instagram</a>
                            <a href="https://www.linkedin.com/in/hanif-afifudin/" target="_blank">LinkedIn</a>
                        </div>
                    </div>
                    <div class="developer">
                        <img src="asset/developer2.jpg" alt="Developer 2" class="developer-img">
                        <h3 class="developer-name">Muhammad Faza Khayyuna</h3>
                        <p class="developer-role">Role: Back-end Developer</p>
                        <p class="developer-bio" align="justify">Developer 2 adalah seorang yang sedang belajar dalam
                            pengembangan
                            back-end dengan
                            fokus pada keamanan dan efisiensi sistem.</p>
                        <div class="developer-links">
                            <a href="https://www.instagram.com/khyyn_n" target="_blank">Instagram</a>
                            <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="about.php">Tentang Kami</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                    <li><a href="keranjang.php">Keranjang</a></li>
                    <li><a href="#">Informasi</a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright © 2024 All Rights Reserved by
                    <a href="about.php">Jejamu</a>.
                </p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>