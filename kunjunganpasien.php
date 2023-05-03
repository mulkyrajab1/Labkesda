<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/2c52a77580.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
                
  <hr><h2 style="text-align:center;">KUNJUNGAN</h2><hr><br>
  <form method="post" action="aksi_kunjungan.php">
    <fieldset style="width:480px; border-color: black; border-radius: 0.9em; float:left; margin-top: 11px; "><legend>Form Pasien</legend>
      <div class="form-kunjungan">
            
            <label>Pilih Pasien :</label>
            <a href="#popups">Pilih Pasien</a><br><br>

            <label>Kode Pasien &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="kd_pasien" onfocus="load()" placeholder="Kode pasien" id="kd_pasien" value="" style="width:150px; margin-right: 0;"><br><br>

            
            <label>Nama Pasien &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="nama_pasien" onfocus="load()" placeholder="Nama Pasien" id="nama_pasien" value="" style="width:150px; margin-right: 0;"><br><br>

            <label>Jenis Kelamin Pasien :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="jenis_kelamin" onfocus="load()" placeholder="Jenis Kelmain" id="jenis_kelamin" value="" style="width:150px;  margin-right:0;"><br><br>

            <label>Umur Pasien  :</label>
            <input type="text" name="umur" onfocus="load()" placeholder="Umur" value="" id="umur" style="width:150px; margin-right:0;"><br><br>

            <label>Nomor Handphone Pasien   :</label>
            <input type="text" name="no_hp" onfocus="load()" placeholder="No. Hp" value="" id="no_hp" style="width:150px; margin-right:0;"><br><br>

            <label>Keperluan Pasien :</label>
            <select name="keluhann" id="keluhann" value="keluhann" style="width:155px; margin:0;">---- pilih ----
                <option value="Lab.biomolekuler">Lab. Biomolekuler</option>
                <option value="Lab.mikrobiologi">Lab. Mikrobiologi</option>
                <option value="Lab.air&makanan">Lab. Air & Makanan</option>
            </select><br><br>

      </div>
    </fieldset>

         <div class="buttonkunjungan">
        <input type="submit" name="submit"> 
        <button class="editkunjungan">Edit</button>
        <button class="hapuskunjungan">Hapus</button>
        <button class="kosongkunjungan">Kosongkan</button>
    </div>


    <?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_kunjungan) as kodeTerbesar FROM t_kunjungan ");
                $data = mysqli_fetch_array($query);
                $kodekunjungan = $data['kodeTerbesar'];
                $urutan = (int) substr($kodekunjungan, 3, 3,);
                $urutan++;
                $huruf = "KNJ";
                $kodekunjungan = $huruf. sprintf("%03s",$urutan);
              ?>


     <fieldset style=" position:absolute; margin-left: 650px; width:50px; border-color: black; float:right; border-radius:0.9em;"><legend>Form Kunjungan</legend>
      <div class="form-kunjungan" style="width:450px; margin-right:50px;">
            

            <label>Kode Kunjungan :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="kd_kunjungan" placeholder="Kode Kunjungan" id="kd_kunjungan" value="<?php echo "$kodekunjungan"; ?>" style="width:150px; margin-right:0; "><br><br>

            <label>Tanggal Kunjungan &nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="tgl_kunjungan" placeholder="Tanggal Kunjungan" id="tgl_kunjungan" value="<?php echo date("Y-m-d");?>" style="width:150px; margin-right: 0;"><br><br>

             <label>Kode Dokter &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="kd_dokter" placeholder="kode dokter"style="width:115px; margin-right: 0;" id="kd_dokter">
            <a href="#popupss">pilih</a><br><br>

            <label>Nama Dokter  :</label>
            <input type="text" name="nama_dokter" placeholder="Nama Dokter" onfocus="load()" style="width:150px; margin-right:0;" id="nama_dokter"><br><br>

            <label>Nip   :</label>
            <input type="text" name="nip" placeholder="Nip" onfocus="load()" style="width:150px; margin-right:0;" id="NIP"><br><br>

            <label>Spesialis Dokter   :</label>
            <input type="text" name="spesialis" placeholder="spesialis" onfocus="load()" style="width: 150px; margin-right:0;" id="spesialis"><br><br>

            <?php 
                include 'config.php';
                $status = "Belum Rekam Medis"
            ?>

            <label>Status Rekam Medis</label>
            <input type="text" name="status_rekam_medis" value="<?php echo $status;?>" style="width: 150px; margin-right:0;" id="status_rekam_medis"><br><br>
      </div>
    </fieldset>
