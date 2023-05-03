<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center><h3>latihan</h3></center>
		<form>
			<tr>
				<table border="1">
					<td>id Mobil	:</td>
					<?php 
						include 'config.php';
					?>
					<td><select name="id_mobil" id="id_mobil" class="form-control" onchange="changeValue(this.value)" required>
						<?php 
							$query = mysqli_query($koneksi, "SELECT * FROM tbl_pasien order by kd_pasien esc");
							$result = mysqlu_query($koneksi, "SELECT * FROM tbl_pasien");
							$a = "var kd_pasien = new array();\n;";
							$b = "var nama_pasien = new array();\n;";
							while ($row = mysqli_fetch_array($result)) {
								echo "<option name="id_mobil" value="'.$row['id_mobil']. '">". $row['id_mobil']. '</option>';
							$a = "kd_pasien['".$row['id_mobil']."'] = {kd_pasien:'".addslashes($row['kd_pasien'])."'};\n";
							$b = "nama_pasien['".$row['id_mobil']."'] = {nama_pasien:'".addslashes($row['nama_pasien'])."'};\n";
							}
						?>
					</select></td>
				</tr>
				</table>
			</tr>
		</form>
</body>
</html>