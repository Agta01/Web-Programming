<?php 
// Langkah 2 (Soal 4.1)
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 90) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
// setelah mendeklarasikan variabel, maka memberikan kondisi yang sesuai dari isi variabel tersebut.
// lalu setelah kondisi tepat, akan mencetak hurufnya. 

//Langkah 6 (Soal 4.2)
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br> <br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
// Menggunakan perulangan while untuk menghitung waktu yang dibutuhkan agar atlet mencapai jarak sejauh 500.

// Langkah 10 (Soal 4.3)
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "<br> <br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
/* setelah melakukan pembuatan variabel langkah selanjutnya adalah melakukan 
perulangan for untuk menghitung total buah yang akan di paneh berdasarkan lahan tersebut.
*/ 

// Langkah 14 (Soal 4.4)
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "<br> <br>";
echo "Total skor ujian adalah: $totalSkor"; 
/* Melakukan perulangan pada saat mengakses elemen-elemen pada suatu array
pada contoh di atas perulangan itu digunakan untuk menghitung total skor ujian.
*/

echo "<br> <br>";

// Langkah 18 (Soal 4.5)
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>" ;
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
};
/*
Menggunakan array 1 dimensi untuk menyimpan nilai di variabel nilaiSiswa.
Menggunakan perulangan foreach (perulangan saat amengakses elemen di array) 
dan ada perintah if yang digunakan untuk menilai dan mencetak status lulus/tidak lulus 
dari tiap nilai siswa di atas, dengan kondisi jiak nilai di atas 60 maka lulus, jika dibawah 60 tidak lulus.
*/
?>