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
	<nav class="sidebar">
        <div class="text"><a href="sidebar.php">LABKESDA</a></div>
        <ul>
            <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp;Registrasi
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="dokter2.php" style="font-size: 15px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dokter</a></li>
                    <li><a href="pasien2.php" style="font-size: 15px;"><i class="fa-solid fa-bed"></i>&nbsp;&nbsp;&nbsp;&nbsp;Pasien</a></li>
                    <li><a href="tindakan2.php" style="font-size: 15px;"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tindakan</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="serv-btn"><i class="fa-solid fa-money-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;Transaksi
                    <span class="fas fa-caret-down second"></span>
                </a>            
                <ul class="serv-show">
                    <li><a href="kunjungan2.php" style="font-size: 15px;"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;&nbsp;&nbsp;Kunjungan</a></li>
                    <li><a href="rekamedis2.php" style="font-size: 15px;"><i class="fa-duotone fa-book-medical"></i>&nbsp;&nbsp;&nbsp;&nbsp;Rekam Medis</a></li>    
                </ul>
            </li>
            <li>
                <a href="#" class="lab-btn"><i class="fa-solid fa-flask"></i>&nbsp;&nbsp;&nbsp;&nbsp;Laboratorium
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="lab-show">
                    <li><a href="lab_biomokuler.php" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;Biomokuler</a></li>
                    <li><a href="lab_kimia.php" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;Kimia Klinik</a></li>
                    <li><a href="lab_airmakan.php" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;Air & Makanan</a></li>
                </ul>
            </li><br><br>
            <li><a href="logins.php">logout</a></li>
        </ul>
    </nav>


	<script>
		$('.feat-btn').click(function(){
			$('nav ul .feat-show').toggleClass("show");
			$('nav ul .first').toggleClass("rotate");
		});
		$('.serv-btn').click(function(){
			$('nav ul .serv-show').toggleClass("show1");
			$('nav ul .second').toggleClass("rotate");
		});
		$('.lab-btn').click(function(){
			$('nav ul .lab-show').toggleClass("show2");
			$('nav ul .third').toggleClass("rotate");
		});
		$('nav ul li').click(function(){
			$(this).addclass("active").siblings().removeClass("active");
		})
	</script>
	<div class="rightbar">
	<h3 style="position: absolute; align-items: center; margin-left: 750px; top:5%;">Lab Biomokuler</h3>
    <table class="fl-table">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Biomokuler</th>
            <th>Nama Pasien</th>
            <th>Tanggal Periksa</th>
            <th>No_MCU</th>
            <th>Jenis Test</th>
            <th>Hasil</th>
            <th>Rdprp CT</th>
            <th>DRFI-E CT</th>
            <th>NCT</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $id = isset($_GLOBALS['kd_biomokuler']) ? $_GLOBALS['kd_biomokuler']:"";
            $query = mysqli_query($koneksi, "SELECT * FROM t_biomokuler");
            while ($b = mysqli_fetch_array($query)) {
                
            
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_biomokuler']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['tgl_periksa'];?></td>
            <td><?php echo $b['no_mcu'];?></td>
            <td><?php echo $b['jenis_swab'];?></td>
            <td><?php echo $b['hasil_swab'];?></td>
            <td><?php echo $b['rdp'];?></td>
            <td><?php echo $b['drp'];?></td>
            <td><?php echo $b['nct'];?></td>
            <td><a href="deletelb.php?kd_biomokuler=<?php echo $b['kd_biomokuler']; ?>">Hapus</a></td>
            <td><a href="printbio_aksi.php?kd_biomokuler=<?php echo $b['kd_biomokuler'];?>">Print</a></td>
        </tr>
    <?php }?>

        <tbody>
    </table>
</div>

			<?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_biomokuler) as kodeTerbesar FROM t_biomokuler ");
                $data = mysqli_fetch_array($query);
                $kodebiomokuler = $data['kodeTerbesar'];
                $urutan = (int) substr($kodebiomokuler, 3, 3,);
                $urutan++;
                $huruf = "BIOMO";
                $kodebiomokuler = $huruf. sprintf("%03s",$urutan);
              ?>

