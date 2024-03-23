<?php

function tampilkanAngka (int $jumlah, int $indeks = 1) { 
    echo "Perulangan ke-{$indeks} <br>";
/* 
mendefinisikan fungsi bernama tampilkanAngka dan ada dua parameter
(jumlah dan indeks dengan nilai 1)
*/
    //panggil diri sendiri selama $indeks <= $jumlah

    if ($indeks < $jumlah) { //kondisi, jika nilai indeks lebih kecil dari jumlah maka terjadi perulangan
        tampilkanAngka($jumlah, $indeks + 1); //memanggil funsgi tampilkanAngka dan menambah nilai indeks +1 dari sebelumnya.
    }


}
tampilkanAngka(20); //memanggil fungsi tampilkanAngka dengan $jumlah = 20.
?>