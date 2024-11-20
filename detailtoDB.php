<?php
session_start();
include 'cn.php';

// Check if the user is logged in
if (!isset($_SESSION['email']) || !$_SESSION['email']) {
    echo "<script>alert('Anda harus login terlebih dahulu.');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit;
}

if (isset($_POST['beli'])) {
    $id_cart = intval($_POST['id_cart']);
    $namajamu = $_POST['namajamu'];
    $harga = $_POST['harga'];
    $total = intval($_POST['total']);
    $email = $_SESSION['email']; // Assuming the session stores the user's email

    // Insert the item into the 'keranjang' database table
    $query = "INSERT INTO keranjang (email, id_cart, namajamu, total, harga) 
              VALUES ('$email', '$id_cart', '$namajamu', '$total', '$harga')";

    if (mysqli_query($cn, $query)) {
        echo "<script>alert('Berhasil menambahkan $total barang ke keranjang.');</script>";
        echo "<script>window.location.href='keranjang.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan barang ke keranjang.');</script>";
        echo "<script>window.location.href='detail.php?id=$id';</script>";
    }
}
?>