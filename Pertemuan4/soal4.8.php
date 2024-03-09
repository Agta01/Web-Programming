<?php 
// membuat variabel untuk skor pemain
$skor1 = 650;
$skor2 = 200;
$skor3 = 1000;

// mendapatka hadiah jika skor melebihi 500.
$hadiah1 = ($skor1 > 500) ? "YA" : "TIDAK";
$hadiah2 = ($skor2 > 500) ? "YA" : "TIDAK";
$hadiah3 = ($skor3 > 500) ? "YA" : "TIDAK";

// Output atau hasil
echo "Total skor pemain pertama adalah: $skor1 <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah1 <br><br>";

echo "Total skor pemain kedua adalah: $skor2 <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah2 <br><br>";

echo "Total skor pemain ketiga adalah: $skor3 <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah3";

?>