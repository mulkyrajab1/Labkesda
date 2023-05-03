<?php 
include "config.php";

$kode=isset($_GET['kd_kunjungan']) ? $_GET['kd_kunjungan']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_kunjungan WHERE t_kunjungan.kd_kunjungan = '$kode'");
if ($sql) {
    echo "<script>alert ('Data Kunjungan Berhasil Di Hapus!')</script>";
    header("refresh:0;kunjungan2.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Di ubah')</script>";
    header("refresh:0;kunjungan2.php");
}

?>