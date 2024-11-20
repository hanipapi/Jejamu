<?php
session_start();

include 'cn.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = mysqli_query($cn, "SELECT * FROM jamu WHERE id = $id");
    $data = mysqli_fetch_array($query);
    if ($data) {
        $namajamu = $data['namajamu'];
        $bahanjamu = $data['bahanjamu'];
        $khasiat = $data['khasiat'];
        $foto = $data['foto_produk'];
        $harga = $data['harga'];
        $path_gambar = 'foto_produk/' . $foto;
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail Jamu</title>
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
                    <li><a href="akun.php"><img src="asset/profile-icon.jpg" alt="Profil" width="50">Akun</a>
                    </li>
                <?php else: ?>
                    <li><a href="login.php" class="nav__btn">Masuk</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- Selengkapnya -->
    <br>
    <br>
    <div class="card">
        <div class="poto">
            <img src="<?php echo $path_gambar ?>" alt="Jamu Image">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $namajamu; ?></h5>
            <p class="card-text"><?php echo $bahanjamu; ?></p>
            <p class="card-text"><?php echo $khasiat; ?></p>
            <p class="card-text"><?php echo "Harga: Rp " . number_format($harga); ?></p>
            <form action="detailtoDB.php" method="POST">
                <div class="input-group mb-3">
                    <span class="btn-back">Jumlah <input type="number" class="form-control" name="total" min="1"></span>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-primary" name="beli">Beli Sekarang</button>
                </div>

                <input type="hidden" name="id_cart" value="<?php echo $id_cart; ?>">
                <input type="hidden" name="namajamu" value="<?php echo $namajamu; ?>">
                <input type="hidden" name="harga" value="<?php echo $harga; ?>">
            </form>
        </div>
    </div>
</body>

</html>