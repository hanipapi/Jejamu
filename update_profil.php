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
        <?php
        include ("cn.php");
        $id = $_GET['id'];
        $query = mysqli_query($cn, "SELECT * FROM profil WHERE id=$id");
        $data = mysqli_fetch_array($query);
        ?>

        <div class="box">
            <div class="logo">
                <img src="asset/logo1.png" alt="Jejamu">
            </div>
            <div class="judul">
                <h4>Profil Pengguna</h4>
            </div>
            <div class="info">
                <form action="cek-updateProfil.php" method="post">
            </div>
            <!-- ID -->
            <input type="hidden" name="id" value="<?= $id ?>">
            <!-- email -->
            <form action="cek-updateProfil.php" method="post">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email </span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="email" value="<?php echo $data['email'] ?>">
                </div>
                <!-- Nama -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="nama" value="<?php echo $data['nama'] ?>">
                </div>
                <!-- password -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">password</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="password" value="<?php echo $data['password'] ?>">
                </div>
                <!-- Jenis Kelamin -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Kelamin</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="jeniskelamin"
                        value="<?php echo $data['jeniskelamin'] ?>">
                </div>
                <!-- TANGGAL LAHIR -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Lahir</span>
                    <input type="date" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="tanggallahir"
                        value="<?php echo $data['tanggallahir'] ?>">
                </div>
                <!-- GOLONGANDARAH -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Golongan Darah</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-sm" name="golongandarah"
                        value="<?php echo $data['golongandarah'] ?>">
                </div>


                <div class="box__left-form-group">
                    <button type="submit" name="login" class="btn-login mt-1">Submit</button>
                </div>
            </form>
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