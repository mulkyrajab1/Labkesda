<?php 

		include 'config.php';

		$id = isset($_GET['kd_imun']) ? $_GET['kd_imun']:"";
		$kodek = isset($_GET['kd_kunjungan']) ? $_GET['kd_kunjungan']:"";
		$tgl = isset($_GET['tgl_periksa']) ? $_GET['tgl_periksa']:"";
		$namap = isset($_GET['nama_pasien']) ? $_GET['nama_pasien']:"";
		$alamat = isset($_GET['alamat']) ? $_GET['alamat']:"";
		$tll = isset($_GET['tgl_lahir']) ? $_GET['tgl_lahir']:"";
		$tipio = isset($_GET['typhio']) ? $_GET['typhio']:"";
		$pengirim = isset($_GET['pengirim']) ? $_GET['pengirim']:"";
		$no = isset($_GET['no_hp']) ? $_GET['no_hp']:"";
 		$paratipiao = isset($_GET['paratyphiao']) ? $_GET['paratyphiao']:"";
		$paratipibo = isset($_GET['paratyphibo']) ? $_GET['paratyphibo']:"";
		$paratipico = isset($_GET['paratyphico']) ? $_GET['paratyphico']:"";
		$tipih		= isset($_GET['typhih']) ? $_GET['typhih']:"";
		$paratipiah = isset($_GET['paratyphiah']) ? $_GET['paratyphiah']:"";
		$paratipibh = isset($_GET['paratyphibh']) ? $_GET['paratyphibh']:"";
		$paratipich = isset($_GET['paratyphich']) ? $_GET['paratyphich']:"";
		$vdrl = isset($_GET['vdrl']) ? $_GET['vdrl']:"";
		$hbsag = isset($_GET['hbsag']) ? $_GET['hbsag']:"";
		$igg = isset($_GET['igg']) ? $_GET['igg']:"";
		$igm = isset($_GET['igm']) ? $_GET['igm']:"";
		$rematiod = isset($_GET['rematiod']) ? $_GET['rematiod']:"";
		$antihiv = isset($_GET['antihiv']) ? $_GET['antihiv']:"";
		$nsi = isset($_GET['nsi']) ? $_GET['nsi']:"";

		$query = mysqli_query($koneksi, "INSERT INTO t_immunologi VALUES ('$id','$kodek','$tgl','$namap','$pengirim','$alamat','$tll','$no','$tipio','$paratipiao','$paratipibo','$paratipico','$tipih','$paratipiah','$paratipibh','$paratipich','$vdrl','$hbsag','$igg','$igm','$rematiod','$antihiv','$nsi')")or die(mysqli_error($koneksi));

		if ($query) {
			echo "<script>window.alert('Data Berhasil Ditambahkan..')
				  window.location='imunologi2.php'</script>";
		}
		
?>