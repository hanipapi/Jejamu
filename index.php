<?php
session_start(); // Mulai sesi
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
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

    <main>
        <!-- Halaman 1 -->
        <div class="bg-image">
            <section class="container">
                <div class="content__container">
                    <h1>
                        Jejamu<br />
                        <span class="heading__1">Kesehatan </span><br />
                        <span class="heading__2">Itu Nomer Satu</span>
                    </h1>
                    <p>
                        Jejamu adalah solusi kesehatan alami yang memadukan tradisi dan inovasi.<br>
                        Dengan racikan jamu gendongkhas Nusantara dari bahan-bahan herbal berkualitas<br>
                        tinggi, Jejamu menawarkan minuman kesehatan yang berkhasiat dan lezat. <br>
                        Setiap tegukan memberikan manfaat kesehatan dan cita rasa otentik.
                    </p>
                    <form action="produk.php">
                        <input type="text" placeholder="Sudah Minum Jamu Hari ini ?" />
                        <button type="submit">Cari Produk</button>
                    </form>
                </div>
            </section>
        </div>

        <!-- Halaman 2 -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/carousel1.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="asset/carousel2.png" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="asset/carousel3.png" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Halaman 3 -->
        <section class="testimoni-section">
            <h1 class="text-center">Testimoni Pelanggan</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial">
                        <img src="asset/customer1.jpg" alt="Customer 1" class="testimonial-img">
                        <h5>Hanip Miyako</h5>
                        <p class="title">CEO, Sovestra.Eo</p>
                        <p>"Jejamu benar-benar mengubah hidup saya! Rasa dan manfaatnya luar biasa."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <img src="asset/customer2.jpg" alt="Customer 2" class="testimonial-img">
                        <h5>Khayyuna Aqua</h5>
                        <p class="title">Marketing Manager, Panasonic Corp</p>
                        <p>"Saya sangat merekomendasikan Jejamu kepada siapa pun yang ingin hidup sehat."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial">
                        <img src="asset/customer3.jpg" alt="Customer 3" class="testimonial-img">
                        <h5>Asep a'Clock</h5>
                        <p class="title">Freelancer</p>
                        <p>"Produk ini sangat efektif dan mudah dikonsumsi. Saya suka rasanya."</p>
                    </div>
                </div>
            </div>
        </section><br>
    </main>

    <!-- Footer -->
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

    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+RVzUR5K5K5op3g6czmGIX0nQ+" crossorigin="anonymous">
    </script>
    <!-- Carousel Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>