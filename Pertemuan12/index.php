<?php
// Menyertakan file Crud.php
require_once 'Crud.php';

// Membuat objek Crud 
$crud = new Crud();

// Melakukan Pengecekkan apakah ada permintaan dengan method POST untuk add data jabatan baru
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jabatan = $_POST['jabatan']; 
    $keterangan = $_POST['keterangan']; 
    $crud->create($jabatan, $keterangan); 
}

// Melakukan pengecekkan apakah ada permintaan dengan method GET untuk delete data jabatan
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = $_GET['id']; 
    $crud->delete($id); 
}

// Membaca data jabatan dari database 
$tampil = $crud->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- Import stylesheet Bootstrap styling dalam page agar lebih menarik -->
</head>

<body>
    <div class="container mt-5">
        <!-- Pembuatan tombol untuk menampilkan tambah -->
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah</button>
        <!-- Pembuatan tabel untuk menampilkan data jabatan -->
        <table class="table">
            <thead>
                <tr> <!--Isi tabel dari kolom pertama / Subjudul-->
                    <th>ID</th> 
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan setiap data jabatan dalam tabel
                foreach ($tampil as $show) {
                    echo "<tr>";
                    echo "<td>" . $show['id'] . "</td>";
                    echo "<td>" . $show['jabatan'] . "</td>";
                    echo "<td>" . $show['keterangan'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $show['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                    echo "<a href='index.php?action=delete&id=" . $show['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modal untuk menambahkan data jabatan -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jabatan</h5> <!--Terdapat tulisan dengan tipe header 5-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk menambah data jabatan yang berisi jabatan dan keterangan -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Jabatan:</label>
                            <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <!-- Pembuatan button -->
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>