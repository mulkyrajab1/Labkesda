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
                $query = mysqli_query($koneksi, "SELECT max(kd_hasil) as kodeTerbesar FROM t_hasil_klinik ");
                $data = mysqli_fetch_array($query);
                $kodehasil = $data['kodeTerbesar'];
                $urutan = (int) substr($kodehasil, 3, 3,);
                $urutan++;
                $huruf = "HK";
                $kodehasil = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: fixed; align-items: center; margin-left: 700px; top:3%;">HASILKLINIK</h3><br><br><br>
        <form action="aksi_hasilklinik.php">
            <div class="form-hematologi">
                <label for="kd_hematologi">Kode Hasilklinik  :</label>
                <input type="text" name="kd_hasil" placeholder="...." value="<?php echo $kodehasil; ?>"><br>

                <label for="tgl_periksa">Tanggal Periksa    :</label>
                <input type="text" name="tgl_periksa" placeholder="...." value="<?php echo date("h-m-Y"); ?>"><br>

                <label for="kd_kunjungan">Kode Kunjungan    :</label>
                <input type="text" name="kd_kunjungan" id="kd_kunjungan" onload="laod()" placeholder="...." value="">&nbsp;&nbsp;<a href="#popupkj"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="hematologi">Kode Hematologi    :</label>
                <input type="text" name="kd_hematologi" id="kd_hematologi" placeholder="...." onload="load()"><a href="#popuphm"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="mikrobiologi">Kode Mikrobiologi    :</label>
                <input type="text" name="kd_mikro" id="kd_mikro" placeholder="...." onload="load()"><a href="#popupmk"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="urinalisa">Kode Urinalisa    :</label>
                <input type="text" name="kd_urine" id="kd_urine" placeholder="...." onload="load()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#popupur"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="kimiaklinik">Kode Kimia Klinik  :</label>
                <input type="text" name="kd_kimia" id="kd_kimia" placeholder="...." onload="load()">&nbsp;&nbsp;<a href="#popupkk"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="feaces">Kode Feaces    :</label>
                <input type="text" name="kd_feaces" id="kd_feaces" placeholder="...." onload="load()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#popupfc"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

                <label for="imunologi">Kode Imunologi</label>
                <input type="text" name="kd_imun" id="kd_imun" placeholder="...." onload="load()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#popupim"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a><br>

            </div>
            
            <div class="button-hasil">
            <button type="submit" id="submit" name="submit">SUBMIT</button>
            <button type="reset" id="reset" name="reset">RESET</button>
            </div>

        </form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Hasilklinik</th>
            <th>Tanggal Periksa</th>
            <th>Kode Kunjungan</th>
            <th>Kode Hematologi</th>
            <th>Kode Mikrobiologi</th>
            <th>Kode Urinalisa</th>
            <th>Kode Kimiaklinik</th>
            <th>Kode Feaces</th>
            <th>Kode Imunologi</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $id = isset($_POST['kd_hasil']) ? $_POST['kd_hasil']:"";
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_hasil_klinik");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_hasil'];?></td>
            <td><?php echo $b['tgl_periksahasil']?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['kd_hematologi'];?></td>
            <td><?php echo $b['kd_mikro']; ?></td>
            <td><?php echo $b['kd_urine'];?></td>
            <td><?php echo $b['kd_kimia']; ?></td>
            <td><?php echo $b['kd_feaces'];?></td>
            <td><?php echo $b['kd_imun']; ?></td>
            <td><a href="printkimia.php?kd_hasil=<?php echo $b['kd_hasil']; ?>"><button>PRINT</button></a></td>
            <td><a href="deletehs.php?kd_hasil=<?php echo $b['kd_hasil']; ?>"><button>HAPUS</button></a></td>
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
            <th>No Hp</th>
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
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,keluhan,t_kunjungan.no_hp,t_pasien.umur,t_pasien.Alamat_pasien,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter WHERE t_kunjungan.keluhan = 'Lab.kimiaklinik' ORDER BY t_kunjungan.kd_kunjungan DESC");
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
            <td><?php echo $b['no_hp'];?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['kd_dokter'];?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien']?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['umur']?>','<?php echo $b['Alamat_pasien'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblh(kodek,namap,jenis,umur,alamat,){    
            $('#kd_kunjungan').val(kodek);
            $('#nama_pasien').val(namap);
            $('#jenis_kelamin').val(jenis);
            $('#tgl_lahir').val(umur);
            $('#alamat').val(alamat);
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

