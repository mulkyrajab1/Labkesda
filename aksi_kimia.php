<?php 
	
	include 'config.php';

	$id = isset($_REQUEST['kd_kimia']) ? $_REQUEST['kd_kimia']:"";
	$tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
	$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$dokter = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";
	$alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat']:"";
	$ttl = isset($_REQUEST['tgl_lahir']) ? $_REQUEST['tgl_lahir']:"";
	$no = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";

	$gd = isset($_REQUEST['gdp']) ? $_REQUEST['gdp']:"";
	$hdl = isset($_REQUEST['hdl']) ? $_REQUEST['hdl']:"";
	$albumium = isset($_REQUEST['albumium']) ? $_REQUEST['albumium']:"";
	$gdj = isset($_REQUEST['gdj']) ? $_REQUEST['gdj']:"";
	$ldl = isset($_REQUEST['ldl']) ? $_REQUEST['ldl']:"";
	$globulin = isset($_REQUEST['globulin']) ? $_REQUEST['globulin']:"";
	$gd_sewaktu = isset($_REQUEST['gd_sewaktu']) ? $_REQUEST['gd_sewaktu']:"";
	$trigliserida = isset($_REQUEST['trigliserida']) ? $_REQUEST['trigliserida']:"";
	$sgot = isset($_REQUEST['sgot']) ? $_REQUEST['sgot']:"";
	$ureum = isset($_REQUEST['ureum']) ? $_REQUEST['ureum']:"";
	$total = isset($_REQUEST['bilirubin_total']) ? $_REQUEST['bilirubin_total']:"";
	$sgpt = isset($_REQUEST['sgpt']) ? $_REQUEST['sgpt']:"";
	$kreatin = isset($_REQUEST['kreatin']) ? $_REQUEST['kreatin']:"";
	$direk = isset($_REQUEST['bilirubin_direk']) ? $_REQUEST['bilirubin_direk']:"";
	$gt = isset($_REQUEST['gammagt']) ? $_REQUEST['gammagt']:"";
	$asamurat = isset($_REQUEST['asamurat']) ? $_REQUEST['asamurat']:"";
	$indirek = isset($_REQUEST['bilirubin_indirek']) ? $_REQUEST['bilirubin_indirek']:"";
	$alkali = isset($_REQUEST['alkali_fospatase']) ? $_REQUEST['alkali_fospatase']:"";
	$kolestrol = isset($_REQUEST['cholestrol']) ? $_REQUEST['cholestrol']:"";
	$protein = isset($_REQUEST['protein']) ? $_REQUEST['protein']:"";
	$cd4 = isset($_REQUEST['cd4']) ? $_REQUEST['cd4']:"";
	$hba1c = isset($_REQUEST['hba1c']) ? $_REQUEST['hba1c']:"";

	$query = mysqli_query($koneksi, "INSERT INTO t_kimia_klinik VALUES('$id','$kodek','$tgl','$namap','$dokter','$alamat','$ttl','$no','$gd','$gdj','$gd_sewaktu','$ureum','$kreatin','$asamurat','$kolestrol','$hdl','$ldl','$trigliserida','$total','$direk','$indirek','$protein','$albumium','$globulin','$sgot','$sgpt','$gt','$alkali','$cd4','$hba1c')")or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>window.alert('Data Berhasil Ditambahkan')
				      window.location='kimiaklinik2.php'</script>";
	}

?>