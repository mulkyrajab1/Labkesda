<?php 
include 'config.php';

$kode=isset($_GET['kd_hasil']) ? $_GET['kd_hasil']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_hasil_klinik WHERE t_hasil_klinik.kd_hasil = '$kode'");
if ($sql) {
 	echo "<script>alert ('Data Hasil Klinik Berhasil Di Hapus!')</script>";
 	header("refresh:0;hasilklinik2.php");
}else{
 	echo "<script>alert ('Data Hasil Klinik Berhasil Di hapus!')</script>";
 	header("refresh:0;hasilklinik2.php");
} 
?>