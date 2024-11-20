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
            <div class="colo box__left">
                <div class="logo">
                    <img src="asset/logo1.png" alt="Jejamu" width="auto" height="50%">
                </div>
                <div class="box__left-title">
                    <h4>Login untuk akunmu</h4>
                </div>
                <div class="box__left-form">
                    <form action="cek-login.php" method="post">
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="text" name="email" placeholder="Email" required autocomplete="off">
                            </div>
                        </div>
                        <div class="box__left-form-group">
                            <div class="input-form">
                                <input type="password" name="password" placeholder="Password" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="box__left-form-group">
                            <button type="submit" name="login" class="btn-login mt-1">Login</button>
                        </div>
                    </form>

                    <a class="btn btn-primary" href="daftar.php" role="button">Sign In</a>
                </div>
            </div>
            <div class="colo box__right">
                <div class="text__right">
                    <h1>Login Akun Jejamu</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>