</form>
  
  <div class="responstable">
    <div class="tablepilih">
  <div class="table-wrapper" style="margin-top: 50px;">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Kunjungan</th>
            <th>Kode Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Keluhan</th>
            <th>Kode Dokter</th>
            <th>Status Rekamedis</th>
        </tr>
        </thead>
        <tbody>
            <?php 
        include 'config.php';
                $no=1;
                $query = mysqli_query($koneksi, "SELECT * FROM t_kunjungan ");

                while ($b = mysqli_fetch_array($query)) {
                    
                
            ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin']; ?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['kd_dokter'];?></td>
            <td><?php echo $b['status_rekam_medis'];?></td>
            
        </tr>
    <?php }?>
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
</tbody>

</div>
	</div>

    <div id="popups">
        <div class="windows">
            <a href="#" class="closes-button" title="Close">X</a>
    <h1>PILIH PASIEN</h1><br>    
<table class="responstable">
    <div class="tablepilih">
        <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No. Hp</th>
            <th>Pengirim</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                include 'config.php';
                $no=1;
                $query = mysqli_query($koneksi, "SELECT * FROM t_pasien");
                while ($b = mysqli_fetch_array($query)) {
                    
                
            ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien']; ?></td>
            <td><?php echo $b['umur']; ?></td>
            <td><?php echo $b['Alamat_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['no_hp'];?></td>
            <td><?php echo $b['pengirim'];?></td>

            <td><center><button onclick="pilih_tbl('<?php echo $b['kd_pasien']?>','<?php echo $b['nama_pasien']?>','<?php echo $b['umur']?>','<?php echo $b['Alamat_pasien']?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['no_hp']?>','<?php echo $b['pengirim']?>')">Pilih</button></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tbl(kode,nama,umur,alamat,jenis,no,pengirim){    
            $('#kd_pasien').val(kode);
            $('#nama_pasien').val(nama);
            $('#jenis_kelamin').val(jenis);
            $('#umur').val(alamat);
            $('#no_hp').val(jenis);
        }
</script>


        </tr>
    <?php } ?>
        <tr>
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
</tbody>
</tbody>
</table>
</div>
    </div>

    <div id="popupss">
        <div class="windowss">
            <a href="#" class="closess-button" title="Close">X</a>
    <h1>PILIH PASIEN</h1><br>    
<table class="responstable">
    <div class="tablepilih">
        <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nip</th>
            <th>Spesialis</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                include 'config.php';
                $no=1;
                $query = mysqli_query($koneksi, "SELECT * FROM t_dokter");
                while ($b = mysqli_fetch_array($query)) {
                    
                
            ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_dokter']; ?></td>
            <td><?php echo $b['nama_dokter']; ?></td>
            <td><?php echo $b['NIP']; ?></td>
            <td><?php echo $b['spesialis'];?></td>

            <td><center><button onclick="pilih_tbld('<?php echo $b['kd_dokter']?>','<?php echo $b['nama_dokter']?>','<?php echo $b['NIP']?>','<?php echo $b['spesialis']?>')">Pilih</button></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tbld(kode,nama,nip,spesialis){    
            $('#kd_dokter').val(kode);
            $('#nama_dokter').val(nama);
            $('#NIP').val(nip);
            $('#spesialis').val(spesialis);
        }
</script>


        </tr>
    <?php } ?>
        <tr>
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
</tbody>
</tbody>
</table>
</div>
    </div>

</body>
</html>