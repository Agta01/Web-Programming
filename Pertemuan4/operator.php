<?php 

//langkah 1 (Soal 3.1)
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang= $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Tambah: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

echo "<br>";
// membuat variabel hasil operasi matematika antara variabel a dan b.
// lalu mencetak hasil tersebut (penjumlahan, pengurangan, perkalian, pembagian, sisa bagi dan pangkat).

//langkah 5 (Soal 3.2)
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Tambah: {$hasilSama} "; var_dump($hasilSama);
echo "<br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} "; var_dump($hasilTidakSama);
echo "<br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} "; var_dump($hasilLebihKecil);
echo "<br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} "; var_dump($hasilLebihBesar);
echo "<br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} "; var_dump($hasilLebihKecilSama);
echo "<br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} "; var_dump($hasilLebihBesarSama);
echo "<br> <br>";
/* 
Setelah membuat variabel (hasil perbandingan antara variabel a dan b). Maka mencetak 
hasil tersebut ke dalam perintah echo dan melakukan pengecekan isi variabel tersebut dengan menggunakan
var_dump. Hasil tersebut berupa hasil persamaan, ketidakpersamaan, lebih kecil, lebih besar, lebih kecil
sama dengan, dan lebih besar dengan.
*/


//langkah 8 (Soal 3.3)
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
// Operasi logika antara a dan b

echo "Hasil And adalah {$hasilAnd} <br>";
echo "Hasil Or adalah {$hasilOr} <br>";
echo "Hasil Not A adalah {$hasilNotA} <br>";
echo "Hasil Not B adalah {$hasilNotB} <br> <br>";
// hasil cetakan operasi AND, OR, dan negasi a dan b.

// langkah 11 (Soal 3.4)
$a += $b;
echo "Output penjumlahan: $a <br>";
$a -= $b;
echo "Output pengurangan: $a <br>";
$a *= $b;
echo "Output perkalian: $a <br>";
$a /= $b;
echo "Output pembagian: $a <br>";
$a %= $b;
echo "Output hasil bagi: $a <br><br>";
// Hasil operasi assignment terhadap a dan b beserta hasil cetaknya (echo)

// langkah 14 (Soal 3.5)
$hasilIdentik = $a === $b; // memeriksa apakah a sama dengan b dan berasal dari tipe data yang sama.
$hasilTidakIdentik = $a !== $b; // memeriksa apakah a tidak sama dengan b dan berasal dari tipe data yang berbeda.

echo "Output hasil identik : $hasilIdentik <br>";
echo "Output hasil tidak identik : $hasilTidakIdentik <br> <br>";
// hasil Output.

// soal 3.6
$jumlahKursi = 45; 
$tempatiPelanggan = 28;
$kurangKur = $jumlahKursi - $tempatiPelanggan;
$perhitungan = ($kurangKur/$jumlahKursi) * 100;
echo "Soal 3.6 <br>";
echo "Maka persen kursi yang masih kosong adalah {$perhitungan} %"
/*
Pertama kali membuat varibel yang berisikan jumlah kursi dan kursi pelanggan yang ditempati. 
Kemudian membuat varibel baru hasi pengurangan antara jumlahKursi dikurangi dengan kursi pelanggan yang ditempati. 
Maka akan menghasilkan rumus seperti di atas yaitu “perhitungan = (kurangKur/jumlahKursi) * 100” 
Setelah itu akan menghasilkan hasil 37.77..% 
*/
?>