<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lab Makanan</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/5d9df9863e.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".paste").after(html);
      });
    });
</script>
</head>
<body>
	<nav class="sidebar">
        <div class="text1"><a href="lab_airmakan.php">Lab Air & Makanan</a></div>
        <ul>
            <li><a href="makanan.php">Kimia Makanan</a></li>
            <li><a href="air_minum.php">Kimia Air Minum</a></li>
            <li><a href="air_bersih.php">Kimia Air Bersih</a></li>
            <li><a href="m_makanan.php">Mikro Makanan</a></li>
            <li><a href="mikro_air_bersih.php">Mikro Air Bersih</a></li>
            <li><a href="mikro_air_limbah.php">Mikro Air Limbah</a></li>
             <li><a href="hasil_limbah.php">Hasil Limbah</a><br>
            <li><a href="dashboard.php">Kembali</a></li>
        </ul>
    </nav>

<?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_limbah) as kodeTerbesar FROM t_air_limbah");
                $data = mysqli_fetch_array($query);
                $kodemakan = $data['kodeTerbesar'];
                $urutan = (int) substr($kodemakan, 4, 4,);
                $urutan++;
                $huruf = "LMBH";
                $kodemakan = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: absolute; align-items: center; margin-left: 700px; top:3%;">LAB MAKANAN</h3><br><br><br>
        <form action="aksi_limbah.php" name="form">
            <div class="form-hematologi">
                <label for="kd_makan">Kode Limbah  :</label>
                <input type="text" name="kd_limbah" value="<?php echo $kodemakan; ?>"><br>
                <label for="tgl_periksa">Tanggal Periksa    :</label>
                <input type="text" name="tgl_periksa" value="<?php echo date("h-m-Y"); ?>"><br>
                <label for="kd_kunjungan">Kode Kunjungan    :</label>
                <input type="text" name="kd_kunjungan" id="kd_kunjungan" onload="laod()" value=""><a href="#popupkj"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>
                <label for="kd_kunjungan">Nama Pasien    :</label>
                <input type="text" name="nama_pasien" id="nama_pasien" onload="load()"><br>
                <label for="kd_kunjungan">Perihal    :</label>
                <input type="text" name="perihal" id="perihal" onload="load()"><br>
                <label for="kd_kunjungan">Diambil Oleh    :</label>
                <input type="text" name="pengirim" id="pengirim" onload="load()"><br>
                <label for="kd_kunjungan">Lokasi    :</label>
                <input type="text" name="lokasi"><br>
                <label for="nolab" value="" style="">No. Lab    :</label>
                <input type="text" name="nolab"><br>

                <button type="submit" name="submit" id="submit">SUBMIT</button>
                <button type="reset" name="reset" id="submit">RESET</button>
            </div>
            <div class="form-makans">
            <div class="paste">
                <label for="titik">Titik Pemantauan     :</label>
                <input type="text" name="titik" id="titik" onload="load()"><br>
                <label for="nolab" value="" style="">Diambil Tanggal   :</label>
                <input type="date" name="diambil_tgl"><br>
                <label for="nolab" value="" style="">Diterima Tanggal    :</label>
                <input type="date" name="diterima_tgl"><br>
                <label for="nolab" value="" style="">Diperiksa Tanggal    :</label>
                <input type="date" name="diperiksa_tgl"><br>
                <label>Keterangan :</label>
                <textarea name="keterangan"></textarea><br>
    
                <input type="text" name="metode[]" placeholder="Metode">
                <input type="text" name="hasil_pemeriksaan[]" placeholder="hasil">
                <input type="text" name="kadar[]" placeholder="Kadar Maksimum">
                <input type="text" name="satuan[]" placeholder="Satuan">
                <input type="text" name="parameter[]" placeholder="parameter">

                
                </div><br>
                <button type="button" class="add-more">ADD</button>

                <div class="copy">
                <input type="text" name="metode[]" placeholder="Metode">
                <input type="text" name="hasil_pemeriksaan[]" placeholder="hasil">
                <input type="text" name="kadar[]" placeholder="Kadar Maksimum">
                <input type="text" name="satuan[]" placeholder="Satuan">
                <input type="text" name="parameter[]" placeholder="parameter">
                </div><br>
                </div>
                </div>
            </div>
        </form>
<table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode lab</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_air_limbah");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_limbah'];?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['Nama_pasien'];?></td>
            <td><?php echo $b['tgl_periksa'];?></td>
            <td><a href="printlimbah.php?kd_limbah=<?php echo $b['kd_limbah']; ?>"><button>PRINT</button></a></td>
            <td><a href="deletelmbh.php?kd_limbah=<?php echo $b['kd_limbah']; ?>"><button>HAPUS</button></a></td>
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
            <th>Perihal</th>
            <th>Keperluan</th>
            <th>Pengirim</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT t_kunjungan.kd_kunjungan,t_kunjungan.tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,t_kunjungan.keluhan,t_kunjungan.kd_dokter,t_rekam_medis.hasil_diagnosa,t_kunjungan.status_rekam_medis, t_pasien.pengirim FROM t_rekam_medis JOIN t_pasien ON t_rekam_medis.kd_pasien = t_pasien.kd_pasien JOIN t_kunjungan ON t_rekam_medis.kd_kunjungan = t_kunjungan.kd_kunjungan  WHERE t_kunjungan.keluhan='Lab.air&makanan'");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['hasil_diagnosa'];?></td>
            <td><?php echo $b['pengirim']; ?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['kd_dokter'];?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien'] ?>','<?php echo $b['hasil_diagnosa']?>','<?php echo $b['pengirim'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblh(kodek,namap,perihal,pengirim){    
            $('#kd_kunjungan').val(kodek);
            $('#nama_pasien').val(namap);
            $('#perihal').val(perihal);
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

<div id="popupkj">
            <a href="hematologi2.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Kunjungan</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Keperluan</th>
            <th>Kode Dokter</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,keluhan,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['kd_dokter'];?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><button style="color: black; font-weight: 900;" onclick="pilih_tblkh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien'] ?>','<?php echo $b['jenis_kelamin']?>')">Pilih</button></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkh(kodek,namap,jenis){    
            $('#kd_kunjungan').val(kodek);
            $('#nama_pasien').val(namap);
            $('#jenis_kelamin').val(jenis);
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