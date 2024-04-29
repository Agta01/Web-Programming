<?php
// Koneksi ke database (MySql)
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Periksa koneksi (jika koneksi database gagal akan menampilkan pesan ini)
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>