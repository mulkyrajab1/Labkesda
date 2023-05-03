<?php 
	include 'config.php';

	$kode = isset($_REQUEST['kode_tindakan']) ? $_REQUEST['kode_tindakan']:"";
	$nama = isset($_REQUEST['tindakan']) ? $_REQUEST['tindakan']:"";
	$harga = isset($_REQUEST['harga_tindakan']) ? $_REQUEST['harga_tindakan']:"";
	$query=mysqli_query($koneksi, "INSERT INTO t_tindakan VALUES ('$kode','$nama','$harga');");


	if (!$query) {
		die('query error :'.mysqli_errno($koneksi).'_'.mysqli_error($koneksi));
	}
	header("location:tindakan2.php")

?>