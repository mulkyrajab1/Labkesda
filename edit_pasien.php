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
		$kode = isset($_GET['kd_pasien']) ? $_GET['kd_pasien']:"";
		$query = mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE kd_pasien='$kode'");
		$b = mysqli_fetch_array($query);
	?>
	<div class="edit_dokter">
	<form action="aksi_pasienedit.php" method="POST">
                <h3 style="text-align: center; color: black;">Form Pasien</h3><br>
    <label for="Kode_dokter" style="color: black;"><b>Kode Pasien   :</b></label>
    <input type="text" placeholder="" name="kd_pasien" style="float: right; font-weight: 900;" value="<?php echo $b['kd_pasien']; ?>" required><br><br>

    <label for="NIK" style="color: black;"><b>NIK   :</b></label>
    <input type="Text" name="NIK" style="float: right; font-weight: 900;" value="<?php echo $b['NIK'];?>"><br><br>

    <label for="nama_pasien" style="color: black;"><b>Nama Pasien   :</b></label>
    <input type="text" placeholder="Nama Pasien" name="nama_pasien" style="float: right; font-weight: 900;" value="<?php echo $b['nama_pasien']; ?>"><br><br>

    <label for="ttl" style="color: black;"><b>Tanggal lahir   :</b></label>
    <input type="date" placeholder="Tanggal Lahir" name="umur" style="float: right; font-weight: 900; width:158px; height:27px" value="<?php echo $b['umur']; ?>" required><br><br>

    <label for="no.tlp" style="color: black;"><b>Alamat     :</b></label>
    <input type="text" placeholder="Alamat" name="Alamat_pasien"  style="float: right; font-weight: 900;" value="<?php echo $b['Alamat_pasien'];?>" required><br><br>


    <label for="jenis_kelamin" style="color: black;"><b>Jenis Kelamin   :</b></label>
    <select name="jenis_kelamin" style="width:158px; height:27px;float: right; font-weight: 900;" value="<?php echo $b['jenis_kelamin'];?>">---- pilih ----
        <option value="Laki-laki"  style="font-weight: 900;" >Laki - Laki</option>
        <option value="Perempuan" style="font-weight: 900;" >Perempuan</option>
    </select><br><br>

    <label for="no.tlp" style="color: black;"><b>No. Hp    :</b></label>
    <input type="text" placeholder="No.Hp" name="no_hp" style="float: right; font-weight: 900;" value="<?php echo $b['no_hp'];?>" required><br><br>

    <label for="ttd" style="color: black;"><b>Pengirim  :</b></label>
    <input type="text" name="pengirim" style="float: right;font-weight: 900; color: black;" value="<?php echo $b['pengirim'];?>"><br><br><br><br>

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 40px; left: 180px; position: absolute;">OK</button>
    </form></div>
</body>
</html>