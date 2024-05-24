<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssLogin.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>LOGIN</title>
</head>

<body>
    <nav class="navbar-expand-lg">
        <ul>
            <li class="left"><img class="img_nav" src="img/logo_polinema2.png" alt="LOGO POLINEMA"></li>
            <li class="left"><a href="homepage_awal.php"><b>POLINEMA</b></a></li>
            <li class="right"><a href="login.php"><u>login</u></a></li> 
        </ul>
    </nav>
    <div class="content_login">
    <form method="post">
    <h2 class="center_log"><b>LOGIN </b></h2>
    <p class="center_log">*Masukkan nomor identitas dan password Anda</p>
    <div class="userName">
    <p class="un_title">USERNAME</p>
    <input type="text" class="input_user" name="userName" placeholder="Username" required/> 
    </div>
    <div class="password">
    <p class="pass_title">PASSWORD</p>
    <input type="password" class="input_password" name="password" placeholder="Password" required/>  <br> <br>
    <button type="button" class="btn btn-primary submit_but">SUBMIT</button>
    </div>
    <br>
    <p>Belum Punya Akun? <a href="sign_up.php">Daftar</a></p>
    </form>
    </div>
    <a href="homepage_awal.php"><button type="button" class="btn btn-primary back_but">Kembali</button></a>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>