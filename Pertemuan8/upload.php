<?php
if (isset($_POST["submit"])) { //untuk mengecek apakah formulir telah dikirimkan
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    // mendapatkan ekstensi file memakai strtolower dan pathinfo.
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // mendefinisikan array, isisnya ekstensi dokumen (jpeg, jpg, gif)
    $allowedExtensions = array("jpeg", "jpg", "png", "gif");
    $maxFileSize = 10 * 1024 * 1024;

    // Untuk mengunggah file
    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
        echo "Dokumen berhasil diunggah.";
        } else {
        echo "Gagal mengunggah file"; // mencetak jika gagal unggah
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan."; // mencetak apabila jenis dokumen atau ukuran file salah.
    }
}

?>