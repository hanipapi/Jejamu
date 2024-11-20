<?php
session_start(); // Mulai sesi
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .poto {
        width: 100%;
        padding-top: 100%;
        position: relative;
        overflow: hidden;
    }

    .poto img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    </style>

</head>

<body>
    <!-- SYSTEM OF DATABASE -->
    <?php
    include ("cn.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $namajamu = $_POST['namajamu'];
        $bahanjamu = $_POST['bahanjamu'];
        $khasiat = $_POST['khasiat'];
        $jumlah = $_POST['jumlah'];
        $urlgambar = $_POST['urlgambar'];
        $harga = $_POST['harga'];
    }
    ?>

    <!-- NAV -->
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

    <!-- KATALOG  -->
    <div class="container py-5">
        <h1 class="text-center">Katalog Jamu</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <div class="col">
                <?php
                $query = mysqli_query($cn, 'SELECT * FROM jamu WHERE id BETWEEN 1 AND 4');
                while ($data = mysqli_fetch_array($query)) {
                    $bahanjamu = $data['bahanjamu'];
                    $khasiat = $data['khasiat'];
                    $max_length = 100; // Maximum number of characters before "Selengkapnya"
                    $foto = $data['foto_produk'];
                    $path_gambar = 'foto_produk/' . $foto;
                    ?>
                <div class="card">
                    <div class="poto">
                        <img src="<?php echo $path_gambar ?>" alt="Jamu Image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['namajamu']; ?></h5>
                        <p class="card-text">
                            <?php
                                if (strlen($bahanjamu) > $max_length) {
                                    echo substr($bahanjamu, 0, $max_length) . '...';
                                    ?>
                            <a <?php echo $data['id']; ?>></a>
                            <?php
                                } else {
                                    echo $bahanjamu;
                                }
                                ?>
                        </p>
                        <p class="card-text">
                            <?php
                                if (strlen($khasiat) > $max_length) {
                                    echo substr($khasiat, 0, $max_length) . '...';
                                    ?>
                            <a href="detail.php?id=<?php echo $data['id']; ?>" class="read-more-link">Selengkapnya</a>
                            <?php
                                } else {
                                    echo $khasiat;
                                }
                                ?>
                        </p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <a class="btn btn-primary" href="detail.php?id=<?php echo $data['id']; ?>">Beli Sekarang</a>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>



            <div class="col">
                <?php
                $query = mysqli_query($cn, 'SELECT * FROM jamu WHERE id BETWEEN 5 AND 8');
                while ($data = mysqli_fetch_array($query)) {
                    $bahanjamu = $data['bahanjamu'];
                    $khasiat = $data['khasiat'];
                    $max_length = 100; // Maximum number of characters before "Selengkapnya"
                    $foto = $data['foto_produk'];
                    $path_gambar = 'foto_produk/' . $foto;
                    ?>
                <div class="card">
                    <div class="poto">
                        <img src="<?php echo $path_gambar ?>" alt="Jamu Image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['namajamu']; ?></h5>
                        <p class="card-text">
                            <?php
                                if (strlen($bahanjamu) > $max_length) {
                                    echo substr($bahanjamu, 0, $max_length) . '...';
                                    ?>
                            <a <?php echo $data['id']; ?>></a>
                            <?php
                                } else {
                                    echo $bahanjamu;
                                }
                                ?>
                        </p>
                        <p class="card-text">
                            <?php
                                if (strlen($khasiat) > $max_length) {
                                    echo substr($khasiat, 0, $max_length) . '...';
                                    ?>
                            <a href="detail.php?id=<?php echo $data['id']; ?>" class="read-more-link">Selengkapnya</a>
                            <?php
                                } else {
                                    echo $khasiat;
                                }
                                ?>
                        </p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <a class="btn btn-primary" href="detail.php?id=<?php echo $data['id']; ?>">Beli Sekarang</a>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>

            <div class="col">
                <?php
                $query = mysqli_query($cn, 'SELECT * FROM jamu WHERE id BETWEEN 9 AND 12');
                while ($data = mysqli_fetch_array($query)) {
                    $bahanjamu = $data['bahanjamu'];
                    $khasiat = $data['khasiat'];
                    $max_length = 100; // Maximum number of characters before "Selengkapnya"
                    $foto = $data['foto_produk'];
                    $path_gambar = 'foto_produk/' . $foto;
                    ?>
                <div class="card">
                    <div class="poto">
                        <img src="<?php echo $path_gambar ?>" alt="Jamu Image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['namajamu']; ?></h5>
                        <p class="card-text">
                            <?php
                                if (strlen($bahanjamu) > $max_length) {
                                    echo substr($bahanjamu, 0, $max_length) . '...';
                                    ?>
                            <a <?php echo $data['id']; ?>></a>
                            <?php
                                } else {
                                    echo $bahanjamu;
                                }
                                ?>
                        </p>
                        <p class="card-text">
                            <?php
                                if (strlen($khasiat) > $max_length) {
                                    echo substr($khasiat, 0, $max_length) . '...';
                                    ?>
                            <a href="detail.php?id=<?php echo $data['id']; ?>" class="read-more-link">Selengkapnya</a>
                            <?php
                                } else {
                                    echo $khasiat;
                                }
                                ?>
                        </p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <a class="btn btn-primary" href="detail.php?id=<?php echo $data['id']; ?>">Beli Sekarang</a>
                    </div>
                </div>
                <br>
                <?php } ?>
            </div>


        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>