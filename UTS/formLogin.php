<?php
session_start();
// Ini Session yang digunakan untuk mencocokkan apakah password dan username yang diinputkan sesuai
$_SESSION["userName"] = "agta";
$_SESSION["password"] = 123;

if (isset($_POST["submit"])) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    if ($userName == $_SESSION["userName"] && $password == $_SESSION["password"]) {
        header("location:proses_form.php");
    } else {
        $error = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampilan Login Service</title>
    <link rel="stylesheet" type="text/css" href="cssLogin.css">
</head>
<body>>
    <div class="content_login">
        <h2>LOGIN AGTA SERVICE</h2>
        <?php if(isset($error)) { 
              echo $error; 
             } ?>
        <form method="post">
        <input type="text" name="userName" class="userName" placeholder="Username" required/> <br> <br>
        <input type="email" name="email" class="email" placeholder="Email" required/> <br> <br>
        <input type="password" name="password" class="password" placeholder="Password" required/> <br> <br>
        
        <button type="submit" name="submit" id="login_button" class="button">Login</button>
    </form>
    </div>
    
</body>
</html>