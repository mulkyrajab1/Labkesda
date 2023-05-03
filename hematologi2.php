<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hematologi</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d9df9863e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>


<nav class="sidebar">
        <div class="text"><a href="lab_kimia.php">Lab KimiaKlinik</a></div>
        <ul>
            <li><a href="hematologi2.php">HEMATOLOGI</a></li>
            <li><a href="mikrobiologi2.php">MIKROBIOLOGI</a></li>
            <li><a href="urine2.php">URINE</a></li>
            <li><a href="kimiaklinik2.php">KIMIAKLINIK</a></li>
            <li><a href="feaces2.php">FEACES</a></li>
            <li><a href="imunologi2.php">IMUNOLOGI</a></li>
            <li><a href="hasilklinik2.php">HASIL KLINIK</a></li><br><br>
            <li><a href="dashboard.php">Kembali</a></li>
        </ul>
    </nav>

    <?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_hematologi) as kodeTerbesar FROM hematologi ");
                $data = mysqli_fetch_array($query);
                $kodehematologi = $data['kodeTerbesar'];
                $urutan = (int) substr($kodehematologi, 3, 3,);
                $urutan++;
                $huruf = "HMT";
                $kodehematologi = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: fixed; align-items: center; margin-left: 700px; top:3%;">HEMATOLOGI</h3><br><br><br>
        <form action="aksi_hematologi.php">
            <div class="form-hematologi">
                <label for="kd_hematologi">Kode Hematologi  :</label>
                <input type="text" name="kd_hematologi" placeholder="...." value="<?php echo $kodehematologi; ?>"><br>

                <label for="tgl_periksa">Tanggal Periksa    :</label>
                <input type="text" name="tgl_periksa" placeholder="...." value="<?php echo date("h-m-Y"); ?>"><br>

                <label for="kd_kunjungan">Kode Kunjungan    :</label>
                <input type="text" name="kd_kunjungan" id="kd_kunjungan" onload="laod()" placeholder="...." value=""><a href="#popupkj"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="kd_kunjungan">Nama Pasien    :</label>
                <input type="text" name="nama_pasien" id="nama_pasien" placeholder="...." onload="load()"><br>

                <label for="kd_kunjungan">Jenis Kelamin    :</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="...." onload="load()"><br>

                <label for="kd_kunjungan">Tanggal Lahir    :</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" placeholder="...." onload="load()"><br>

                <label for="alamat">Alamat  :</label>
                <input type="text" name="alamat" id="alamat" placeholder="...." onload="load()"><br>

                <label for="kd_kunjungan">Pengirim    :</label>
                <input type="text" name="pengirim" id="pengirim" placeholder="...." onload="load();"><br>

                <button type="submit" id="submit" name="submit">SUBMIT</button>
                <button type="reset" id="reset" name="reset">RESET</button>
            </div>
            
            <div class="form-hematologik">
                <label for="hemoglobin" value="" style="height: 20px;">Haemoglobin</label>
                <label for="ieu_limfosit" style="float: right;">Ieu Limfosit</label><br>
                <input type="text" name="hemoglobin" value="">
                <input type="text" name="limfosit" value="" style="float: right;"><br>

                <label for="leukosit" value="">Leukosit</label>
                <label for="ieu_monosit" style="float: right;">Ieu Monosit</label><br>
                <input type="text" name="leukosit" value="">
                <input type="text" name="monosit" value="" style="float: right;"><br>

                <label for="led">LED</label>
                <label for="eritrosit" style="float: right;">Eritrosit</label><br>
                <input type="text" name="led" value="">
                <input type="text" name="eritrosit" value="" style="float: right;"><br>

                <label for="ieu_basofil">Ieu Basofil</label>
                <label for="thrombosit" style="float: right;">Thrombosit</label><br>
                <input type="text" name="basofil" value="">
                <input type="text" name="thrombosit" value="" style="float: right;"><br>

                <label for="ieu_eosinofil">Ieu Eosinofil</label>
                <label for="w_pendarahan" style="float: right;">Waktu Pendarahan</label><br>
                <input type="text" name="eosinofil" value="">
                <input type="text" name="w_pendarahan" value="" style="float: right;"><br>

                <label for="ieu_neutrofil">Ieu Neutrofil</label>
                <label for="w_pembekuan" style="float: right;">Waktu Pembekuan</label><br>
                <input type="text" name="neutrofil" value=""> 
                <input type="text" name="w_pembekuan" value="" style="float: right;"><br>

                <label for="hematrokit" style="">Hematrokit</label>
                <label for="mcv" style="float: right;">MCV</label><br>
                <input type="text" name="hematrokit" value="" style="">
                <input type="text" name="mcv" value="" style="float: right;"><br>

                <label for="g_darah" style="">gula darah</label><label for="mch" style="float: right;">MCH</label><br>
                <input type="text" name="g_darah" value="" style=""><input type="text" name="mch" value="" style="float: right;"><br>
                <label for="hjl" style="">Hitung Jenis Leukosit</label>
                <label for="mchc" style="float: right;">MCHC</label><br>
                <input type="text" name="hjl" value="">
                <input type="text" name="mchc" value="" style="float: right;"><br>
            </div>
        </form>
<table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Hematologi</th>
            <th>Kode Kunjungan</th>
            <th>Nama pasien</th>
            <th>Tanggal periksa</th>
            <th>Pengirim</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM hematologi");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_hematologi'];?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['tgl_periksa']; ?></td>
            <td><?php echo $b['no_hp'];?></td>
            <td><a href="peinthema.php?kd_hematologi=<?php echo $b['kd_hematologi']; ?>"><button>PRINT</button></a></td>
            <td><a href="deletehm.php?kd_hematologi=<?php echo $b['kd_hematologi']; ?>"><button>HAPUS</button></a></td>
        </tr>
    <?php }?>

        <tbody>
    </table>
</div>

<div id="popupkj">
            <a href="#popuplb" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Kunjungan</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Pengirim</th>
            <th>Keperluan</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,keluhan,t_kunjungan.no_hp,t_pasien.pengirim,t_pasien.umur,t_pasien.Alamat_pasien,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter WHERE t_kunjungan.keluhan = 'Lab.kimiaklinik' ORDER BY t_kunjungan.kd_kunjungan DESC");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['Alamat_pasien'];?></td>
            <td><?php echo $b['umur'];?></td>
            <td><?php echo $b['pengirim'];?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien']?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['umur']?>','<?php echo $b['Alamat_pasien'] ?>','<?php echo $b['pengirim']?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblh(kodek,namap,jenis,umur,alamat,pengirim){    
            $('#kd_kunjungan').val(kodek);
            $('#nama_pasien').val(namap);
            $('#jenis_kelamin').val(jenis);
            $('#tgl_lahir').val(umur);
            $('#alamat').val(alamat);
            $('#pengirim').val(pengirim);
        }
</script>


        </tr>
    <?php } ?>

        
        <tbody>
    </table>
</tbody>
</tbody>
</table>
</div>




</body>
</html>