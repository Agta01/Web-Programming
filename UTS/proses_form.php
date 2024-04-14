<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.13.2/jquery-ui.css"/>
    <link rel="stylesheet" href="style_proses_form.css">
    
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $( "#date_ser").datepicker();
        });

        $(document).ready(function() {
            $("#flip").click(function(){
                $("#efek_flip").slideToggle("slow");
            }); 
        });

        $(document).ready(function() {
            $("#flip2").click(function(){
                $("#efek_flip2").slideToggle("slow");
            }); 
        });
    </script>
    <title>Data Diri Customer</title> 
</head>

<body>
    <div id="flip">
        <h3>Jadwal Operasional</h3>
    </div>

    <div id="efek_flip" style="display: none;">
        <P>Di bawah ini merupakan jadwal operasional dari Agta Service : </P>
            <ol>
                <li>Senin - Kamis : 08.00 - 17.00 </li>
                <li>Jumat : 08.00 - 11.00 dan 13.00 - 17.00 </li>
                <li>Sabtu dan Minggu : 10.00 - 15.00 </li>
            </ol>
    </div>

    <div id="flip2">
    <h3> Data Montir "Agta Service" </h3>
    </div>

    <div id="efek_flip2" style="display: none;">
        <?php include "dataMontir.php"?>
    </div>
        
<form action="formHasil.php" method="post" enctype="multipart/form-data">
    <hr>
    <h2>Pengisian Formulir Pemesanan Service Sepeda Motor</h2> 
<hr>
    <h2>Data Customer</h2>
<hr>
<div class="data_cust">
<label for="name">Nama Lengkap : </label> <br>
    <input type="text" name="nama" id="nama" class="data" placeholder="Nama Lengkap" required> <br><br>

    <label for="address">Alamat : </label> <br>
    <input type="text" name="address" id="address" class="data" placeholder="Alamat Rumah" required> <br><br>

    <label for="plat_nomor">Plat Nomor :  </label> <br>
    <input type="text" name="plat_nomor" id="plat_nomor" class="data" placeholder="Plat Nomor" required> <br><br>

    <div> <label for="date_ser">Pilih Tanggal Servis : </label> <br>
    <input type="text" id="date_ser" name="date_ser" class="data" required> </div> <br>

    <label for="montir">Pilih Montir : </label> <br>
    <select name="montir" id="montir" size="1" class="data" required>
        <option value="Petramax Rahayu">Petramax Rahayu</option>
        <option value="Reski Permana">Reski Permana</option>
        <option value="Ciku Leksmana">Ciku Leksmana</option>
        <option value="Napila Syuril">Napila Syuril</option>
    </select> <br> <br>
     
    <label for="service_ke">Service ke- </label> 
    <input type="number" name="service_ke" id="service_ke" class="data" required> <br><br>

    <p>Jenis Booking Service</p>
    <input type="radio" name="jenis_book" id="jenis_book" value="lengkap" > 
    <label for="jenis_booking">Service Lengkap</label> <br>
    <input type="radio" name="jenis_book" id="jenis_book" value="regular" > 
    <label for="jenis_booking">Service Regular</label> <br>
    <input type="radio" name="jenis_book" id="jenis_book" value="ringan" > 
    <label for="jenis_booking">Service Ringan</label> <br><br>

    <label for="keluhan">Keluhan yang dialami : </label> <br>
    <textarea name="keluhan" id="keluhan" cols="100" rows="7" placeholder="Masukkan keluhan yang anda alami disini"></textarea> <br><br>
    <label for="file">Upload foto keluhan</label> <br>
    <input type="file" class="upload" name="file[]" id="file" accept=".jpg, .png, .jpeg, .gif">

    
    <br><br>
    <button type="submit" name="submit" class="submit-button" id="submit-button">Submit dan Berikan Penilaian</button>
</div>


    
</form>
</body>
</html>