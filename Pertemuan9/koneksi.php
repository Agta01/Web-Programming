<?php

// Penghubungan ke database MySql
$namaHost = "localhost"; //nama host dari MySql
$username = "root"; // username/nama pengguna MySql
$password = ""; // password (biasanya kosong)
$database = "prakwebdb"; // Nama dari database yang digunakan


//try catch untuk menangani masalah saat mencoba membuat koneksi ke database
try {
    //untuk membuat koneksi ke server MySql mengambil 4 parameter(namaHost, username, password, database)
    $connect = mysqli_connect($namaHost, $username, $password, $database); 
} catch (Exception $e) {
    echo $e->getMessage();
}



?>