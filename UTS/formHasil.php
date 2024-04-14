<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Hasil</title>
    <link rel="stylesheet" type="text/css" href="style_form_hasil.css">
</head>
<body>
    <?php
    if (isset($_FILES['file'])) {
        $errors = array();
        $arrayFile = array();
        foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['file']['name'][$key];
            $file_size = $_FILES['file']['size'][$key];
            $file_tmp = $_FILES['file']['tmp_name'][$key];
            $file_type = $_FILES['file']['type'][$key];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $extensions = array("jpeg", "jpg", "png", "gif");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, atau GIF.<br>";
            }

            if ($file_size > 2097152) {
                $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB<br>';
            }

            if (!empty($errors)) {
                echo implode("", $errors);
                die();
            } else {
                move_uploaded_file($file_tmp, "keluhan/" . $file_name);
                $arrayFile[] = "keluhan/" . $file_name;
            }
        }
    }
    ?>
    <div class="isi_konten">
        <h3>Data Customer</h3>
        <hr> 
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["nama"]); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["address"]); ?></td>
            </tr>
            <tr>
                <td>Plat Nomor</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["plat_nomor"]); ?></td>
            </tr>
            <tr>
                <td>Tanggal Servis</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["date_ser"]); ?></td>
            </tr>
            <tr>
                <td>Montir yang dipilih</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["montir"]); ?></td>
            </tr>
            <tr>
                <td>Service ke</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["service_ke"]); ?></td>
                
            </tr>
            <tr>
                <td>Jenis booking service</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["jenis_book"]); ?></td>
            </tr>
            <tr>
                <td>Keterangan keluhan</td>
                <td>:</td>
                <td><?php echo htmlspecialchars($_POST["keluhan"]); ?></td>
            </tr>
            <tr>
            <td colspan="3"><img src="<?php echo $arrayFile[0] ?>" class="upload"></td>
            </tr>
        </table>
    <br><br>
    <form action="Rating.php">
    <button type="submit" name="beriNilai" class="beriNilai" >Beri Penilaian</button>
    </form>
    
<?php
setcookie('ucapan', 'Selamat berkunjung kembali', time() + 60);
setcookie('brand', 'AGTA SERVICE', time() + 60);
?>
    
</body>
</html>