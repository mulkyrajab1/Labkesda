<?php 
	include 'config.php';

	$id = isset($_REQUEST['kd_urinalisa']) ? $_REQUEST['kd_urinalisa']:"";
	$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
	$nama = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$namap = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";
	$alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat']:"";
	$ttl = isset($_REQUEST['tgl_lahir']) ? $_REQUEST['tgl_lahir']:"";
	$no = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";


	$protein = isset($_REQUEST['protein']) ? $_REQUEST['protein']:"";
	$glukosa = isset($_REQUEST['glukosa']) ? $_REQUEST['glukosa']:"";
	$bilirubin = isset($_REQUEST['billirubin']) ? $_REQUEST['billirubin']:"";
	$bj = isset($_REQUEST['berat_jenis']) ? $_REQUEST['berat_jenis']:"";
	$leukosit = isset($_REQUEST['leukosit']) ? $_REQUEST['leukosit']:"";
	$nitrit = isset($_REQUEST['nitrit']) ? $_REQUEST['nitrit']:"";
	$ph = isset($_REQUEST['ph']) ? $_REQUEST['ph']:"";
	$keton = isset($_REQUEST['keton']) ? $_REQUEST['keton']:"";
	$hb = isset($_REQUEST['hb/eri']) ? $_REQUEST['hb/eri']:"";
	$clynder = isset($_REQUEST['cylinder']) ? $_REQUEST['cylinder']:"";
	$leukosit = isset($_REQUEST['leukosit']) ? $_REQUEST['leukosit']:"";
	$eritrosit = isset($_REQUEST['eritrosit']) ? $_REQUEST['eritrosit']:"";
	$epithel = isset($_REQUEST['ephitel']) ? $_REQUEST['ephitel']:"";
	$kristal = isset($_REQUEST['kristal']) ? $_REQUEST['kristal']:"";
	$wurin = isset($_REQUEST['warnaurine']) ? $_REQUEST['warnaurine']:"";
	$ptest = isset($_REQUEST['pptest']) ? $_REQUEST['pptest']:"";
	$metham = isset($_REQUEST['methampitamin']) ? $_REQUEST['methampitamin']:"";
	$canaboid = isset($_REQUEST['thc']) ? $_REQUEST['thc']:"";
	$cocaine = isset($_REQUEST['cocaine']) ? $_REQUEST['cocaine']:"";
	$morphine = isset($_REQUEST['morphine']) ? $_REQUEST['cocaine']:"";
	$benzodiazepin = isset($_REQUEST['benzodiazepine']) ? $_REQUEST['benzodiazepine']:"";
	$amphe = isset($_REQUEST['amphetamine']) ? $_REQUEST['amphetamine']:"";

	$query = mysqli_query($koneksi, "INSERT INTO t_urinalisa VALUES ('$id','$kodek','$tgl','$nama','$namap','$alamat','$ttl','$no','$protein','$glukosa','$bilirubin','$bj','$leukosit','$nitrit','$ph','$keton','$hb','$clynder','$leukosit','$eritrosit','$epithel','$kristal','$wurin','$ptest','$metham','$canaboid','$cocaine','$morphine','$benzodiazepin','$amphe')");

	if ($query) {
		echo "<script>window.alert('Data Berhasil Ditambahkan...!')
					 window.location='urine2.php'</script>";
	}
	?>