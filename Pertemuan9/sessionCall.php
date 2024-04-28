<?php
// harus ada syntaks ini, tanda untuk mulai session
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php // Untuk mencetak nilai variabel sesi
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>