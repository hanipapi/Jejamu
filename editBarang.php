<?php
session_start();
include 'cn.php';

if (isset($_GET['id_cart'])) {
    $id_cart = intval($_GET['id_cart']);
    $query = mysqli_query($cn, "SELECT * FROM keranjang WHERE id_cart = $id_cart");
    $data = mysqli_fetch_array($query);
    if ($data) {
        $namajamu = $data['namajamu'];
        $harga = $data['harga'];
        $total = $data['total'];
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jumlah Barang</title>
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

    <!-- Form Edit Jumlah -->
    <div class="centered-card">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Jumlah Barang</h5>
                <form action="cek-edit-barang.php" method="POST">
                    <input type="hidden" name="id_cart" value="<?php echo $id_cart; ?>">
                    <input type="hidden" name="namajamu" value="<?php echo $namajamu; ?>">
                    <input type="hidden" name="harga" value="<?php echo $harga; ?>">

                    <p>Nama Jamu: <?php echo $namajamu; ?></p>
                    <div class="input-group mb-3">
                        <label for="total">Jumlah: </label>
                        <input type="number" class="form-control" name="total" id="total" value="<?php echo $total; ?>"
                            min="1">
                    </div>

                    <button type="submit" class="btn btn-primary" name="edit">Selesai</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>