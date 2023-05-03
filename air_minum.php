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
<script>
function nextField(event){
    if(event.keyCode == 13 || event.which == 13){
  document.getElementById('hasil_bts2').focus();
    } 
}
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
                $query = mysqli_query($koneksi, "SELECT max(kd_airlab) as kodeTerbesar FROM t_air_lab");
                $data = mysqli_fetch_array($query);
                $kodeairlab = $data['kodeTerbesar'];
                $urutan = (int) substr($kodeairlab, 8, 8,);
                $urutan++;
                $huruf = "LAB/AIR/";
                $kodeairlab = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: absolute; align-items: center; margin-left: 700px; top:3%;">KIMIA AIR MINUM</h3><br><br><br>
        <form action="aksi_minum.php" name="form">
            <div class="form-hematologi2">
                <label for="kd_minum">Kode Air Minum  :</label>
                <input type="text" name="kd_air" value="<?php echo $kodeairlab; ?>"><br>
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
                <label for="titik">Titik Pemantauan     :</label>
                <input type="text" name="titik" id="titik" onload="load()"><br>
                <label for="kd_kunjungan">Lokasi    :</label>
                <input type="text" name="lokasi"><br>
                <label for="nolab" value="" style="">No. Lab    :</label>
                <input type="text" name="nolab"><br>
                <label for="ket" value="">Keterangan :</label>
                <textarea name="keterangan"></textarea><br>

            </div>
            <div class="form-makan2">
            <div class="paste">
                <label for="nolab" value="" style="">Diambil Tanggal   :</label>
                <input type="date" name="diambil_tgl"><br>
                <label for="nolab" value="" style="">Diterima Tanggal    :</label>
                <input type="date" name="diterima_tgl"><br>
                <label for="nolab" value="" style="">Diperiksa Tanggal    :</label>
                <input type="date" name="diperiksa_tgl"><br>
                <label>Syarat</label>
                <select name="syarat">
                    <option value="-"></option>
                    <option>Memenuhi Syarat</option>
                    <option>Tidak Memenuhi Syarat</option>
                </select><br>
                <label for="">A. Fisika</label><br>
                <label>Kekeruhan</label>
                <input type="text" name="hasil_bts" autofocus="autofocus" onkeypress="nextField(event)"><br>
                <label>Jumlah Zat Padat Terlarut</label>
                <input type="text" name="hasil_bts2"><br>
                <label>Suhu</label>
                <input type="text" name="hasil_bts3"><br>
   <button type="submit" name="submit" id="submit">SUBMIT</button>
                <button type="reset" name="reset" id="reset">RESET</button>

                </div>
            <div class="paste2">
                <label for="">B. Kimia</label><br>
                <label>Derajat Keasaman</label>
                <input type="text" name="hasil_bts4" placeholder="Derajat Keasaman"><br>
                <label>Besi</label>
                <input type="text" name="hasil_bts5" placeholder="Besi"><br>
                <label>Fluorida</label>
                <input type="text" name="hasil_bts6" placeholder="Fluorida"><br>
                <label>Kesadahan Sebagai CaCO3</label>
                <input type="text" name="hasil_bts7" placeholder="Kesadahan CaCO3"><br>
                <label>Mangan</label>
                <input type="text" name="hasil_bts8" placeholder="Mangan"><br>
                <label>Nitrat Sebagai NO3</label>
                <input type="text" name="hasil_bts9" placeholder="Nitrat NO3"><br>
                <label>Nitrit Sebagai NO2</label>
                <input type="text" name="hasil_bts10" placeholder="Nitrit NO2"><br>
                <label>Sulfat</label>
                <input type="text" name="hasil_bts11" placeholder="Sulfat"><br>
                <label>Total Kromium</label>
                <input type="text" name="hasil_bts12" placeholder="Total Kromium"><br>
                <label>Klorida</label>
                <input type="text" name="hasil_bts13" placeholder="Klorida"><br>
                <label>Tembaga</label>
                <input type="text" name="hasil_bts14" placeholder="Tembaga"><br>
                <label>Alumunium</label>
                <input type="text" name="hasil_bts15" placeholder="Alumunium">

            </div>    
                </div>
        </form>
<br><br><table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode lab</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_air_lab");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_airlab'];?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['tgl_periksa']; ?></td>
            <td><a href="printairminum.php?kd_airlab=<?php echo $b['kd_airlab']; ?>"><button>PRINT</button></a></td>
            <td><a href="deleteairk.php?kd_airlab=<?php echo $b['kd_airlab']; ?>"><button>HAPUS</button></a></td>
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


</tbody>
</table>
</div>

</body>
</html>