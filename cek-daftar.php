<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Jejamu</title>
</head>

<body>
    <?php
    include ("cn.php");

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tanggallahir = $_POST['tanggallahir'];
    $golongandarah = $_POST['golongandarah'];

    $query = mysqli_query($cn, "INSERT INTO profil VALUES ('','$nama','$email','$password','$jeniskelamin','$tanggallahir','$golongandarah')");
    ?>
    <div align="center">
        <div class="card w-50">
            <div class="card-body">
                <h5 class="card-title">notification</h5>
                <p class="card-text">
                    <?php
                    if ($query) {
                        echo "Akun telah teregistrasi,
                 <a href='login.php' > Log In akun</a>";
                    } else {
                        echo "Akun gagal teregistrasi,
                <a href='daftar.php'>registrasi lagi</a>";
                    }

                    ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>