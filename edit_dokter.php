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
<form action="aksi_dokteredit.php?kd_dokter=$_POST['kd_dokter']" method="POST">
                <br><h3 style="text-align: center; color: black;">Form Edit Dokter</h3><br>
    <label for="Kode_dokter" style="color: black;"><b>Kode Dokter   :</b></label>
    <input type="text" placeholder="kode" name="kd_dokter" style=" font-weight: 900; float: right;" value="<?php echo $b['kd_dokter']; ?>" required><br><br>

    <label for="nip" style="color: black;"><b>Nip   :</b></label>
    <input type="text" placeholder="nip" name="nip" style=" font-weight: 900; float: right;" value="<?php echo $b['NIP'];?>"><br><br>

    <label for="nama_dokter" style="color: black;"><b>Nama Dokter   :</b></label>
    <input type="text" placeholder="Nama Dokter" name="nama_dokter" style=" font-weight: 900; float: right;" value="<?php echo $b['nama_dokter'];?>" required><br><br>

    <label for="jenis_kelamin" style="color: black;"><b>Jenis Kelamin   :</b></label>
    <select name="jenis_kelamin" style="width:158px; height:27px; font-weight: 900; float: right;" value="<?php echo $b['jenis_kelamin'];?>">
        <option value="Laki-laki"  style="font-weight: 900;" >Laki - Laki</option>
        <option value="Perempuan" style="font-weight: 900;" >Perempuan</option>
    </select><br><br>

    <label for="no.tlp" style="color: black;"><b>No. Hp    :</b></label>
    <input type="text" placeholder="No.Hp" name="no_tlp" style=" font-weight: 900; float: right;" value="<?php echo $b['no_hp']; ?>" required><br><br>

    <label for="spesialis" style="color: black;"><b>Spesialis Dokter  :</b></label>
    <select name="spesialis" style="width:158px; height:27px; font-weight: 900; float: right;" value="<?php echo $b['spesialis'];?>">---- pilih ----
        <option value="umum" style="width:80px;">Umum</option>
    </select><br><br>

    <label for="ttd" style="color: black"><b>Upload TTD  :</b></label>
    <input type="file" value="upload" name="ttd" style="font-weight: 900; color: black; float: right;"><br><br><br><br>

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 40px; left: 180px; position: absolute;">OK</button>
            </form>
    </div>
</body>
</html>