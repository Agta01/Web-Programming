<?php
    // Menghapus cookie yang bernama 'user' dengan set timer ke belakang 3600 detik
    setcookie("user", "Polinema", time()-3600);
?>