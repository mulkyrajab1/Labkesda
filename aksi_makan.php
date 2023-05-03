<?php 
 include 'config.php';

 $id2 = isset($_POST['id_detail_periksa']) ? $_POST['id_detail_periksa']:"";
 $id = isset($_REQUEST['kd_makan']) ? $_REQUEST['kd_makan']:"";
 $tgl = isset($_REQUEST['tgl_periksa']) ? $_REQUEST['tgl_periksa']:"";
 $kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
 $namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
 $hal = isset($_REQUEST['perihal']) ? $_REQUEST['perihal']:"";
 $pengirim = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";
 $lokasi = isset($_REQUEST['lokasi']) ? $_REQUEST['lokasi']:"";
 $diambil = isset($_REQUEST['diambil_tgl']) ? $_REQUEST['diambil_tgl']:"";
 $diterima = isset($_REQUEST['diterima_tgl']) ? $_REQUEST['diterima_tgl']:"";
 $diperiksa = isset($_REQUEST['diperiksa_tgl']) ? $_REQUEST['diperiksa_tgl']:"";
 $keterangan = isset($_REQUEST['keterangan']) ? $_REQUEST['keterangan']:"";

 $no = isset($_REQUEST['nolab']) ? $_REQUEST['nolab']:"";
 $namam = isset($_REQUEST['nama_makan']) ? $_REQUEST['nama_makan']:"";
 $parameter = isset($_REQUEST['parameter']) ? $_REQUEST['parameter']:"";
 $batas = isset($_REQUEST['batas_maksimum']) ? $_REQUEST['batas_maksimum']:"";
 $hasil = isset($_REQUEST['hasil_pemeriksaan']) ? $_REQUEST['hasil_pemeriksaan']:"";


$query = mysqli_query($koneksi, "INSERT INTO t_periksa_makan VALUES ('$id','$tgl','$kodek','$namap','$pengirim','$diambil','$diterima','$diperiksa','$hal','$no','$lokasi','$keterangan')")or die(mysqli_error($koneksi));

$jumlah_dipilih = count($namam);

 for ($i=0;$i< $jumlah_dipilih;$i++) { 
 $query2 = mysqli_query($koneksi, "INSERT INTO detail_periksa_makan VALUES ('$id2','$id','$namam[$i]','$parameter[$i]','$batas[$i]','$hasil[$i]')")or die(mysqli_error($koneksi));
	
 }

if ($query && $query2) {
	echo "<script>window.alert('Data Berhasil Di Input...')
		          window.location='makanan.php'</script>";
}

?>