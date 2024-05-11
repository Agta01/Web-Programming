<?php
// Menyertakan file Crud.php
require_once 'Crud.php';

$crud = new Crud(); // Membuat objek Crud 

$id = $_GET['id']; // Untuk mendapatkan ID dengan method GET

$tampil = $crud->readById($id); // read data jabatan berdasarkan ID 

// Melakukan pengecekkan apakah ada permintaan dengan method POST untuk memperbarui data jabatan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jabatan = $_POST['jabatan']; 
    $keterangan = $_POST['keterangan'];     
    $crud->update($id, $jabatan, $keterangan); // Memanggil metode update

    // Mengarahkan pengguna kembali ke index.php
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- Import stylesheet Bootstrap styling dalam page agar lebih menarik-->
</head>

<body>
    <div class="container mt-5">
        <!-- Pembuatan formulir yang digunakan untuk mengedit data jabatan -->
        <h2>Edit Jabatan</h2> 
        <form action="" method="post"> <!--menggunakan POST method-->
            <div class="form-group">
                <label for="jabatan">Jabatan:</label> <!--Pembuatan label dengan nama "Jabatan:"-->
                <!--Pembuatan input untuk jabatan yang nilainya diambil dari data jabatan yang sedang diedit -->
                <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $tampil['jabatan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label> <!--Pembuatan label dengan nama "Keterangan:"-->
                <!-- Pembuatan input untuk keterangan yang nilainya diambil dari data jabatan yang sedang diedit -->
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required><?php echo $tampil['keterangan']; ?></textarea>
            </div>
            <!-- Pembuatan input tersembunyi -->
            <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <!-- Pembuatan tombol untuk update data jabatan -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>