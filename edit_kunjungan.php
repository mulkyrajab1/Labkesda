<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MAIN MENU</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d9df9863e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <?php 
    include 'config.php'; 
     $kode = isset($_GET['kd_dokter']) ?  $_GET['kd_dokter']:"";
     $nip = isset($_POST['NIP']) ? $_POST['NIP']:"";
    $query = mysqli_query($koneksi, "SELECT * FROM t_dokter WHERE kd_dokter = '$kode'");

    $b = mysqli_fetch_array($query);
   
   ?>
    <div class="edit_dokter">
<form action="aksi_kunjungan.php" method="POST">
                <h3 style="text-align: center; color: white;">Form Kunjungan</h3><br>
    <label for="Kode_dokter" style="color: white;"><b>Kode Kunjungan   :</b></label>
    <label for="kode_pasien" style="color: white; float: right; font-weight: 900;">Kode pasien    :</label><br>
    <input type="text" placeholder="" name="kd_kunjungan" style=" font-weight: 900;" value="<?php echo "$kodekunjungan"; ?>" required>
    <input type="text" name="kd_pasien" id="kd_pasien" onload="load()" style="font-weight: 900; float: right;"><a href="#popuppp" style="text-decoration: none; color: white; float: right;">Pilih Pasien</a><br><br>

    <label for="tanggal_kunjungan" style="color: white;"><b>Tanggal Kunjungan   :</b></label>
    <label for="nama_pasien" name="nama_pasien" style="color: white; font-weight: 900; float: right;">Nama pasien     :</label><br>
    <input type="text" placeholder="" name="tgl_kunjungan" value="<?php echo date("d-m-Y"); ?>" style=" font-weight: 900;">
    <input type="text" name="nama_pasien" id="nama_pasien" onload="load()" style="float: right; font-weight: 900;"><br><br>

    <label for="ttl" style="color: white;"><b>Kode Dokter   :</b></label>
    <label for="jenis_kelamin" style="font-weight: 900; float: right; color: white;">Jenis Kelamin   :</label><br>
    <input type="text" placeholder="Kode Dokter" name="kd_dokter" id="kd_dokter" onload="laod()" style=" font-weight: 900; width:158px; height:27px" required><a href="#popupd" style="text-decoration: none; color: white;">Pilih Dokter</a>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" onload="load()" style="float: right; color: black; font-weight: 900;"><br><br>

    <label for="no.tlp" style="color: white;"><b>Nama Dokter     :</b></label>
    <label for="umur" style="font-weight:900; color: white; float: right;">Umur pasien    :</label><br>
    <input type="text" placeholder="Nama Dokter" name="nama_dokter" id="nama_dokter" onload="load()" style="font-weight: 900; color: black;" required>
    <input type="text" name="umur" id="umur" onload="load()" style="float: right; font-weight: 900; color: black;"><br><br>


    <label for="jenis_kelamin" style="color: white;"><b>NIP   :</b></label>
    <label for="nohp" style="color: white; font-weight: 900; float: right;">Nomor Handphone  :</label><br>
    <input type="text" placeholder="NIP" name="nip" id="nip" onload="load()" style=" font-weight: 900;" required>
    <input type="text" name="no_hp" id="no_hp" onload="load()" style="float: right; color: black; font-weight: 900;"><br><br>

    <label for="no.tlp" style="color: white;"><b>Spesialis Dokter    :</b></label>
    <label for="keperluan" style="font-weight: 900; float: right; color: white;">Keperluan Pasien   :</label><br>
    <input type="text" placeholder="Spesialis" name="spesialis" id="spesialis" onload="laod()" style=" font-weight: 900;" required>
            <select name="keluhan" id="keluhan" onload="load()" value="keluhan" style="width:155px; margin:0; float: right; color: black; font-weight: 900;">---- pilih ----
                <option value="Lab.biomolekuler" style="font-weight: 900; color: black;">Lab. Biomolekuler</option>
                <option value="Lab.mikrobiologi" style="font-weight: 900; color: black;">Lab. Mikrobiologi</option>
                <option value="Lab.air&makanan" style="font-weight: 900; color: black;">Lab. Air & Makanan</option>
            </select><br><br>

    <label for="status_rekam_medis" style="color: white; font-weight: 900; float: right;">Status Rekamedis  :</label><br>

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 40px; left: 180px; position: absolute;">OK</button>
            </form>
    </div>
</body>
</html>