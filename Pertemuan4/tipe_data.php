<?php 

// Langkah 2

$a = 10;
$b = 5;
$c = $a + 5; // variabel c menampung hasil dari penjumlahan variabel a + 5.
$d = $b + (10 * 5); // variabel d menampung hasil penjumlahan dari varibel b ditambah (10 dikali 5).
$e = $d - $c; // variabel e menampung hasil pengurangan dari variabel d dikurangi varibel c

// Pembuatan variabel serta pemberian nilai dari setiap variabel.

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

// Pencetakan dari seluruh variabel.

var_dump($e); // digunakan untuk melihat isi variabel dan tipe data yang digunakan.

echo "<br>";


// Langkah 5

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

// Pembuatan variabel dan pemberian nilai dari setiap variabel.

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) /3;
// rumus perhitungan rata-rata yaitu variabel nilaiMatematika + nilaiIpa + nilaiBI dijumlahkan semua lalu dibagi 3.

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
//Pencetakan variabel.

var_dump($rataRata);
//Pengecekan isi dari variabel rataRata dan tipe data yang digunakan.

//Langkah 8

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
echo "<br>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);
echo "<br>";
/*
Pembuatan variabel dengan pengisian true false, kemudian dicek isi dan tipe data yang digunakan
dengan perintah var_dump
*/

//Langkah 11
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
echo "<br>";
/*
Pembuatan variabel dan pengisiannya, lalu perintah selanjutnya adalah
menggabungkan string untuk membentuk nama lengkap. 
*/

// Langkah 16
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0] ;

// Menampilakan elemen pertama/indeks0 dari array listMahasiswa.
?>
