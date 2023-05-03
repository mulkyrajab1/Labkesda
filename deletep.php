<?php 
include 'config.php';

$kode=isset($_GET['kd_pasien']) ? $_GET['kd_pasien']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_pasien WHERE t_pasien.kd_pasien = '$kode'");
if ($sql) {
 	echo "<script>alert ('Data Pasien Berhasil Di Hapus!')</script>";
 	header("refresh:0;pasien2.php");
}else{
 	echo "<script>alert ('Data Tidak Berhasil Di hapus!')</script>";
 	header("refresh:0;pasien2.php");
} 
?>