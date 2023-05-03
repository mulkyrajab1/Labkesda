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
			<div class="left-side"><br><br>
                <a href="index.php" style="text-decoration: none; "><img src="jpg.png" style="width:130px; height: 100px; padding-left: 63px;"></a>
                <p style="text-align: center; color: white;"><?php echo date('-------- d F, Y -------- H:i:s') ?><br><br></p>
                <h3 align="center" style="color: navajowhite;">Master</h3>
            
                <a href="dokter.php" style="color:navajowhite; text-decoration: none;">
                    <li><i class="fa-solid fa-user-doctor" style="width:30px; height:30px; color: navajowhite;"></i>&nbsp;DOKTER</li>
                </a>
                <a href="pasien.php" style="color:navajowhite; text-decoration:none;">
                    <li><i class="fa-solid fa-address-card" style="width:30px; height:30px; color: navajowhite;"></i>&nbsp;PASIEN</li>
                </a>
                <a href="tindakan.php" style="color:navajowhite; text-decoration:none;">
                    <li><i class="fa-solid fa-check-to-slot" style="width: 30px; height:30px; color: navajowhite;"></i>&nbsp;TINDAKAN</li>
                </a><br><br>
                <h3 align="center" style="color:navajowhite;">Transaksi/Lab</h3>

                <a href="kunjunganpasien.php" style="color:navajowhite; text-decoration:none;">
                    <li><i class="fa-solid fa-hospital-user" style="width: 30px; height:30px; color: navajowhite;"></i>&nbsp;KUNJUNGAN</li>
                </a>
                <a href="rekamedis.php" style="color:navajowhite; text-decoration:none;">
                    <li><i class="fa-solid fa-kit-medical" style="width:30px; height:30px; color: navajowhite;"></i>&nbsp;REKAMEDIS</li>
                </a>
            </div>
			<div class="right-side"><br>
                <?php
                    include 'config.php';
                    $query = mysqli_query($koneksi, "SELECT max(kd_tindakan)as kodeTerbesar FROM t_tindakan");
                    $data = mysqli_fetch_array($query);
                    $kodetindakan = $data['kodeTerbesar'];
                    $urutan = (int)substr($kodetindakan, 3, 3);
                    $urutan++;
                    $huruf = "TD";
                    $kodetindakan = $huruf. sprintf("%03s",$urutan);    

                ?>
				<table class="responstable">
  <hr><h2 style="text-align:center;">TINDAKAN</h2><hr><br>
  <a href="#popup"><button class="tombol-registd1"><img src="add.png" style="width:20px; height:20px;"></a>
	<div id="popup">
		<div class="window">
			<a href="#" class="close-button" title="Close">X</a>
				<form action="aksi_tindakan.php" class="form-container">
    <h1>FORM TINDAKAN</h1>

    <label for="kode"><b>Kode Tindakan    :</b></label>
    <input type="text" placeholder="Kode Tindakan" name="kode_tindakan" value="<?php echo "$kodetindakan"; ?>" required><br><br>

    <label for="nama"><b>Nama Tindakan	:</b></label>
    <input type="text" placeholder="Nama Tindakan" name="tindakan" required><br><br>

    <label for="harga"><b>Harga Tindakan 	:</b></label>
    <input type="text" placeholder="Harga Tindakan" name="harga_tindakan" value="Rp."><br><br><br><br>

    <input type="submit" name="submit" value="Submit">

  </form>
		</div>
	</div>
  </button>
  <button class="tombol-registd2"><img src="edit.png" style="width:20px; height:20px;"></button>
  <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                include 'config.php';
                $no=1;
                $kode = mysqli_query($koneksi, "SELECT * FROM t_tindakan");
                while ($b = mysqli_fetch_array($kode)) {
                    
                

            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_tindakan']; ?></td>
            <td><?php echo $b['tindakan']; ?></td>
            <td><?php echo $b['harga_tindakan']; ?></td>
            <td><a href="editet.php">Edit</a></td>
            <td><a href="deletet.php?code=<?php echo $b['kd_tindakan']; ?>">Hapus</a></td>
        </tr>
    <?php } ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tbody>
    </table>
</div>
				<!--<div class="garis">---------------------------------------------------------------------------------------------------------------------------------------------------------------<h2 align="center">TINDAKAN</h2>---------------------------------------------------------------------------------------------------------------------------------------------------------------</div><br><br>
				<fieldset style="width: 280px; height:580px; line-height: 20px; margin-left: 5%; margin-bottom: 100px; float:left; background-color:rgba(0, 0, 0, 0.5);"><legend><h3>FORM PASIEN</h3></legend>
 <div class="grup">
 	<label for="kodepasien">Kode pasien<span class="required">*</span></label><br>
 	<input type="text" name="kodepaien" required placeholder="">
 	<i class="fa-solid fa-magnifying-glass"></i>
 </div><br>
 <div class="grup">
 	<label for="nama">Nama Pasien<span class="required">*</span></label><br>
 	<input type="text" name="Nama" required placeholder="">
 </div><br>
 <div class="grup">
 	<label for="ttl">Tanggal lahir<span class="required">*</span></label><br>
 	<input type="date" name="ttl" required placeholder="">
 </div><br>
 <div class="grup">
 	<label for="no.telp">Alamat<span class="required">*</span></label><br>
 	<input type="tel" name="No.Hp" pattern="\d\d\d\d\d\d\d\d\d\d\d\d" required placeholder="">
 </div><br>
 <div class="grup-offset" style="margin-left:20px; color:#ffff;">
 	<label for="JK">Jenis Kelamin<span class="required">*</span><br></label>
 	<input type="radio" name="JK" value="Laki-Laki" required>Laki-laki
 	<input type="radio" name="JK" value="Perempuan" required>Perempuan
 </div><br>
 <div class="grup">
 	<label for="tujuan">No.telpon*</label><br>
 	<input type="textarea" name="tujuan" rows="3" cols="10" required placeholder="">
 </div><br>
 <div class="grup">
 	<label for="tujuan">Pengirim*</label><br>
 	<input type="textarea" name="tujuan" rows="3" cols="10" required placeholder="">
 </div><br>
 <div class="grup">
 	<label for="keperluan">Keperluan*</label><br>
 	<select id="keperluan" name="keperluan">
 		<option value="Biomolekuler">Biomolekuler</option>
 		<option value="kimiaklinik">Lab. Kimia Klinik</option>
 		<option value="airmakanan">Lab. Air dan makanan</option>
 	</select>
 </div><br>
 <div class="grup-offset" style="margin-left: 80px;">
 <button type="submit" value="Sign In">Submit</button>
 <button type="reset" value="Reset">Reset</button>
 </div>
 </fieldset><br>
			</div>
		</div>

	</body>
</html>--!>