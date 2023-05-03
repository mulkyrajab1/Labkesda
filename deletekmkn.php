<?php 
include 'config.php';

$kode=isset($_GET['kd_makanan']) ? $_GET['kd_makanan']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_periksa_makan WHERE t_periksa_makan.kd_makanan = '$kode'");
if ($sql) {
 	echo "<script>alert ('Data Kimia Makanan Berhasil Di Hapus!')</script>";
 	header("refresh:0;makanan.php");
}else{
 	echo "<script>alert ('Data Tidak Berhasil Di hapus!')</script>";
 	header("refresh:0;makanan.php");
} 
?>