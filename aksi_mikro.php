<?php 
	include 'config.php';

	$kodem = isset($_REQUEST['kd_mikrobiologi']) ? $_REQUEST['kd_mikrobiologi']:"";
	$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
	$namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$jenis = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
	$pengirim = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";
	$alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat']:"";
	$ttl = isset($_REQUEST['tgl_lahir']) ? $_REQUEST['tgl_lahir']:"";
	$nohp = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";
	
	$bta = isset($_REQUEST['bta']) ? $_REQUEST['bta']:"";
	$diplo = isset($_REQUEST['diplocuccus']) ? $_REQUEST['diplocuccus']:"";
	$malaria = isset($_REQUEST['malaria']) ? $_REQUEST['malaria']:"";
	$mikri = isset($_REQUEST['mikrifilaria']) ? $_REQUEST['mikrifilaria']:"";
	$trico = isset($_REQUEST['trichomonas']) ? $_REQUEST['trichomonas']:"";
	$candida = isset($_REQUEST['candida']) ? $_REQUEST['candida']:"";

	$query = mysqli_query($koneksi, "INSERT INTO t_mikrobiologi VALUES ('$kodem','$kodek','$tgl','$namap','$pengirim','$alamat','$ttl','$nohp','$bta','$diplo','$malaria','$mikri','$trico','$candida')")or die(mysqli_error($koneksi));

	if ($query) {
		echo "berhasil";
	}

	if ($query) {
		echo "<script>window.alert('Data Berhasil Ditambahkan')
					  window.location='mikrobiologi2.php'</script>";
	}
?>