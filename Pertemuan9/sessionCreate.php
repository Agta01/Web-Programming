<?php
// harus ada syntaks ini, tanda untuk mulai session
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set."; //Mencetak pesan jika variabel sudah di set.

            // Penetapan nilai 'green' di variabel sesi 'favcolor', 'cat' di variabel sesi 'favanimal'
        ?>
    </body>
</html>