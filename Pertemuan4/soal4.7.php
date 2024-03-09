<?php 
$hargaProduk = 120000; // harga dari produk
$hargaMinDiskon = 100000; // harga minimal untuk mendaapatkan diskon

//Perhitungan harga 
if ($hargaProduk > $hargaMinDiskon) { //ketika harga produk (120000) lebih besar dari harga minimal maka akan masuk syarat ini
    $totalPembelian = $hargaProduk*0.8; //Perhitungan karena diskon 20% maka perhitungannya adalah 100%-20% yaitu 80% atau 0.8
    echo "Total harga pembelian yang harus anda bayar setelah mendapatkan diskon 20% adalah Rp. $totalPembelian " ; 
} else { //bila tidak memenuhi syarat minimal harga diskon.
    echo "Total harga pembelian yang harus anda bayar (tanpa minimum) adalah Rp. $hargaProduk " ; 
}
?>