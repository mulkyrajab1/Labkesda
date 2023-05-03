<?php 
	
	include 'config.php';

		$id = isset($_GET['kd_feaces']) ? $_GET['kd_feaces']:"";
		$kodek = isset($_GET['kd_kunjungan']) ? $_GET['kd_kunjungan']:"";
		$tgl = isset($_GET['tgl_periksa']) ? $_GET['tgl_periksa']:"";
		$namap = isset($_GET['nama_pasien']) ? $_GET['nama_pasien']:"";
		$pengirim = isset($_GET['pengirim']) ? $_GET['pengirim']:"";
		$alamat = isset($_GET['alamat']) ? $_GET['alamat']:"";
		$tll = isset($_GET['tgl_lahir']) ? $_GET['tgl_lahir']:"";
		$no = isset($_GET['no_hp']) ? $_GET['no_hp']:"";
		$konsistensi = isset($_GET['konsistensi']) ? $_GET['konsistensi']:"";
		$warna = isset($_GET['warna']) ? $_GET['warna']:"";
		$darah = isset($_GET['darah']) ? $_GET['darah']:"";
		$amoeba = isset($_GET['amoeba']) ? $_GET['amoeba']:"";
		$leukosit = isset($_GET['leukosit']) ? $_GET['leukosit']:"";
		$eritrosit = isset($_GET['eritrosit']) ? $_GET['eritrosit']:"";
		$telurcacing = isset($_GET['telur_cacing']) ? $_GET['telur_cacing']:"";
		$sisamakan = isset($_GET['sisamakan']) ? $_GET['sisamakan']:"";	

		$query = mysqli_query($koneksi, "INSERT INTO t_feaces VALUES('$id','$kodek','$tgl','$namap','$pengirim','$alamat','$tll','$no','$konsistensi','$warna','$darah','$amoeba','$leukosit','$eritrosit','$telurcacing','$sisamakan')")or die(mysqli_error($koneksi));

		if ($query) {
			echo "<script>window.alert('Data Berhasil Ditambahkan...')
						  window.location='feaces2.php'</script>";
		}
		
		
		

?>