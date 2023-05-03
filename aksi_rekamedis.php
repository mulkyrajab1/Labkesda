<?php 
	include 'config.php';
	$koder = isset($_REQUEST['kd_rekam_medis']) ? $_REQUEST['kd_rekam_medis']:"";
	$tgl = isset($_REQUEST['tgl_rekam_medis']) ? $_REQUEST['tgl_rekam_medis']:"";
	$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$kodep = isset($_REQUEST['kd_pasien']) ? $_REQUEST['kd_pasien']:"";
	$namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$namad = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
	$jenis = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
	$hasil = isset($_REQUEST['hasil_diagnosa']) ? $_REQUEST['hasil_diagnosa']:"";
	$total = isset($_REQUEST['total']) ? $_REQUEST['total']:"";
	$status = isset($_REQUEST['status_rekam_medis']) ? $_REQUEST['status_rekam_medis']:"";

	$query =mysqli_query($koneksi, "INSERT INTO t_rekam_medis VALUES ('$koder','$tgl', '$kodek', '$kodep' ,'$namap','$namad','$jenis','$hasil','$total','$status');") or die(mysqli_error($koneksi));
	if ($query) {
		
		echo "<script>window.alert('Data Berhasil Di Tambahkan..!')
					  window.location=('rekamedis2.php#popupr')</script>";
	}

	$query2 = mysqli_query($koneksi, "UPDATE t_kunjungan SET status_rekam_medis='$status'");
		

    

?>