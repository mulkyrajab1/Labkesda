<?php 
include "config.php";

$kode=isset($_GET['kd_tindakan']) ? $_GET['kd_tindakan']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_tindakan WHERE t_tindakan.kd_tindakan = '$kode'");
if ($sql) {
	echo "<script>alert ('Data Tindakan Berhasil Di hapus!')</script>";
	header("refresh:0;tindakan2.php");
}else{
	echo "<script>alert ('Data Tindakan Tidak Dapat Dihapus')</script>";
	header("refresh:0;tindakan2.php");
}
?>