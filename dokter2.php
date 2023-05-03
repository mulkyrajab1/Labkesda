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
	<h3 style="position: absolute; align-items: center; margin-left: 750px; top:5%;">Dokter</h3>
    <table class="fl-table">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Dokter</th>
            <th>NIP</th>
            <th>Nama Dokter</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Spesialis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
     		$no = 1;
				
				if (isset($_GET['cari'])) {
					
			$cari = $_GET['cari'];	
            $kode = empty($_GET['kd_dokter']);
            $query = mysqli_query($koneksi, "SELECT * FROM t_dokter WHERE kd_dokter like '%".$cari."%' OR NIP like '%".$cari."%' OR nama_dokter like '%".$cari."%' OR jenis_kelamin like '%".$cari."%' ORDER BY kd_dokter ASC");
        		} else{
        			$query=mysqli_query($koneksi, "SELECT * FROM t_dokter");
        		}
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_dokter']; ?></td>
            <td><?php echo $b['NIP'];?></td>
            <td><?php echo $b['nama_dokter']; ?></td>
            <td><?php echo $b['jenis_kelamin']; ?></td>
            <td><?php echo $b['no_hp'];?></td>
            <td><?php echo $b['spesialis'];?></td>
            <td><a href="edit_dokter.php?kd_dokter=<?php echo $b['kd_dokter']; ?>"><i class="fa-solid fa-pen-to-square fa-lg"></i></a></td>
            <td><a href="deleted.php?kd_dokter=<?php echo $b['kd_dokter']; ?>"><i class="fa-solid fa-trash fa-lg" style="color: #f20202;"></i></a></td>
        </tr>
    <?php }?>
        <tbody>
    </table>
</div>

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
<div class="tambah">
<a href="#popup"><button>Tambah Data</button></a>
</div>
<div id="popup">
	    <div class="form-popup">
	    	<a href="#" class="close-btn" title="Close">X</a>
	    	<form action="aksi_dokter.php" method="POST">
	    		<h3 style="text-align: center; color: white;">Form Dokter</h3><br>
	<label for="Kode_dokter" style="color: white;"><b>Kode Dokter	:</b></label>
    <input type="text" placeholder="...." name="kd_dokter" style="float: right; font-weight: 900;" value="<?php echo "$kodedokter"; ?>" required><br><br>

    <label for="nip" style="color: white;"><b>Nip 	:</b></label>
    <input type="text" placeholder="...." name="nip" style="float: right; font-weight: 900;"><br><br>

    <label for="nama_dokter" style="color: white;"><b>Nama Dokter	:</b></label>
    <input type="text" placeholder="...." name="nama_dokter" style="float: right; font-weight: 900;" required><br><br>

    <label for="jenis_kelamin" style="color: white;"><b>Jenis Kelamin   :</b></label>
    <select name="jenis_kelamin" style="width:158px; height:27px;float: right; font-weight: 900;">---- pilih ----
        <option value="Laki-laki"  style="font-weight: 900;" >Laki - Laki</option>
        <option value="Perempuan" style="font-weight: 900;" >Perempuan</option>
    </select><br><br>

    <label for="no.tlp" style="color: white;"><b>No. Hp    :</b></label>
    <input type="text" placeholder="...." name="no_tlp" style="float: right; font-weight: 900;" required><br><br>

    <label for="spesialis" style="color: white;"><b>Spesialis Dokter  :</b></label>
    <select name="spesialis" style="width:158px; height:27px;float: right; font-weight: 900;">---- pilih ----
        <option value="umum" style="width:80px;">Umum</option>
        <option value="kimia lingkungan">Bagian Laboratorium Kimia Lingkungan</option>
    </select><br><br>

    <label for="ttd" style="color: white;"><b>Upload TTD  :</b></label>
    <input type="file" value="upload" name="ttd" style="float: right;font-weight: 900; color: white;"><br><br><br><br>

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 40px; left: 180px; position: absolute;">OK</button>
	    	</form>
    	</div>
	</div>
</div>

<div class="print">
	<a href=""><button value="Cetak"><i class="fa-solid fa-print"></i></button></a>
</div>

<form method="GET" action="" >
	<div class="cari">	
		<input type="text" name="cari" placeholder="search<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>">
		<button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
	</div>
</form>


</body>
</html>