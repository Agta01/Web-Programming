<?php

//membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir; //perumusan dari variabel umur adalah tahun sekarang dikurangi tahun lahir
    return $umur; // pengembalian nilai
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>"; //pencetakan yang ditengahnya terdapat variabel nama
    
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>"; //memanggil fungsi dan memasukkan nilainya yaitu tahun lahir dan tahun sekarang.
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Agta");
?>