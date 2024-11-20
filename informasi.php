<?php
session_start(); // Mulai sesi
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi - Jejamu</title>
    <!-- style -->
    <link rel="stylesheet" href="style.css">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    < script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </script>
</head>

<body>


    <!-- infromasi -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kumpulan Berita Jamu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- NAVBAR -->
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
                    <li><a href="akun.php"><img src="asset/profile-icon.jpg" alt="Profil" width="30"
                                height="30">Akun</a>
                    </li>
                    <?php else: ?>
                    <li><a href="login.php" class="nav__btn">Masuk</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>
        <!-- Halaman Berita -->
        <div class="container">
            <h1>Kumpulan Berita Jamu</h1>
            <div class="row">
                <!-- Berita 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://akcdn.detik.net.id/community/media/visual/2021/06/27/jamu-godogan-langganan-jokowi_169.jpeg?w=700&q=90"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Anak Muda Diajak Lestarikan Jamu Usai Diakui UNESCO sebagai Warisan
                                Budaya</h5>
                            <p class="card-text">Surabaya - Pada 6 Desember 2023, UNESCO telah mengakui Jamu sebagai
                                warisan budaya
                                Indonesia. Karena telah diakui sebagai warisan budaya, anak muda Indonesia harus turut
                                melestarikan dengan cara meminum jamu.</p>
                            <a href="https://www.detik.com/jatim/budaya/d-7120738/anak-muda-diajak-lestarikan-jamu-usai-diakui-unesco-sebagai-warisan-budaya"
                                target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://akcdn.detik.net.id/community/media/visual/2019/11/24/b3a0b129-7bf3-4346-bdf8-555803b695b6_169.jpeg?w=700&q=90"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">8 Jamu Tradisional, Si Pahit yang Kaya Manfaat Bagi Tubuh</h5>
                            <p class="card-text">Surabaya - Jamu adalah obat tradisional yang telah dikonsumsi
                                secara
                                turun-temurun oleh masyarakat Indonesia. Bahkan, jamu menjadi salah satu warisan budaya
                                Indonesia.</p><br><br>
                            <a href="https://www.detik.com/jatim/kuliner/d-7065590/8-jamu-tradisional-si-pahit-yang-kaya-manfaat-bagi-tubuh"
                                target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://akcdn.detik.net.id/community/media/visual/2023/04/27/obat-herbal_169.jpeg?w=700&q=90"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mau Kurus? Ini 10 Jamu Tradisional untuk Menurunkan Berat Badan</h5>
                            <p class="card-text">Jakarta - Memiliki bentuk tubuh langsing menjadi hal yang banyak jadi
                                idaman setiap orang, khususnya wanita. Ada berbagai usaha mendapatkan badan yang
                                langsing dan ideal.</p><br>
                            <a href="https://food.detik.com/info-sehat/d-6883869/mau-kurus-ini-10-jamu-tradisional-untuk-menurunkan-berat-badan"
                                target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://akcdn.detik.net.id/visual/2022/01/04/ilustrasi-kunyit_169.jpeg?w=715&q=90"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ramuan Herbal Peningkat Imun Ala Jokowi Diungkap Koki Istana</h5>
                            <p class="card-text">Jakarta, CNBC Indonesia - Presiden Joko Widodo atau Jokowi memiliki
                                rahasia dalam menjaga daya tahan tubuhnya dengan mengonsumsi jamu.
                                Melansir akun YouTube resmi Presiden Joko Widodo beberapa waktu lalu, juru masak Istana,
                                Tri Supriharjo membeberkan resep ramuan..</p>
                            <a href="https://www.cnbcindonesia.com/lifestyle/20240229083036-33-518501/ramuan-herbal-peningkat-imun-ala-jokowi-diungkap-koki-istana"
                                target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://akcdn.detik.net.id/visual/2023/08/06/pabrik-jamu-jago_169.jpeg?w=715&q=90"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jamu Jago Bangun Pabrik Baru, Teknologinya Canggih</h5>
                            <p class="card-text">Jakarta, CNBC Indonesia - PT. Industri Djamu dan Pharmasi Tjap Djago
                                (Jamu Jago) mengumumkan langkah maju mereka dengan pengawalan pembangunan pabrik baru
                                yang berlokasi di Ngempon, Bergas, Kabupaten Semarang. Acara pengawalan pembangunan
                                tersebut sebagai bentuk komitmen Jamu Jago...
                            </p>
                            <a href="https://www.cnbcindonesia.com/entrepreneur/20230805061656-25-460393/jamu-jago-bangun-pabrik-baru-teknologinya-canggih"
                                target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://akcdn.detik.net.id/visual/2020/02/20/d3edc6db-fd03-4cd3-bf06-756338fe1b3a_169.jpeg?w=715&q=90"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Laba Sido Muncul Stagnan, Efek Penjualan Tolak Angin?</h5>
                            <p class="card-text">Jakarta, CNBC Indonesia - Emiten produsen Tolak Angin, PT Industri Jamu
                                dan Farmasi Sido Muncul Tbk. (SIDO) membukukan laba bersih Rp300,27 miliar pada kuartal
                                pertama tahun 2023. Jumlah ini naik 1,77% dari perolehan laba bersih periode yang sama
                                setahun sebelumnya sebesar Rp 295,03 miliar.</p>
                            <a href="https://www.cnbcindonesia.com/market/20230428142547-17-433084/laba-sido-muncul-stagnan-efek-penjualan-tolak-angin"
                                target="_blank" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer -->
        <footer class="site-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Jejamu<i> Tentang Kami </i> Jejamu adalah perusahaan yang didirikan dengan
                        visi
                        melestarikan tradisi jamu di Indonesia dan memperkenalkannya kepada dunia. Kami menawarkan
                        berbagai
                        macam produk jamu tradisional dan modern yang terbuat dari bahan-bahan alami pilihan, diolah
                        dengan
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

</body>

</html>