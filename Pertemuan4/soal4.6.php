<?php 
$nilaiSiswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96); // daftar nilai siswa
sort($nilaiSiswa); //mengurutkan nilai siswa

$nilaiSiswa = array_slice($nilaiSiswa, 2, -2); // mengabaikan dua nilai tertinggi dan terendah 

$totalNilai = array_sum($nilaiSiswa); // menjumlahkan total nilai.

$rataRata = $totalNilai / count($nilaiSiswa); // Rata-rata nilai

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai"; // cetakan nilainya.
echo "<br>";
echo "Nilai Rata-rata adalah: $rataRata"; // cetakan nilai hasil rata-rata
?>