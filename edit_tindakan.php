<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>MAIN MENU</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d9df9863e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
	<?php 
        include 'config.php';
        $kode = isset($_GET['kd_tindakan']) ? $_GET['kd_tindakan']:"";
        $query = mysqli_query($koneksi, "SELECT * FROM t_tindakan WHERE kd_tindakan='$kode'");
        $b = mysqli_fetch_array($query);   
    ?>
	<div class="edit_dokter">
	<form action="aksi_tindakanedit.php" method="POST">
                <h3 style="text-align: center; color: black;">Form Tindakan</h3><br>
    <label for="Kode_tindakan" style="color: black;"><b>Kode Tindakan   :</b></label>
    <input type="text" placeholder="" name="kd_tindakan" style="float: right; font-weight: 900;" value="<?php echo $b['kd_tindakan']; ?>" required><br><br>

    <label for="tindakan" style="color: black;"><b>Tindakan   :</b></label>
    <input type="text" placeholder="Tindakan" name="tindakan" style="float: right; font-weight: 900;" value="<?php echo $b['tindakan']; ?>"><br><br>

    <label for="harga" style="color: black;"><b>Harga Tindakan   :</b></label>
    <input type="text" placeholder="Rp." name="harga_tindakan" style="float: right; font-weight: 900; width:158px; height:27px" value="<?php echo $b['harga_tindakan']; ?>" required>  

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 40px; left: 180px; position: absolute;">OK</button>

</form>
</div>

</body>
</html>