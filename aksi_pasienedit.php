<?php 
	include 'config.php';

	$kode = isset($_REQUEST['kd_pasien']) ? $_REQUEST['kd_pasien']:"";
	$nik = isset($_REQUEST['NIK']) ? $_REQUEST['NIK']:"";
	$nama = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$ttl = isset($_REQUEST['umur']) ? $_REQUEST['umur']:"";
	$jk = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
	$nohp = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";
	$alamat = isset($_REQUEST['Alamat_pasien']) ? $_REQUEST['Alamat_pasien']:"";
	$pengirim = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";


	


	$query=mysqli_query($koneksi, "UPDATE t_pasien SET nama_pasien='$nama', NIK='$nik', umur='$ttl',jenis_kelamin='$jk',no_hp='$nohp',Alamat_pasien='$alamat',pengirim='$pengirim' WHERE kd_pasien='$kode'");


	if (!$query) {
		die('query error :'.mysqli_errno($koneksi).'_'.mysqli_error($koneksi));
	}
	header("location:pasien2.php")

?>