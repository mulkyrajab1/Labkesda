<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kimia Klinik</title>
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
                $query = mysqli_query($koneksi, "SELECT max(kd_kimia) as kodeTerbesar FROM t_kimia_klinik ");
                $data = mysqli_fetch_array($query);
                $kodekimia = $data['kodeTerbesar'];
                $urutan = (int) substr($kodekimia, 3, 3,);
                $urutan++;
                $huruf = "KM";
                $kodekimia = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: absolute; align-items: center; margin-left: 700px; top:3%;">KIMIA KLINIK</h3><br><br><br>
        <form action="aksi_kimia.php">
            <div class="form-hematologi">
                <label for="kd_urinalisa">Kode Kimiaklinik  :</label>
                <input type="text" name="kd_kimia" value="<?php echo $kodekimia; ?>"><br>
                <label for="tgl_periksa">Tanggal Periksa    :</label>
                <input type="text" name="tgl_periksa" value="<?php echo date("h-m-Y"); ?>"><br>
                <label for="kd_kunjungan">Kode Kunjungan    :</label>
                <input type="text" name="kd_kunjungan" id="kd_kunjungan" onload="laod()" value=""><a href="#popupkj"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>
                <label for="kd_kunjungan">Nama Pasien    :</label>
                <input type="text" name="nama_pasien" id="nama_pasien" onload="load()"><br>
                <label for="kd_kunjungan">Jenis Kelamin    :</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" onload="load()"><br>

                <label for="kd_kunjungan">Tanggal Lahir    :</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" onload="load()"><br>

                <label for="alamat">Alamat  :</label>               
                <input type="text" name="alamat" id="alamat" onload="load()"><br>
                
                <label for="kd_kunjungan">Pengirim    :</label>
                <input type="text" name="pengirim" id="pengirim" onload="load()"><br>

                <button type="submit" id="submit" name="submit">SUBMIT</button>
                <button type="reset" id="reset" name="reset">RESET</button>
            </div>
            
            <div class="form-kimia">
                <label for="gd_puasa" value="">Gula Darah Puasa</label><label for="cd4" style="margin-left: 50px;">Cd4</label>
                <label for="hdl" style="float: right;">HDL</label><br>
                <input type="text" name="gdp"><input type="text" name="cd4" style="margin-left: 50px;">
                <input type="text" name="hdl" style="float: right;"><br>

                <label for="albumium" value="">Albumium</label><label for="hba1c" style="margin-left: 83px;">HbA1c</label>
                <label for="gd_j2pp" style="float: right;">Gula Darah j2pp</label><br>
                <input type="text" name="albumium"><input type="text" name="hba1c" style="margin-left: 50px;">
                <input type="text" name="gdj" style="float: right;"><br>

                <label for="ldl">LDL</label>
                <label for="globulin" style="float: right;">Globulin</label><br>
                <input type="text" name="ldl">
                <input type="text" name="globulin" style="float: right;"><br>

                <label for="gd_sewaktu">Gula Darah Sewaktu</label>
                <label for="trigliserida" style="float: right;">Trigliserida</label><br>
                <input type="text" name="gd_sewaktu">
                <input type="text" name="trigliserida" style="float: right;"><br>

                <label for="sgot">SGOT</label>
                <label for="ureum" style="float: right;">Ureum</label><br>
                <input type="text" name="sgot">
                <input type="text" name="ureum" style="float: right;"><br>

                <label for="bilirubin_total">Bilirubin Total</label>
                <label for="sgpt" style="float: right;">SGPT</label><br>
                <input type="text" name="bilirubin_total"> 
                <input type="text" name="sgpt" style="float: right;"><br>

                <label for="kreatinin" style="">Kreatinin</label>
                <label for="bilirubin_direk" style="float: right;">Bilirubin Direk</label><br>
                <input type="text" name="kreatin" style="">
                <input type="text" name="bilirubin_direk" style="float: right;"><br>

                <label for="gammagt" style="">Gamma GT</label>
                <label for="asam_urat" style="float: right;">Asam Urat</label><br>
                <input type="text" name="gammagt" style="">
                <input type="text" name="asamurat" style="float: right;"><br>

                <label for="bilirubin_indirek" style="">Bilirubin Indirek</label>
                <label for="alkali_fospatase" style="float: right;">Alkali Fospatase</label><br>
                <input type="text" name="bilirubin_indirek">
                <input type="text" name="alkali_fospatase" style="float: right;"><br>

                <label for="cholestrol">Cholestrol</label>
                <label for="protein" style="float: right;">Protein</label><br>
                <input type="text" name="cholestrol" style="">
                <input type="text" name="protein" style="float: right;"><br>

            </div>
        </form>
<table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Kimia</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Periksa</th>
            <th>Gd puasa</th>
            <th>Gd j2pp</th>
            <th>Gd Sewaktu</th>
            <th>Ureum</th>
            <th>Kreatnin</th>
            <th>Asam Urat</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_kimia_klinik");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kimia'];?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['tgl_periksak']; ?></td>
            <td><?php echo $b['gd_puasa']; ?></td>
            <td><?php echo $b['gd_2jjp'];?></td>
            <td><?php echo $b['gd_sewaktu'];?></td>
            <td><?php echo $b['ureum'];?></td>
            <td><?php echo $b['kreatnin'];?></td>
            <td><?php echo $b['asam_urat'];?></td>
            <td><a href="printkimia.php?kd_kimia=<?php echo $b['kd_kimia']; ?>"><button>PRINT</button></a></td>
            <td><a href="deletekm.php?kd_kimia=<?php echo $b['kd_kimia']; ?>"><button>HAPUS</button></a></td>
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
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
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
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,keluhan,t_pasien.pengirim,t_pasien.Alamat_pasien,t_pasien.umur,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter WHERE t_kunjungan.keluhan='Lab.kimiaklinik' ORDER BY t_kunjungan.kd_kunjungan DESC");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['umur'];?></td>
            <td><?php echo $b['Alamat_pasien'];?></td>
            <td><?php echo $b['pengirim']; ?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien'] ?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['umur'] ?>','<?php echo $b['Alamat_pasien'] ?>','<?php echo $b['pengirim'] ?>')">Pilih</button></a></center></td>


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