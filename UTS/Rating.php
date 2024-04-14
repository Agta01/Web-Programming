
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemberian Penilaian</title>
    <link rel="stylesheet" href="style_form_hasil.css">
</head>
<body>
    <script>
        var jawab = prompt("Apakah kamu puas dengan pelayanan Agta Service? (ya/tidak) ")
        var nilai = "";
        var jawabLowerCase = jawab.toLowerCase();
            switch(jawabLowerCase) {
                case "ya":
                    nilai = "semoga sehat selalu";
                    break;
                case "tidak":
                    nilai = "akan saya tingkatkan kembali kualitas pelayanan kami"
                    break;
            } if(nilai === ""){
                document.write("Kamu gagal memberi penilaian");
            } else {
                document.write("Terima kasih atas penilaiannya, " + nilai);
            }
    </script>
    <br><br>
<?php
echo $_COOKIE['ucapan'];

echo "<br>";
echo $_COOKIE['brand'];
?>
    
</body>
</html>