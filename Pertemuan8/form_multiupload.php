<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiupload Dokumen</title> <!--Judul-->
</head>
<body>
    <h2>Unggah Dokumen</h2> <!-- Header 2-->
    <!-- Pembuatan Form-->
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <!-- Pembuatan inputan-->
        <input type="file" name="files[]" multiple="multiple" accept="img, jpg, jpeg, gif" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>