<a href="#popuplb" style="position:relative; left: 320px; top: 100px; text-decoration: none; "><button style=" width: 200px; height:30px; border-radius: 0.5em;">Tambah Data</button></a>
<div id="popuplb">
	<div class="form-popuplb">
	    	<a href="#" class="closeb-btn" title="Close">X</a>
	    	<form action="aksi_biomokuler.php" method="POST">
	    		<h3 style="text-align: center; color: white;">Form Biomokuler</h3><br>

	<label for="Kode_biomokuler" style="color: white;"><b>Kode Biomokuler	:</b></label>
	<label for="no_mcu" style="color: white; float: right;">No. MCU 	:</label><br>
    <input type="text" placeholder="kode" name="kd_biomokuler" style="" value="<?php echo "$kodebiomokuler" ?>" required>
    <input type="text" name="no_mcu" style="float: right; color: black;"><br><br>

    <label for="Tanggal Periksa" style="color: white;"><b>Tanggal Periksa 	:</b></label>
    <label for="hasil_pemeriksaan" style="color: white; float: right;">Hasil Pemeriksaan 	:</label><br>
    <input type="text" placeholder="Tanggal Periksa" name="tgl_periksa" value="<?php echo date("Y-m-d"); ?>" style="">
    <select name="hasil_pemeriksaan" style="width:158px; height:27px;float: right;">---- pilih ----
        <option value="positif"  style="font-weight: 900;" >Positif</option>
        <option value="negatif" style="font-weight: 900;" >Negatif</option>
    </select><br><br>

    <label for="kd_kunjungan" style="color: white;"><b>Kode Kunjungan	:</b></label>
    <label for="rdprp" style="color: white; float: right;">Rdprp CT</label><br>
    <input type="text" name="Kd_kunjungan" id="kd_kunjungan" onload="load()" style="" ><a href="#popupkj" style="text-decoration: none; color: white;">Pilih</a>
    <input type="text" name="rdrp" style="float: right;font-weight: 900; color: black;"><br><br>

    <label for="nama_pasien" style="color: white;">Nama Pasien 	:</label>
    <label for="drfi" style="color: white;float: right;">DRFI-E CT</label><br>
    <input type="text" name="nama_pasien" id="nama_pasien" onload="load()">
    <input type="text" name="drfi" style="float: right; color: black;"><br><br>

    <label for="jenis_kelamin" style="color: white;"><b>Jenis Kelamin   :</b></label>
    <label for="nct" style="color: white;float: right;">NCT</label><br>
    <select name="jenis_kelamin" id="jenis_kelamin" onload="load()" style="width:158px; height:27px;">---- pilih ----
        <option value="Laki-laki"  style="" >Laki - Laki</option>
        <option value="Perempuan" style="" >Perempuan</option>
    <input type="text" name="nct" style="float: right; color: black;"><br><br>

    <label for="alamat" style="color: white;">Alamat pasien		:</label>
    <label for="no_hp" style="color: white; float: right;"><b>No Hp  :</b></label><br>
	<input type="text" name="alamat_pasien" id="alamat_pasien" onload="laod()" style="">
    <input type="text" name="no_hp" id="no_hp" onload="load()" style="float: right;" required><br><br>

    <label for="keperluan" style="color: white;"><b>Keperluan Pasien    :</b></label>
    <label for="nama_dokter" style="color: white; float: right;"><b>Nama Dokter  :</b></label><br>
    <select name="keperluan" id="keperluan" onload="load()" style="width:158px; height:27px;">---- pilih ----
        <option value="Antigen"  style="" >Antigen</option>
        <option value="rRT-PCR" style="" >rRT-PCR</option>
    <input type="text" value="" name="nama_dokter" id="nama_dokter" onload="laod()" style="color: black;float: right;"><a href="#popupd" style="text-decoration: none; color: white; float: right;">Pilih</a>
    
    <br><br><label for="tgl_lahir" style="color: white;">Tanggal Lahir 	:</label><br>
    <input type="text" name="tgl_lahir" id="tgl_lahir" onload="load()" style="">
    <br><br><br><br>

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 80px; left: 600px; position: relative;">OK</button>
    <button type="reset" name="reset" value="reset" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 80px; left: 640px; position: relative;">reset</button>
	    	</form>
	</div>
	</div>

	<div id="popupkj">
            <a href="#popuplb" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Kunjungan</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Keperluan</th>
            <th>Kode Dokter</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT t_kunjungan.kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_pasien.Alamat_pasien,t_kunjungan.jenis_kelamin,t_pasien.umur,t_pasien.no_hp,keluhan,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter WHERE t_kunjungan.keluhan='Lab.biomokuler' AND t_kunjungan.status_rekam_medis='Sudah Di Rekamedis'");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['Alamat_pasien'];?></td>
            <td><?php echo $b['umur'];?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['kd_dokter'];?></td>
            <td><?php echo $b['status_rekam_medis'];?></td>
            <td><center><button style="color: black; font-weight: 900;" onclick="pilih_tblk('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien'] ?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['Alamat_pasien']?>','<?php echo $b['no_hp']?>','<?php echo $b['umur'] ?>')">Pilih</button></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblk(kodek,namap,jenis,alamat,no,umur){    
            $('#kd_kunjungan').val(kodek);
            $('#nama_pasien').val(namap);
            $('#jenis_kelamin').val(jenis);
            $('#alamat_pasien').val(alamat);
            $('#no_hp').val(no);
            $('#tgl_lahir').val(umur);
        }
</script>


        </tr>
    <?php } ?>

        
        <tbody>
    </table>
</tbody>
</tbody>
</table>
</div>

<div id="popupd">
            <a href="#popuplb" class="closed-btn" title="Close">X</a>
    <h1>PILIH DOKTER</h1><br>    
<table class="responstable">
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

            <td><center><button style="color: black; font-weight: 900;" onclick="pilih_tbld('<?php echo $b['kd_dokter']?>','<?php echo $b['nama_dokter']?>','<?php echo $b['NIP']?>','<?php echo $b['spesialis']?>')">Pilih</button></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tbld(kode,nama,nip,spesialis){    
            $('#kd_dokter').val(kode);
            $('#nama_dokter').val(nama);
            $('#nip').val(nip);
            $('#spesialis').val(spesialis);
        }
</script>


        </tr>
    <?php } ?>
        
        <tbody>
    </table>
</tbody>
</tbody>
</table>
</div>

<div class="print">
    <a href=""><button value="Cetak"><i class="fa-solid fa-print"></i></button></a>
</div>

<form method="GET" action="" >
    <div class="cari">  
        <input type="text" name="cari" placeholder="Search....">
        <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>

</body>
</html>