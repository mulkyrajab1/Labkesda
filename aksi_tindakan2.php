<?php
	include 'config.php';


	$kode = isset($_REQUEST['kd_tindakan']) ? $_REQUEST['kd_tindakan']:"";
	$tindakan = isset($_REQUEST['tindakan']) ? $_REQUEST['tindakan']:"";
	$harga = isset($_REQUEST['harga']) ? $_REQUEST['harga']:"";

	$query = mysqli_query($koneksi, "INSERT INTO t_tindakan VALUES ('$kode','$tindakan' , '$harga')") or die(mysqli_error($koneksi));

	if (!$query) {
	  	die('Query Error:'.mysqli_errno($koneksi).'-'.mysqli_error($koneksi));
	  }  

	  header("location:tindakan2.php");

?>