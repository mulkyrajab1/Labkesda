<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/2c52a77580.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="left-side"><br>
                <a href="index.php" style="text-decoration: none; "><img src="jpg.png" style="width:130px; height: 100px; padding-left: 63px;"></a>
                <p style="text-align: center; color: white;"><?php echo date('-------- d F, Y -------- H:i:s') ?><br><br></p>
                <h3 align="center" style="color: navajowhite;">Menu</h3>
            
                <a href="hematologi.php" style="color:black; text-decoration: none;">
                    <li><i class="fa-solid fa-user-doctor" style="width:30px; height:30px;"></i>&nbsp;HEMATOLOGI</li>
                </a>
                <a href="mikrobiologi.php" style="color:black; text-decoration: none;">
                    <li><i class="fa-solid fa-hospital-user" style="width:30px; height:30px;"></i>&nbsp;MIKROBIOLOGI</li>
                </a>
                <a href="Urinalisa.php" style="color:black; text-decoration:none;">
                    <li><i class="fa-solid fa-check-to-slot" style="width: 30px; height:30px;"></i>&nbsp;URINE</li>
                </a>
                <a href="kimiaklinik.php" style="color:black; text-decoration:none;">
                    <li><i class="fa-solid fa-address-card" style="width:30px; height:30px;"></i>&nbsp;KIMIAKLINIK</li>
                </a>
                <a href="faces.php" style="color:black; text-decoration:none;">
                    <li><i class="fa-solid fa-address-card" style="width:30px; height:30px;"></i>&nbsp;FEACES</li>
                </a>
                <a href="imunologi.php" style="color:black; text-decoration:none;">
                    <li><i class="fa-solid fa-address-card" style="width:30px; height:30px;"></i>&nbsp;IMUNOLOGI</li>
                </a>
                <a href="hasilklinik.php" style="color:black; text-decoration:none;">
                    <li><i class="fa-solid fa-address-card" style="width:30px; height:30px;"></i>&nbsp;HASILKLINIK</li>
                </a>
                <a href="index.php" style="color:black; text-decoration: none;">
                    <li><i class="fa-solid fa-right-from-bracket" style="width:30px; height:30px;"></i>Kembali</li>
                </a>
            </ul>
            </div>
            <div class="right-side"><br>
                
<form style="margin-left:30px ;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset style="width:420px; border-color: black; float:left; margin-top: 11px;"><legend style="font-size:9pt;">Form Pasien</legend>
            <div class="form-kunjungan">
            

            <label>Kode Pasien &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="kode" placeholder="kode pasien"style="width:115px;  margin-right: 0;"><button class="cari" style="height: 26px;"><img src="cari2.png" style="width:20px; height:20px; align-items:center; float: left;"></button><br><br>

            <label>Nama Pasien &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama" placeholder="Nama Pasien" style="width:150px; margin-right: 0;"><br><br>

            <label>Jenis Kelamin Pasien :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama" placeholder="Jenis Kelmain" style="width:150px;  margin-right:0;"><br><br>

            <label>Umur Pasien  :</label>
            <input type="text" name="nama" placeholder="Umur" style="width:150px; margin-right:0;"><br><br>

            <label>Nomor Handphone Pasien   :</label>
            <input type="text" name="nama" placeholder="No. Hp" style="width:150px; margin-right:0;"><br><br>

            <label>Alamat Pasien   :</label>
            <input type="text" name="nama" placeholder="alamat" style="width:150px; margin-right:0;"><br><br>
            </div>
        </fieldset>
        <fieldset style=" position:absolute;width:420px;border-color: black; float:left; margin-top:10px; margin-left:600px; margin-top: 11px; height: 430px;"><legend style="font-size:9pt;">Form Kimiaklinik</legend>
      
            

            <label style="font-size: 13pt;">Kode Kimiaklinik :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama" placeholder="Kode Kimiaklinik" style="width:150px; border-radius: 0.9em; margin-right:0;"><br><br>

            <label style="font-size:13pt;">Tanggal Periksa  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama" placeholder="Tanggal Periksa" style="width:150px; margin-right: 0; border-radius: 0.9em ;"><br><br>

            <div class="form-hematologi">
             <label>Gula darah puasa</label><br>
            <input type="text" name="kode"><br><br>

            <label>Gula darah j2pp</label><br>
            <input type="text" name="nama"><br><br>

            <label>Gula darah sewaktu</label><br>
            <input type="text" name="led"><br><br>

            <label>Ureum</label><br>
            <input type="text" name="eritrosit"><br><br>

            <label>Kreatinin</label><br>
            <input type="text" name="Thrombosit"><br><br>

            <label>Asam Urat</label><br>
            <input type="text" name="waktupendarahan"><br><br>

            <label>Cholestrol</label><br>
            <input type="text" name="waktu pembekuan"><br><br>
