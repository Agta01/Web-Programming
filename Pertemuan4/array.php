<?php 
//Langkah 2 (Soal 5.1)
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 96]; // menggunakan array 1 dimensi untuk menyimpan nilai di dalam nilaiSiswa.

$nilaiLulus = []; 

foreach ($nilaiSiswa as $nilai) { 
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
} 
// menggunakan perulangan foreach untuk mencari nilai yang lebih dari sama dengan 70

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
// Mencetak daftar nilai (text) dengan implode.
echo "<br> <br>";

// Langkah 6 (Soal 5.2)
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];    
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
/*
Menggunakan array 2 dimensi untuk menyimpan nama daftar karyawan dan pengalaman kerja (angka).
Menggunakan perulangan foreach dan ada if. variabel daftarKaryawan dialiaskan dengan karyawan, lalu
mencari karyawan yang pengalamn kerjanya lebih dari 5 tahun lalu mencetak nama dari karyawan tersebut melalui implode.
*/

// Langkah 10 (Soal 5.3)
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "<br> <br>";
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
/*Menggunakan array multidimensi untuk menyimpan data nilai mahasiswa ditiap mata kuliah.
lalu menggunakan variabel mata kuliah agar bisa membedakan daftarNilai fisika, mat, dll.
lalu mencetak daftar mahasiswa berupa nama dan nilainya (dalam mata kuliah fisika).  
*/

//Soal 5.4
$daftarNilaiSis = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];

$ujian = 'Matematika';
echo "<br><br>";

echo "Daftar nilai siswa dalam ujian $ujian: <br>";
$total = 0;
foreach ($daftarNilaiSis[$ujian] as $nilaiUjian) {
    echo "Nama: {$nilaiUjian[0]}, Nilai: {$nilaiUjian[1]} <br>";
    $total += $nilaiUjian[1];
}
$rataRata = $total / count($daftarNilaiSis[$ujian]);
echo "Rata-rata nilai ujian matematika adalah  {$rataRata} <br> <br>";
echo "Jadi Siswa yang memenuhi rata-rata tersebut adalah <br> ";
foreach ($daftarNilaiSis[$ujian] as $nilaiUjian) {
    if ($rataRata <= $nilaiUjian[1]) {
    echo "Nama: {$nilaiUjian[0]}, Nilai: {$nilaiUjian[1]} <br>";
    } 
};

/*
Pertama membuat array multidimensi. Lalu menggunakan variabel ujian matematika.
pada awalnya saya menampilkan semua nilai mahasiswa dan namanya yang digunakan untuk perbandingan 
siapa saja nanti anak yang hilang. foreach digunakan utnuk implementasi setiap niali mahasiswa tersebut.
totalnya diitung dan dibuat rata-ratanya. untuk echo atau cetakan yang kedua 
baru saya menggunakan if untuk membatasi anak yang memenuhi rata-rata atau tidak.
*/
?>
