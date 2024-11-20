<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    html {
        font-family: 'Open Sans', sans-serif;
        background-image: url('asset/bglogin.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%;
        overflow: hidden;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="box">
        <div class="box-content">
            <div class="col1 box__left">
                <div class="box__left-title">
                    <h4>Daftar Akun</h4>
                </div>
                <div class="box__left-form">
                    <form action="cek-daftar.php" method="post">
                        <!-- NAMA -->
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="text" name="nama" placeholder="Nama" required autocomplete="off">
                            </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="text" name="email" placeholder="Email" required autocomplete="off">
                            </div>
                        </div>
                        <!-- PASSWORD -->
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="password" name="password" placeholder="Password" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="text" name="jeniskelamin" placeholder="Jenis Kelamin" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <!-- TANGGAL LAHIR -->
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="date" name="tanggallahir" placeholder="Tanggal Lahir" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <!-- GOLONGANDARAH -->
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="text" name="golongandarah" placeholder="Golongan Darah" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="box__left-form-group">
                            <button type="submit" name="login" class="btn-login mt-1">Login</button>
                        </div>
                    </form>

                    <a class="btn btn-primary" href="login.php" role="button">Log In</a>
                </div>
            </div>
            <div class="col1 box__right">
                <div class="text__right">
                    <h1>Login Akun Jejamu</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>