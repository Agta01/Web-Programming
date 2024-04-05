<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title> <!--Judul-->
</head>
<body>
    <!-- Membuat Formulir-->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!--Membuat Inputan-->
        <input type="file" name="fileToUpload" id="fileToUpload"> <!--tipenya file, dengan nama fileToUpload-->
        <input type="submit" value="Upload File" name="submit"> <!--tipenya submit, dengan nilai Upload File"-->
    </form>
</body>
</html>

