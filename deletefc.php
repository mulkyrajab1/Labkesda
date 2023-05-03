<?php 
include 'config.php';

$kode=isset($_GET['kd_feaces']) ? $_GET['kd_feaces']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_feaces WHERE t_feaces.kd_feaces = '$kode'");
if ($sql) {
 	echo "<script>alert ('Data Feaces Berhasil Di Hapus!')</script>";
 	header("refresh:0;feaces2.php");
}else{
 	echo "<script>alert ('Data Tidak Berhasil Di hapus!')</script>";
 	header("refresh:0;feaces2.php");
} 
?>