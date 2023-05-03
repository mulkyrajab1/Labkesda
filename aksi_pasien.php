<?php 
	include 'config.php';

	$kode = isset($_REQUEST['kd_pasien']) ? $_REQUEST['kd_pasien']:"";
	$nik = isset($_REQUEST['NIK']) ? $_REQUEST['NIK']:"";
	$nama = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
	$ttl = isset($_REQUEST['umur']) ? $_REQUEST['umur']:"";
	$jk = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
	$nohp = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";
	$alamat = isset($_REQUEST['Alamat_pasien']) ? $_REQUEST['Alamat_pasien']:"";
	$pengirim = isset($_REQUEST['pengirim']) ? $_REQUEST['pengirim']:"";

	$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE NIK='$nik'"));


	if ($cek>0) {
		echo "<script>window.alert('Data Sudah Digunakan..!')
		window.location='pasien2.php#popupp'</script>";
	}else{



   $query =mysqli_query($koneksi, "INSERT INTO t_pasien VALUES ('$kode', '$nik', '$nama','$ttl', '$jk', '$nohp', '$alamat','$pengirim');") or die(mysqli_error($koneksi));

	if ($query) {
		echo "<script>window.alert('Data Berhasil Ditambahkan..')
		window.location='pasien2.php'</script>";
	}
}

	if (!$query) {
		echo "error";
	}


	
?>