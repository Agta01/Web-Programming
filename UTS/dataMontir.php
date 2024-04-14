<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data montir</title>
</head>
<body>
    <table>       
        <?php 
            echo "<tbody id=kriteria>";
            echo "<tr>";
            echo "<td>"."No"."</td>";
            echo "<td>"."Nama Montir" ."</td>";
            echo "<td>"."Jadwal" ."</td>";
            echo "<td>"."Rating" ."</td>";
            echo "</tr>";
            echo "</tbody>";

            echo "<div>";
            $montir = array (
                            array(1, "Petramax Rahayu", "Senin dan Selasa, 08.00-17.00", "8/10"),
                            array(2, "Reski Permana", "Rabu dan Sabtu, 09.00-15.00", "9/10"),
                            array(3, "Ciku Leksmana", "Senin dan Jumat, 10.00-17.00", "7.5/10"),
                            array(4, "Napila Syuril", "Sabtu dan Minggu, 10.00-15.00", "8.5/10")        
            );

            echo "<tr>";
                echo "<td>".$montir[0][0] ."</td>";
                echo "<td>".$montir[0][1] ."</td>";
                echo "<td>".$montir[0][2] ."</td>";
                echo "<td>".$montir[0][3] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$montir[1][0] ."</td>";
                echo "<td>".$montir[1][1] ."</td>";
                echo "<td>".$montir[1][2] ."</td>";
                echo "<td>".$montir[1][3] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$montir[2][0] ."</td>";
                echo "<td>".$montir[2][1] ."</td>";
                echo "<td>".$montir[2][2] ."</td>";
                echo "<td>".$montir[2][3] ."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>".$montir[3][0] ."</td>";
                echo "<td>".$montir[3][1] ."</td>";
                echo "<td>".$montir[3][2] ."</td>";
                echo "<td>".$montir[3][3] ."</td>";
            echo "</tr>";
            echo "</div>";
        ?>
    </table>
</body>
</html>