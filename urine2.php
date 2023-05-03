<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Urinalisa</title>
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
                $query = mysqli_query($koneksi, "SELECT max(kd_urine) as kodeTerbesar FROM t_urinalisa ");
                $data = mysqli_fetch_array($query);
                $kodeurin = $data['kodeTerbesar'];
                $urutan = (int) substr($kodeurin, 3, 3,);
                $urutan++;
                $huruf = "UR";
                $kodeurin = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: absolute; align-items: center; margin-left: 700px; top:3%;">URINALISA</h3><br><br><br>
        <form action="aksi_urinalisa.php">
            <div class="form-hematologi">
                <label for="kd_urinalisa">Kode Urinalisa  :</label>
                <input type="text" name="kd_urinalisa"value="<?php echo $kodeurin; ?>"><br>
                <label for="tgl_periksa">Tanggal Periksa    :</label>
                <input type="text" name="tgl_periksa" placeholder="...." value="<?php echo date("h-m-Y"); ?>"><br>
                <label for="kd_kunjungan">Kode Kunjungan    :</label>
                <input type="text" name="kd_kunjungan" placeholder="...." id="kd_kunjungan" onload="laod()" value=""><a href="#popupkj"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>
                <label for="kd_kunjungan">Nama Pasien    :</label>
                <input type="text" name="nama_pasien" placeholder="...." id="nama_pasien" onload="load()"><br>
                <label for="kd_kunjungan">Jenis Kelamin    :</label>
                <input type="text" name="jenis_kelamin" placeholder="...." id="jenis_kelamin" onload="load()"><br>
                <label for="kd_kunjungan">Tanggal Lahir    :</label>
                <input type="text" name="tgl_lahir" placeholder="...." id="tgl_lahir" onload="load()"><br>
                <label for="alamat">Alamat  :</label>
                <input type="text" name="alamat" id="alamat" placeholder="...." onload="load()"><br>

                <label for="kd_kunjungan">Pengirim    :</label>
                <input type="text" name="pengirim" id="pengirim" onload="load()" placeholder="...."><br>

                <button type="submit" name="submit" id="submit">SUBMIT</button>
                <button type="reset" name="reset" id="reset">RESET</button>
            </div>
            
            <div class="form-urine">
                <label for="protein" value="" style="height: 20px;">Protein</label><label for="thc" style="margin-left: 68px;">Cannabinod/THC</label>
                <label for="Keton" style="float: right;">Keton</label><br>
                <input type="text" name="protein"><input type="text" name="thc" style="margin-left: 40px;">
                <input type="text" name="keton" style="float: right;"><br>

                <label for="pptest" value="">PPTest</label>
                <label for="glukosa" style="float: right;">Glukosa</label><br>
                <input type="text" name="pptest">
                <input type="text" name="glukosa" style="float: right;"><br>

                <label for="hb/eri">HB/Eri</label>
                <label for="warnaurine" style="float: right;">Warna Urine</label><br>
                <input type="text" name="hb/eri">
                <input type="text" name="warnaurine" style="float: right;"><br>

                <label for="billirubin">Billirubin</label>
                <label for="cylinder" style="float: right;">Cylinder</label><br>
                <input type="text" name="billirubin">
                <input type="text" name="cylinder" style="float: right;"><br>

                <label for="methampitamin">Methamphetamin</label>
                <label for="berat_jenis" style="float: right;">Berat Jenis</label><br>
                <input type="text" name="methampitamin">
                <input type="text" name="berat_jenis" style="float: right;"><br>

                <label for="leukosit">Leukosit</label>
                <label for="eritrosit" style="float: right;">Eritrosit</label><br>
                <input type="text" name="leukosit"> 
                <input type="text" name="eritrosit" style="float: right;"><br>

                <label for="cocaine" style="">Cocaine</label>
                <label for="nitrit" style="float: right;">Nitrit</label><br>
                <input type="text" name="cocaine" style="">
                <input type="text" name="nitrit" style="float: right;"><br>

                <label for="ephitel" style="">Ephitel</label>
                <label for="morphine" style="float: right;">Morphine/Opium</label><br>
                <input type="text" name="ephitel" style="">
                <input type="text" name="morphine" style="float: right;"><br>

                <label for="pH" style="">pH</label>
                <label for="mchc" style="float: right;">Kristal</label><br>
                <input type="text" name="ph">
                <input type="text" name="kristal" style="float: right;"><br>

                <label for="benzodiazepine">Benzodiazepine</label>
                <label for="Amphetamine" style="float: right;">Amphetamine</label><br>
                <input type="text" name="benzodiazepine" style="">
                <input type="text" name="amphetamine" style="float: right;"><br>

</div>
                
        </form>
<table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Urinalisa</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Periksa</th>
            <th>Protein</th>
            <th>Glukosa</th>
            <th>Billirubin</th>
            <th>Berat Jenis</th>
            <th>Leukosit</th>
            <th>Kristal</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_urinalisa");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_urine'];?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['tgl_periksau']; ?></td>
            <td><?php echo $b['protein']; ?></td>
            <td><?php echo $b['glukosa'];?></td>
            <td><?php echo $b['bilirubin'];?></td>
            <td><?php echo $b['bj'];?></td>
            <td><?php echo $b['leukosit'];?></td>
            <td><?php echo $b['nitrit'];?></td>
            <td><a href="printurin.php?kd_urine=<?php echo $b['kd_urine']; ?>"><button>PRINT</button></a></td>
            <td><a href="deletur.php?kd_urine=<?php echo $b['kd_urine']; ?>"><button>HAPUS</button></a></td>
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
            <th>Keperluan</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,t_pasien.pengirim,t_pasien.umur,t_pasien.Alamat_pasien,keluhan,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter WHERE t_kunjungan.keluhan = 'Lab.kimiaklinik' ORDER BY t_kunjungan.kd_kunjungan DESC");
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
            <td><?php echo $b['pengirim'];?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien'] ?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['umur'] ?>','<?php echo $b['Alamat_pasien']?>','<?php echo $b['pengirim'] ?>')">Pilih</button></center></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkh(kodek,namap,jenis,umur,alamat,pengirim){    
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