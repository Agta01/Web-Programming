<?php 
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil Penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";
/* 
setelah membuat variable dan memasukkan isi nya, variable angka1 dan angka2 dijumlahkan. 
Lalu ada variable hasil yang digunakan untuk menampung hasil penjumlahan tersebut.
*/

$benar = true;
$salah = false;

echo "Variabel benar: $benar, Variabel salah: $salah <br>";
// Mendefinisikan konstanta untuk nilai tetap

define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di ". NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
/* 
Digunakan untuk mengakses konstanta dengan menggunakan nama dari konstanta tersebut.
pemanggilan konstanta tidak perlu menggunakan tanda $ didepan di depannya (beda dengan variabel).
*/
?>

