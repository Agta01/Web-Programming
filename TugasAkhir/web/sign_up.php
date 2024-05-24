<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssLogin.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>SIGN UP</title>
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
    <h2 class="center_log"><b>SIGN UP</b></h2>
    <p class="center_log">*Silahkan Daftarkan Identitas Anda</p>
    <div class="userName">
    <p class="un_title">Nama </p>
    <input type="text" class="input_user" name="userName" placeholder="nama lengkap/perusahaan" required/> 
    </div>
    <div class="userName">
    <p class="un_title">No Identitas (Username)</p>
    <input type="text" class="input_user" name="userName" placeholder="nama lengkap/perusahaan" required/> 
    </div>
    <div class="userName">
    <p class="un_title">Email </p>
    <input type="text" class="input_user" name="userName" placeholder="Email" required/> 
    </div>
    <div class="userName">
    <p class="un_title">Status Anda </p>
    <select class="status" name="un_title" size="1" id="">
        <option value="Alumni">Alumni</option>
        <option value="Dosen">Dosen</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Mitra Kerjasama">Mitra Kerjasama</option>
        <option value="Orangtua">Orangtua</option>
        <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
    </select>
    </div>
    <p class="pass_title">Password</p>
    <input type="password" class="input_password" name="password" placeholder="Password" required/>  <br> <br>
    <button type="button" class="btn btn-primary submit_but">SUBMIT</button>
    </div>
    <br>
    </form>
    </div>
    <div>
    <a href="homepage_awal.php"><button type="button" class="btn btn-primary back_but_sign">Kembali</button></a>
    </div>
    
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
