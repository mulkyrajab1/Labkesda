<?php 
	include 'config.php';

	$kodeh =isset($_REQUEST['kd_hematologi']) ? $_REQUEST['kd_hematologi']:"";
	$tgl =isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
	$kodek =isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$namap =isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$namad =isset($_ERQUEST['nama_Dokter']) ? $_REQUEST['nama_dokter']:"";
	$jenis =isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
	$tglp =isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
	$nohp =isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";
	$alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat']:"";	
	$tgll = isset($_REQUEST['tgl_lahir']) ? $_REQUEST['tgl_lahir']:"";


	$hemo =isset($_REQUEST['hemoglobin']) ? $_REQUEST['hemoglobin']:"";
	$limfosit =isset($_REQUEST['limfosit']) ? $_REQUEST['limfosit']:"";
	$leukosit =isset($_REQUEST['leukosit']) ? $_REQUEST['leukosit']:"";
	$monosit =isset($_REQUEST['monosit']) ? $_REQUEST['monosit']:"";
	$led =isset($_REQUEST['led']) ? $_REQUEST['led']:"";
	$eritrosit =isset($_REQUEST['eritrosit']) ? $_REQUEST['eritrosit']:"";
	$basofil =isset($_REQUEST['basofil']) ? $_REQUEST['basofil']:"";
	$trombosit =isset($_REQUEST['thrombosit']) ? $_REQUEST['thrombosit']:"";
	$eusinofil =isset($_REQUEST['eosinofil']) ? $_REQUEST['eosinofil']:"";
	$neutrofil = isset($_REQUEST['neutrofil']) ? $_REQUEST['neutrofil']:"";
	$pendarahan =isset($_REQUEST['w_pendarahan']) ? $_REQUEST['w_pendarahan']:"";
	$neutrofil =isset($_REQUEST['neutrofil']) ? $_REQUEST['neutrofil']:"";
	$pembekuan =isset($_REQUEST['w_pembekuan']) ? $_REQUEST['w_pembekuan']:"";
	$hematrokit =isset($_REQUEST['hematrokit']) ? $_REQUEST['hematrokit']:"";
	$mcv =isset($_REQUEST['mcv']) ? $_REQUEST['mcv']:"";
	$gdarah =isset($_REQUEST['g_darah']) ? $_REQUEST['g_darah']:"";
	$mch =isset($_REQUEST['mch']) ? $_REQUEST['mch']:"";
	$mchc = isset($_REQUEST['mchc']) ? $_REQUEST['mchc']:"";
	$hjl = isset($_REQUEST['hjl']) ? $_REQUEST['hjl']:"";
	

	$query = mysqli_query($koneksi, "INSERT INTO hematologi VALUES ('$kodeh','$kodek','$namap','$namad','$tglp','$alamat','$tgll','$nohp','$hemo','$leukosit','$led','$basofil','$eusinofil','$neutrofil','$limfosit','$monosit','$eritrosit','$trombosit','$pendarahan','$pembekuan','$hjl','$hematrokit','$gdarah','$mcv','$mch','$mchc')")or die(mysqli_error($koneksi));

	if ($query) {
	echo "<script>window.alert('Data Berhasil Ditambahkan..')
				  window.location='hematologi2.php'</script>";
}

var_dump($query);



?>