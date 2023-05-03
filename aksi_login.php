<?php 
	include 'config.php';

	$password = $_POST['kd_petugas'] ? $_POST['kd_petugas']:"";

	$query = mysqli_query($koneksi, "SELECT * FROM t_petugas where kd_petugas='$password'");

	if (!$query) {
		echo "gagal";	}
	$cek = mysqli_num_rows($query);

	if ($cek==1) {
		echo "<script>window.alert('Login berhasil.. Selamat Datang !')
					  window.location='sidebar.php'</script>";
	}
	else{
		?>
		<script type="text/javascript">
			alert("Oops! Password Tidak Sesuai....Harap Masukan Password Dengan Benar!");
			document.location='logins.php';
		</script>
	<?php } ?>
?>