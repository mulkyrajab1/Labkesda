<?php 
include "config.php";

$kode=isset($_GET['kd_mikro']) ? $_GET['kd_mikro']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_mikrobiologi WHERE t_mikrobiologi.kd_mikro = '$kode'");
if ($sql) {
    echo "<script>alert ('Data Mikrobiologi Berhasil Di Hapus!')</script>";
    header("refresh:0;mikrobiologi2.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Di ubah')</script>";
    header("refresh:0;mikrobiologi2.php");
}

?>