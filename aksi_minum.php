<?php 
	include 'config.php';

	$kode = isset($_REQUEST['kd_air']) ? $_REQUEST['kd_air']:"";
	$tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
	$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
	$namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$perihal = isset($_REQUEST['perihal']) ? $_REQUEST['perihal']:"";
	$pengirim = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";
	$koded = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
	$no = isset($_REQUEST['nolab']) ? $_REQUEST['nolab']:"";
	$daerah = isset($_REQUEST['titik']) ? $_REQUEST['titik']:"";
	$lokasi = isset($_REQUEST['lokasi']) ? $_REQUEST['lokasi']:"";
	$diambil = isset($_REQUEST['diambil_tgl']) ? $_REQUEST['diambil_tgl']:"";
	$diterima = isset($_REQUEST['diterima_tgl']) ? $_REQUEST['diterima_tgl']:"";
	$diperiksa = isset($_REQUEST['diperiksa_tgl']) ? $_REQUEST['diperiksa_tgl']:"";
	$syarat = isset($_REQUEST['syarat']) ? $_REQUEST['syarat']:"";

	$kekeruhan = isset($_REQUEST['hasil_bts']) ? $_REQUEST['hasil_bts']:"";
	$jumlahzat = isset($_REQUEST['hasil_bts2']) ? $_REQUEST['hasil_bts2']:"";
	$suhu = isset($_REQUEST['hasil_bts3']) ? $_REQUEST['hasil_bts3']:"";
	$derajat = isset($_REQUEST['hasil_bts4']) ? $_REQUEST['hasil_bts4']:"";
	$besi = isset($_REQUEST['hasil_bts5']) ? $_REQUEST['hasil_bts5']:"";
	$fluorida = isset($_REQUEST['hasil_bts6']) ? $_REQUEST['hasil_bts6']:"";
	$caco3 = isset($_REQUEST['hasil_bts7']) ? $_REQUEST['hasil_bts7']:"";
	$mangan = isset($_REQUEST['hasil_bts8']) ? $_REQUEST['hasil_bts8']:"";
	$no3 = isset($_REQUEST['hasil_bts9']) ? $_REQUEST['hasil_bts9']:"";
	$no2 = isset($_REQUEST['hasil_bts10']) ? $_REQUEST['hasil_bts10']:"";
	$sulfat = isset($_REQUEST['hasil_bts11']) ? $_REQUEST['hasil_bts11']:"";
	$kromium = isset($_REQUEST['hasil_bts12']) ? $_REQUEST['hasil_bts12']:"";
	$klorida = isset($_REQUEST['hasil_bts13']) ? $_REQUEST['hasil_bts13']:"";
	$tembaga = isset($_REQUEST['hasil_bts14']) ? $_REQUEST['hasil_bts14']:"";
	$alumunium = isset($_REQUEST['hasil_bts15']) ? $_REQUEST['hasil_bts15']:"";

	$query = mysqli_query($koneksi, "INSERT INTO t_air_lab VALUES ('$kode','$tgl','$kodek','$namap','$perihal','$no','$lokasi','$syarat','$daerah','$pengirim','$diambil','$diterima','$diperiksa','$kekeruhan','$jumlahzat','$suhu','$derajat','$besi','$fluorida','$caco3','$mangan','$no3','$no2','$sulfat','$kromium','$klorida','$tembaga','$alumunium')")or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>window.alert('Data Berhasil Di input')
				      window.location='air_minum.php'</script>";
	}

?>