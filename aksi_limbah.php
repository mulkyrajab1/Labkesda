<?php 
 include 'config.php';

 $id2 = isset($_POST['id_detail_airlab']) ? $_POST['id_detail_airlab']:"";
 $id = isset($_REQUEST['kd_limbah']) ? $_REQUEST['kd_limbah']:"";
 $tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
 $kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
 $koded = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
 $namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
 $hal = isset($_REQUEST['perihal']) ? $_REQUEST['perihal']:"";
 $pengirim = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";
 $lokasi = isset($_REQUEST['lokasi']) ? $_REQUEST['lokasi']:"";
 $diambil = isset($_REQUEST['diambil_tgl']) ? $_REQUEST['diambil_tgl']:"";
 $diterima = isset($_REQUEST['diterima_tgl']) ? $_REQUEST['diterima_tgl']:"";
 $diperiksa = isset($_REQUEST['diperiksa_tgl']) ? $_REQUEST['diperiksa_tgl']:"";

 $no = isset($_REQUEST['nolab']) ? $_REQUEST['nolab']:"";
 $metode = isset($_REQUEST['metode']) ? $_REQUEST['metode']:"";
 $kadar = isset($_REQUEST['kadar']) ? $_REQUEST['kadar']:"";
 $parameter = isset($_REQUEST['parameter']) ? $_REQUEST['parameter']:"";
 $satuan = isset($_REQUEST['satuan']) ? $_REQUEST['satuan']:"";
 $hasil = isset($_REQUEST['hasil_pemeriksaan']) ? $_REQUEST['hasil_pemeriksaan']:"";
 $titik = isset($_REQUEST['titik']) ? $_REQUEST['titik']:"";


$query = mysqli_query($koneksi, "INSERT INTO t_air_limbah VALUES ('$id','$tgl','$kodek','$namap','$pengirim','$diambil','$diterima','$diperiksa','$hal','$no','$lokasi','$titik')")or die(mysqli_error($koneksi));

$jumlah_dipilih = count($parameter);

 for ($i=0;$i< $jumlah_dipilih;$i++) { 
 $query2 = mysqli_query($koneksi, "INSERT INTO detail_airlab VALUES ('$id2','$id','$parameter[$i]','$kadar[$i]','$satuan[$i]','$hasil[$i]','$metode[$i]')")or die(mysqli_error($koneksi));
	
 }

if ($query && $query2) {
	echo "<script>window.alert('Data Berhasil Di Input...')
		          window.location='hasil_limbah.php'</script>";
}

?>