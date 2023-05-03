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
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">	
	<title></title>
</head>
<body>
	<div class="container">
		<div class="left-side"><br><br>
            <ul>
                <a href="index.php" style="text-decoration: none; "><img src="jpg.png" style="width:130px; height: 100px; padding-left: 63px;"></a>
                <p style="text-align: center; color: navajowhite;"><?php echo date('-------- d F, Y -------- H:i:s') ?><br><br></p>
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
            </ul>
            </div>
			<div class="right-side"><br>

            <?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_dokter) as kodeTerbesar FROM t_dokter ");
                $data = mysqli_fetch_array($query);
                $kodedokter = $data['kodeTerbesar'];
                $urutan = (int) substr($kodedokter, 3, 3,);
                $urutan++;
                $huruf = "DR";
                $kodedokter = $huruf. sprintf("%03s",$urutan);
              ?>
				<table class="responstable">
  <hr><h2 style="text-align:center;">DOKTER</h2><hr><br>
  <a href="#popup"><button class="tombol-registd1"><img src="add.png" style="width:20px; height:20px;"></a>
	<div id="popup">
		<div class="window">
			<a href="#" class="close-button" title="Close">X</a>
				<form action="aksi_dokter.php" class="form-container">
    <h1>FORM DOKTER</h1>

    <label for="Kode_dokter"><b>Kode Dokter	:</b></label>
    <input type="text" placeholder="kode" name="kode_dokter" value="<?php echo "$kodedokter"; ?>" required><br><br>

    <label for="nip"><b>Nip 	:</b></label>
    <input type="text" placeholder="nip" name="nip"><br><br>

    <label for="nama_dokter"><b>Nama Dokter	:</b></label>
    <input type="text" placeholder="Nama Dokter" name="nama_dokter" required><br><br>

    <label for="jenis_kelamin"><b>Jenis Kelamin   :</b></label>
    <select name="jenis_kelamin" style="width:153px; height:27px;">---- pilih ----
        <option value="Laki-laki" >Laki - Laki</option>
        <option value="Perempuan" >Perempuan</option>
    </select><br><br>

    <label for="no.tlp"><b>No. Hp    :</b></label>
    <input type="text" placeholder="No.Hp" name="no_tlp" required><br><br>

    <label for="spesialis"><b>Spesialis Dokter  :</b></label>
    <select name="spesialis" style="width:153px; height:27px;">---- pilih ----
        <option value="umum" style="width:80px;">Umum</option>
    </select><br><br>

    <label for="ttd"><b>Upload TTD  :</b></label>
    <input type="file" value="upload" name="ttd"><br><br><br><br>

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
            <th>Kode Dokter</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>No. Hp</th>
            <th>Spesialis Dokter</th>
            <th>TTD</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>

        <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT * FROM t_dokter");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_dokter']; ?></td>
            <td><?php echo $b['NIP'];?></td>
            <td><?php echo $b['nama_dokter']; ?></td>
            <td><?php echo $b['jenis_kelamin']; ?></td>
            <td><?php echo $b['no_hp'];?></td>
            <td><?php echo $b['spesialis'];?></td>
            <td><a href="updated.php<?php echo $b['kd_dokter']; ?>">Edit</a></td>
            <td><a href="deleted.php?kd=<?php echo $b['kd_dokter']; ?>">Hapus</a></td>
        </tr>
    <?php }?>

        <tr>
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
        </tr>
        <tr>
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
        </tr>
        <tr>
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
        </tr>
        <tr>
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
        </tr>
        <tr>
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
</body>
</html>