<div id="popuphm">
            <a href="#popuplb.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Hematologi</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_hematologi,kd_kunjungan,nama_pasien,nama_dokter,tgl_periksa FROM hematologi ORDER BY hematologi.kd_hematologi DESC");
            while ($b = mysqli_fetch_array($kode)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_hematologi']; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['nama_dokter']; ?></td>
            <td><?php echo $b['tgl_periksa'];?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkhh('<?php echo $b['kd_hematologi'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkhh(kodeh){    
            $('#kd_hematologi').val(kodeh);
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

<div id="popupmk">
            <a href="#popuplb.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Mikrobiologi</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_mikro,kd_kunjungan,nama_pasien,nama_pemeriksa,tgl_periksam FROM t_mikrobiologi ORDER BY t_mikrobiologi.kd_mikro DESC");
            while ($b = mysqli_fetch_array($kode)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_mikro']; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['nama_pemeriksa']; ?></td>
            <td><?php echo $b['tgl_periksam'];?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkhu('<?php echo $b['kd_mikro'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkhu(kodem){    
            $('#kd_mikro').val(kodem);
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

<div id="popupur">
            <a href="#popuplb.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Urinalisa</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_urine,kd_kunjungan,nama_pasien,nama_pemeriksa,tgl_periksau FROM t_urinalisa ORDER BY t_urinalisa.kd_urine DESC");
            while ($b = mysqli_fetch_array($kode)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_urine']; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['nama_pemeriksa']; ?></td>
            <td><?php echo $b['tgl_periksau'];?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkhi('<?php echo $b['kd_urine'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkhi(kodem){    
            $('#kd_urine').val(kodem);
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

<div id="popupkk">
            <a href="#popuplb.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kimiaklinik</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_kimia,kd_kunjungan,nama_pasien,nama_pemeriksa,tgl_periksak FROM t_kimia_klinik ORDER BY t_kimia_klinik.kd_kimia DESC");
            while ($b = mysqli_fetch_array($kode)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kimia']; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['nama_pemeriksa']; ?></td>
            <td><?php echo $b['tgl_periksak'];?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkhs('<?php echo $b['kd_kimia'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkhs(kodem){    
            $('#kd_kimia').val(kodem);
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

<div id="popupfc">
            <a href="#popuplb.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Feaces</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_feaces,kd_kunjungan,nama_pasien,nama_pemeriksa,tgl_periksaf FROM t_feaces ORDER BY t_feaces.kd_feaces DESC");
            while ($b = mysqli_fetch_array($kode)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_feaces']; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['nama_pemeriksa']; ?></td>
            <td><?php echo $b['tgl_periksaf'];?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkhd('<?php echo $b['kd_feaces'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkhd(kodem){    
            $('#kd_feaces').val(kodem);
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

<div id="popupim">
            <a href="#popuplb.php" class="closed-btn" title="Close">X</a>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Imunologi</th>
            <th>Kode Kunjungan</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_imun,kd_kunjungan,nama_pasien,nama_pemeriksa,tgl_periksai FROM t_immunologi ORDER BY t_immunologi.kd_imun DESC");
            while ($b = mysqli_fetch_array($kode)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_imun']; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['nama_pemeriksa']; ?></td>
            <td><?php echo $b['tgl_periksai'];?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblkh('<?php echo $b['kd_imun'] ?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblkh(kodem){    
            $('#kd_imun').val(kodem);
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