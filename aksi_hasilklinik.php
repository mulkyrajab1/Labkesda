<?php 
 include 'config.php';

 $kode = isset($_GET['kd_hasil']) ? $_GET['kd_hasil']:"";
 $tgl = isset($_GET['tgl_periksa']) ? $_GET['tgl_periksa']:"";
 $kodej = isset($_GET['kd_kunjungan']) ? $_GET['kd_kunjungan']:"";
 $kodeh = isset($_GET['kd_hematologi']) ? $_GET['kd_hematologi']:"";
 $kodem = isset($_GET['kd_mikro']) ? $_GET['kd_mikro']:"";
 $kodeu = isset($_GET['kd_urine']) ? $_GET['kd_urine']:"";
 $kodek = isset($_GET['kd_kimia']) ? $_GET['kd_kimia']:"";
 $kodef = isset($_GET['kd_feaces']) ? $_GET['kd_feaces']:"";
 $kodei = isset($_GET['kd_imun']) ? $_GET['kd_imun']:"";	
 
 		$query = mysqli_query($koneksi, "INSERT INTO t_hasil_klinik VALUES('$kode','$tgl','$kodej','$kodeh','$kodem','$kodeu','$kodek','$kodef','$kodei')") or die(mysqli_error($koneksi));

 if ($query) {
 	echo "<script>window.alert('Data Berhasil Ditambah')
 				  window.location='hasilklinik2.php'</script>";
 }

?>