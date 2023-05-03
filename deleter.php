<?php 
include "config.php";

$kode=isset($_GET['kd_rekam_medis']) ? $_GET['kd_rekam_medis']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_rekam_medis WHERE t_rekam_medis.kd_rekam_medis = '$kode'");
if ($sql) {
    echo "<script>alert ('Data Pasien Berhasil Di Hapus!')</script>";
    header("refresh:0;rekamedis2.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Di ubah')</script>";
    header("refresh:0;rekamedis2.php");
}

?>