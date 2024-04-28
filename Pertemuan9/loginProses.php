<?php
// Impor file koneksi.php
include "koneksi.php";

// Pengambilan data username dan password dengan method post
$username=$_POST['username'];
$password=md5($_POST['password']);

// Query untuk Pemeriksaan kecocokan data username dan password dengan database 
$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $query);
$cek=mysqli_num_rows($result);


if($cek) {
    // Jika berhasil login, akan menampilkan pesan dibawah ini dan mengarahkan ke tautan homeAdmin.html
    echo "Anda berhasil login. silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php 
}else{
    // Jika gagal login akan menampilkan pesan dibawah ini dan mengarahkan ke tautan loginForm.html 
    echo "Anda gagal login.silahkan "; ?>
    <a href="loginForm.html">Login kembali</a>
<?php
// Menampilkan pesan jika terjadi error
 echo mysqli_error($connect);
}
?>
