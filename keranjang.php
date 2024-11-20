<?php
session_start();
include 'cn.php';

// Get the logged-in user's email
$email = $_SESSION['email']; // Assuming the session stores the user's email

// Fetch the items in the user's cart from the database
$query = "SELECT * FROM keranjang WHERE email='$email'";
$result = mysqli_query($cn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="keranjang.css">
</head>

<body>
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

    <!-- KONTEN -->
    <div class="container">
        <table class="table">

            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Sub Harga</th>

                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("cn.php");
                $query = mysqli_query($cn, "SELECT * FROM keranjang WHERE email='$email'");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                    <td>
                        <?php echo $data['id_cart'] ?>
                    </td>
                    <td>
                        <?= $data['namajamu'] ?>
                    </td>
                    <td>
                        <?= $data['harga'] ?>
                    </td>
                    <td>
                        <?= $data['total'] ?>
                    </td>
                    <td>
                        <?= $data['harga'] * $data['total'] ?>
                    </td>
                    <td>
                        <a href="hapus.php?id_cart=<?php echo $data['id_cart'] ?>"
                            class="btn btn-danger btn-sm">Hapus</a>
                        <a href="editBarang.php?id_cart=<?php echo $data['id_cart'] ?>"
                            class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
        <a class="btn btn-primary" href="index.php">Kembali Belanja</a>
        <a class="btn btn-success" href="checkout.php?email=<?php echo $email ?>">CheckOut</a>
    </div>

    <!-- KONTEN -->
</body>

</html>