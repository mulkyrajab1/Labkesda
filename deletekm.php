<?php 
include "config.php";

$kode=isset($_GET['kd_kimia']) ? $_GET['kd_kimia']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_kimia_klinik WHERE t_kimia_klinik.kd_kimia = '$kode'");
if ($sql) {
    echo "<script>alert ('Data Kimia Klinik Berhasil Di Hapus!')</script>";
    header("refresh:0;kimiaklinik2.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Di ubah')</script>";
    header("refresh:0;kimiaklinik2.php");
}

?>