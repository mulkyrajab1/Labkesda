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
        <fieldset style=" position:absolute;width:420px;border-color: black; float:left; margin-top:10px; margin-left:600px; margin-top: 11px; height: 480px;"><legend style="font-size:9pt;">Form Feaces</legend>
      
            

            <label style="font-size: 13pt;">Kode Imunologi :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama" placeholder="Kode Imunologi" style="width:150px; border-radius: 0.9em; margin-right:0;"><br><br>

            <label style="font-size:13pt;">Tanggal Periksa  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama" placeholder="Tanggal Periksa" style="width:150px; margin-right: 0; border-radius: 0.9em ;"><br><br>

                <h2 style=" margin-left:140px;position: absolute;">O</h2>
                <h2 style="margin-left: 280px;">H</h2>
            <div class="form-faces">
             <label style="margin-left:-30px;">S. Typhi</label>
            <input type="text" name="styphio" style="margin-left: 62px;">
            <input type="text" name="styphih" style=""><br><br>

            <label style="margin-left:-30px;">S. Paratyphi A</label>
            <input type="text" name="styphio" style="margin-left: 30px;">
            <input type="text" name="styphih" style=""><br><br>

            <label style="margin-left:-30px;">S. Paratyphi B</label>
            <input type="text" name="styphio" style="margin-left: 30px;">
            <input type="text" name="styphih" style=""><br><br>

            <label style="margin-left:-30px;">S. Paratyphi C</label>
            <input type="text" name="styphio" style="margin-left: 30px;">
            <input type="text" name="styphih" style=""><br><br>

            <label>VDRL</label><br>
            <input type="text" name="Thrombosit"><br><br>

            <label>HBsAg</label><br>
            <input type="text" name="waktupendarahan"><br><br>

            <label>IgG-IgM</label><br>
            <input type="text" name="waktu pembekuan"><br><br>

            <label>TPHA</label><br>
            <input type="text" name="waktu pembekuan"><br><br>
            
        
            <label>Anti HIV</label><br>
            <input type="text" name="waktu pembekuan"><br><br>
        </div>

        
            
        
        </fieldset>
    </form>
    <div class="buttonhematologi" style="margin-left:50px; margin-top:260px; position: absolute;">
        <button style="margin-top: 20px; margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Tambah</button> 
        <button style="margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Edit</button>
        <button style="margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Hapus</button>
        <button style="margin-left: 17px; width: 80px; height: 35px; border-radius:8px;">Kosongkan</button>
    </div><br><br>
    <div class="table-wrapper" style="  position:absolute; ">
        <div class="responstable" style="position: absolute; overflow-x:auto ; width: 1100px; margin-right:100px; margin-top: 450px;">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No.</th>
            <th>KdFeaces</th>
            <th>KdKunjungan</th>
            <th>Tglperiksa</th>
            <th>Konsistensi</th>
            <th>Warna</th>
            <th>Darah</th>
            <th>Amoeba</th>
            <th>Leukosit</th>
            <th>Eritrosit</th>
            <th>TelurCacing</th>
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