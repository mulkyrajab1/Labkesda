<?php 
include 'config.php';

$kode=isset($_GET['kd_imun']) ? $_GET['kd_imun']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_immunologi WHERE t_immunologi.kd_imun = '$kode'");
if ($sql) {
 	echo "<script>alert ('Data Imunologi Berhasil Di Hapus!')</script>";
 	header("refresh:0;imunologi2.php");
}else{
 	echo "<script>alert ('Data Imunologi Berhasil Di hapus!')</script>";
 	header("refresh:0;imunologi2.php");
} 
?>