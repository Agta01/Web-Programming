<html>
<head>
</head>
<body>
    <h2> Keranjang Belanja</h2> <!--Judul Halaman dengan jenis header 2-->

    <?php
        // Pengambilan nilai jumlah novel dan jumlah buku yang dibeli tadi dari cookie
        $beliNovel=$_COOKIE['beliNovel'];
        $beliBuku = $_COOKIE['beliBuku'];

        // Pencetakan jumlah novel dan buku yang ada di keranjangBelanja
        echo "Jumlah Novel : ". $beliNovel . "<br>";
        echo "Jumlah Buku : " . $beliBuku ;
    ?>
</body>
</html>