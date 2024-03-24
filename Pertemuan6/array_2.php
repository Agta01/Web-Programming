<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link rel="stylesheet" type="text/css"  href="styleArray2.css"> <!--akses dari kelas eksternal yang bernama styleArray2.css-->
</head>
<body>
    <table> <!--Pembuatan tabel-->
    <tr>
            <th>Nama Dosen</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana', //nama dosen
        'domisili' => 'Malang', // domisili dosen
        'jenis_kelamin' => 'Perempuan']; // jenis kelamin dosen
    
    echo "<tr>";
    echo "<td>". "{$Dosen ['nama']}". "</td>";
    echo "<td>"."{$Dosen ['domisili']}". "</td>";
    echo "<td>". "{$Dosen ['jenis_kelamin']}". "</td>";
    echo "</tr>";
        // isi dalam barisnya adalah data-data di atas
    ?>
    </table>
   
</body>
</html>