<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
</head>
<body>
    <!--Pembuatan form yang nantinya data dilanjutkan ke loginMultiProses.php dengan method POST-->
    <form action="loginMultiProses.php" method="post">
        <table> <!--Pembuatan tabel yang berisi username, password dan tombol submit-->
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" size="20"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="20"></td>                
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="Login" value="Proses"></td>
            </tr>
        </table>
    </form>
</body>
</html>