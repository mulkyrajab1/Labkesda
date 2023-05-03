<?php 
	include 'config.php';
	$koder = isset($_REQUEST['kd_rekam_medis']) ? $_REQUEST['kd_rekam_medis']:"";
	$tgl = isset($_REQUEST['tgl_rekam_medis']) ? $_REQUEST['tgl_rekam_medis']:"";
	$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$namad = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
	$hasil = isset($_REQUEST['hasil_diagnosa']) ? $_REQUEST['hasil_diagnosa']:"";
	$total = isset($_REQUEST['total_biaya']) ? $_REQUEST['total_biaya']:"";

	$query = mysqli_query($koneksi, "DELETE FROM t_rekam_medis WHERE kd_rekam_medis = '$koder'");
	if (!$query) {
		echo "tidak";
	}

	header("location:rekamedis.php");

?>