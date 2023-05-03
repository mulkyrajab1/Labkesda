<?php 
include "config.php";

$kode=isset($_GET['kd_biomokuler']) ? $_GET['kd_biomokuler']:"";
$sql=mysqli_query($koneksi, "DELETE FROM t_biomokuler WHERE t_biomokuler.kd_biomokuler = '$kode'");
if ($sql) {
    echo "<script>alert ('Data Biomokuler Berhasil Di Hapus!')</script>";
    header("refresh:0;lab_biomokuler.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Di ubah')</script>";
    header("refresh:0;lab_biomokuler.php");
}

?>