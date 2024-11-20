<?php
include "cn.php";

session_start();

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$jeniskelamin = $_POST['jeniskelamin'];
$tanggallahir = $_POST['tanggallahir'];
$golongandarah = $_POST['golongandarah'];

// Assuming password is stored as plain text for simplicity. In practice, use hashed passwords.
$query = mysqli_query($cn, "UPDATE profil 
    SET nama='$nama', email='$email', password='$password', jeniskelamin='$jeniskelamin', tanggallahir='$tanggallahir', golongandarah='$golongandarah' 
    WHERE id='$id'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
</head>

<body>
    <div align="center">
        <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title">Notification</h5>
                <p class="card-text">
                    <?php
                    if ($query) {
                        // Update session variables
                        $_SESSION['nama'] = $nama;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['jeniskelamin'] = $jeniskelamin;
                        $_SESSION['tanggallahir'] = $tanggallahir;
                        $_SESSION['golongandarah'] = $golongandarah;

                        echo "Proses update berhasil, <a href='akun.php'>Lihat Profil</a>";
                    } else {
                        echo "Proses update gagal, <a href='update.php'>Update Lagi</a>";
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>