</div>
            <div class="mcv">

            <label>HDL</label><br>
            <input type="text" name="hematrokit"><br><br>
        
            <label>LDL</label><br>
            <input type="text" name="goldarah"><br><br>

            <label>Trigliserida</label><br>
            <input type="text" name="MCV"><br><br>

            <label>Bilirubin Total</label><br>
            <input type="text" name="MCH"><br><br>

            <label>Bilirubin Direk</label><br>
            <input type="text" name="MCHC"><br><br>

            <label>Bilirubin Indirek</label><br>
            <input type="text" name="MCHC"><br><br>

            <label>Protein</label><br>
            <input type="text" name="MCHC"><br><br>
        </div>
        
        <div class="hitung">

            <label>Albumium</label><br>
            <input type="text" name="MCHC"><br><br>

            <label>Globulin</label><br>
            <input type="text" name="MCHC"><br><br>

            <label>SGOT</label><br>
            <input type="text" name="basofit"><br><br>

            <label>SGPT</label><br>
            <input type="text" name="Eosinofil"><br><br>

            <label>Gamma GT</label><br>
            <input type="text" name="Neutrofil"><br><br>

            <label>Alkali Fospatase</label><br>
            <input type="text" name="Limfosit"><br><br>

            <label>CD4</label><br>
            <input type="text" name="Monosit"><br><br>

            <label>HbA1c</label><br>
            <input type="text" name="Monosit"><br><br>
        </div>
        </fieldset>
    </form>
    <div class="buttonhematologi" style="margin-left:50px; margin-top:260px; position: absolute;">
        <button style="margin-top: 20px; margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Tambah</button> 
        <button style="margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Edit</button>
        <button style="margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Hapus</button>
        <button style="margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Kosongkan</button>
    </div>
    <div class="table-wrapper" style="  position:absolute; ">
        <div class="responstable" style="position: absolute; overflow-x:auto ; width: 1100px; margin-right:100px; margin-top: 450px;">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No.</th>
            <th>KdKimiaklinik</th>
            <th>KdKunjungan</th>
            <th>Tglperiksa</th>
            <th>GulaDarahPuasa</th>
            <th>GulaDarahj2pp</th>
            <th>Guladarahsewaktu</th>
            <th>Ureum</th>
            <th>Kreatinin</th>
            <th>Asam Urat</th>
            <th>Cholestrol</th>
            <th>HDL</th>
            <th>LDL</th>
            <th>Trigliserida</th>
            <th>BilirubinTotal</th>
            <th>BilirubinDirek</th>
            <th>BilirubinIndirek</th>
            <th>Protein</th>
            <th>Albumium</th>
            <th>Globulin</th>
            <th>SGOT</th>
            <th>SGPT</th>
            <th>GammaGT</th>
            <th>AlkaliFospatase</th>
            <th>CD4</th>
            <th>HbA1c</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tbody>
    </table>
</div>
        </div>
    </div>

</body>
</html>