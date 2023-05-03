<?php 
include "config.php";

$kode=isset($_GET['kd_hematologi']) ? $_GET['kd_hematologi']:"";
$sql=mysqli_query($koneksi, "DELETE FROM hematologi WHERE hematologi.kd_hematologi = '$kode'");
if ($sql) {
    echo "<script>alert ('Data Hematologi Berhasil Di Hapus!')</script>";
    header("refresh:0;hematologi2.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Di ubah')</script>";
    header("refresh:0;hematologi2.php");
}

?>