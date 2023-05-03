<?php 
include 'config.php';

$kodeb = isset($_REQUEST['kd_biomokuler']) ? $_REQUEST['kd_biomokuler']:"";
$kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
$kodep = isset($_REQUEST['kd_pasien']) ? $_REQUEST['kd_pasien']:"";
$namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
$alamat = isset($_REQUEST['alamat_pasien']) ? $_REQUEST['alamat_pasien']:"";
$jenis = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
$nohp = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";
$umur = isset($_REQUEST['tgl_lahir']) ? $_REQUEST['tgl_lahir']:"";
$koded = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
$namad = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
$jenis = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
$keperluan = isset($_REQUEST['keperluan']) ? $_REQUEST['keperluan']:"";
$tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
$namad = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
$no = isset($_REQUEST['no_mcu']) ? $_REQUEST['no_mcu']:"";
$hasil = isset($_REQUEST['hasil_pemeriksaan']) ? $_REQUEST['hasil_pemeriksaan']:"";
$rdrp = isset($_REQUEST['rdrp']) ? $_REQUEST['rdrp']:"";
$drfi = isset($_REQUEST['drfi']) ? $_REQUEST['drfi']:"";
$nct = isset($_REQUEST['nct']) ? $_REQUEST['nct']:"";

$query = mysqli_query($koneksi, "INSERT INTO t_biomokuler VALUES('$kodeb','$kodep','$namap','$umur','$alamat','$jenis','$nohp','$koded','$namad','$tgl','$no','$keperluan','$hasil','$rdrp','$drfi','$nct');")or die(mysqli_error($koneksi));

if ($query) {
	echo "<script>window.alert('Data Berhasil Ditambahkan..')
				  window.location='lab_biomokuler.php'</script>";
}

?>