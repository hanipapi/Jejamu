<?php
session_start(); // Mulai sesi
session_unset(); // Hapus semua variabel sesi
session_destroy(); // Hancurkan sesi
header('Location: index.php'); // Arahkan kembali ke halaman utama setelah logout
exit;
?>