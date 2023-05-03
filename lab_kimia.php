<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lab Kimia Klinik</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/5d9df9863e.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
	<nav class="sidebar">
		<div class="text"><a href="lab_kimia.php">Lab KimiaKlinik</a></div>
		<ul>
			<li><a href="hematologi2.php">HEMATOLOGI</a></li>
			<li><a href="mikrobiologi2.php">MIKROBIOLOGI</a></li>
            <li><a href="urine2.php">URINE</a></li>
            <li><a href="kimiaklinik2.php">KIMIAKLINIK</a></li>
            <li><a href="feaces2.php">FEACES</a></li>
            <li><a href="imunologi2.php">IMUNOLOGI</a></li>
            <li><a href="hasilklinik2.php">HASIL KLINIK</a></li><br><br>
			<li><a href="dashboard.php">Kembali</a></li>
		</ul>
	</nav>

	<div class="rightbar">
	<h3 style="position: absolute; align-items: center; margin-left: 700px; top:10%;">Lab KimiaKlinik</h3><br><br>
	<div class="content-dashboard" style="width: 1000px; display:flex; flex-direction: c;">
		<?php
			include 'config.php';

			$query = mysqli_query($koneksi, "SELECT * FROM hematologi");
			$b = mysqli_num_rows($query);
		?>
		<?php
			include 'config.php';

			$query = mysqli_query($koneksi, "SELECT * FROM t_mikrobiologi");
			$c = mysqli_num_rows($query);
		?>
		<?php
			include 'config.php';

			$query = mysqli_query($koneksi, "SELECT * FROM t_urinalisa");
			$d = mysqli_num_rows($query);
		?>
		<?php 
			include 'config.php';

			$query = mysqli_query($koneksi, "SELECT * FROM t_kimia_klinik");
			$e = mysqli_num_rows($query);
		?>
		<?php 
			include 'config.php';

			$query = mysqli_query($koneksi, "SELECT * FROM t_feaces");
			$f = mysqli_num_rows($query);
		?>
		<?php 
			include 'config.php';

			$query = mysqli_query($koneksi, "SELECT * FROM t_immunologi");
			$g = mysqli_num_rows($query);
		?>
		<div class="content"><i class="fa-sharp fa-solid fa-hospital-user"></i><h5>Data Pasien</h5><h5><?php echo $b; ?></h5></div>
		<div class="content"><i class="fa-solid fa-eye"></i><h5>Data Kunjungan</h5><h5><?php echo $c; ?></h5></div>
		<div class="content"><i class="fa-solid fa-flask"></i><h5>Data Kimia Klinik</h5><h5><?php echo $d; ?></h5></div>
		<div class="content"><i class="fa-solid fa-bed"></i><h5>Data Rekam Medis</h5><h5><?php echo $e; ?></h5></div>
		<div class="content"><i class="fa-solid fa-bed"></i><h5>Data Rekam Medis</h5><h5><?php echo $f; ?></h5></div>
		<div class="content"><i class="fa-solid fa-bed"></i><h5>Data Rekam Medis</h5><h5><?php echo $g; ?></h5></div>

</body>
</html>