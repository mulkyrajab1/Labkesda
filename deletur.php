<?php 
include 'config.php';

$kode=isset($_GET['kd_urine']) ? $_GET['kd_urine']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_urinalisa WHERE kd_urine = '$kode'");
if ($sql) {
 	echo "<script>alert ('Data Urin Berhasil Di Hapus!')</script>";
 	header("refresh:0;urine2.php");
}else{
 	echo "<script>alert ('Data Urin Berhasil Di hapus!')</script>";
 	header("refresh:0;urine2.php");
} 
?>