<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Imunologi</title>
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
                $query = mysqli_query($koneksi, "SELECT max(kd_imun) as kodeTerbesar FROM t_immunologi ");
                $data = mysqli_fetch_array($query);
                $kodeimun = $data['kodeTerbesar'];
                $urutan = (int) substr($kodeimun, 3, 3,);
                $urutan++;
                $huruf = "IM";
                $kodeimun = $huruf. sprintf("%03s",$urutan);
              ?>
    <div class="rightbar">
        <h3 style="position: absolute; align-items: center; margin-left: 700px; top:3%;">IMUNOLOGI</h3><br><br><br>
        <form action="aksi_imunologi.php">
            <div class="form-hematologi">
                <label for="kd_imun">Kode Imunologi  :</label>
                <input type="text" name="kd_imun" value="<?php echo $kodeimun; ?>"><br>
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
                <label for="kd_kunjungan">Alamat    :</label>
                <input type="text" name="alamat" id="alamat" onload="load()"><br>
                <label for="pengirim">Pengirim</label>
                <input type="text" name="pengirim" id="pengirim" onload="load()"><br>

                <button type="submit" name="submit" id="submit">SUBMIT</button>
                <button type="reset" name="reset" id="reset">RESET</button>
            </div>
            
            <div class="form-kimia">
                <label>O</label><label style="float: right;">H</label><br><br>
                
                <label for="Typhio">S Typhi</label>
                <label for="Typhih" style="float: right;">S Typhi</label><br>
                <input type="text" name="typhio">
                <input type="text" name="typhih" style="float: right;"><br>

                <label for="paratyphio">S Paratyphi A</label>
                <label for="paratyphih" style="float: right;">S Paratyphi A</label><br>
                <input type="text" name="paratyphiao">
                <input type="text" name="paratyphiah" style="float: right;"><br>

                <label for="paratyphio">S Paratyphi B</label>
                <label for="paratyphibh" style="float: right;">S paratyphi B</label><br>
                <input type="text" name="paratyphibo">
                <input type="text" name="paratyphibh" style="float: right;"><br>

                <label for="paratyphio">S Paratyphi C</label>
                <label for="paratyphih" style="float: right;">S Paratyphi C</label><br>
                <input type="text" name="paratyphico">
                <input type="text" name="paratyphich" style="float: right;"><br>

                <label for="vdrl">VDRL</label>
                <label for="hbsag" style="float: right;">HBsAg</label><br>
                <select name="vdrl">
                    <option></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select>
                <select name="hbsag" style="float: right">
                    <option></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select><br>

                <label for="igg">igg</label>
                <label for="igm" style="float: right;">igm</label><br>
                <select name="igg">
                    <option value=""></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select>
                <select name="igm" style="float: right;">
                    <option value=""></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select><br>
                
                <label for="rematiod">Rematiod Faktor</label>
                <label for="anti" style="float: right;">Anti Hiv</label><br>
                <select name="rematiod">
                    <option></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select>
                <select name="antihiv" style="float: right;">
                    <option></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select><br>

                <label for="nsi">NSI</label><br>    
                <select name="nsi">
                    <option></option>
                    <option value="reaktif">Reaktif</option>
                    <option value="non-reaktif">Non Reaktif</option>
                </select><br>
                


            </div>
        </form>
<table class="fl-table2">
        <thead>
        <tr>
        	<th>No</th>
            <th>Kode Imunologi</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Periksa</th>
            <th>S Typhio</th>
            <th>S paratyphiao</th>
            <th>s_paratyphibo</th>
            <th>s_paratyphico</th>
            <th>s_typhih</th>
            <th>s_paratyphiah</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        	<?php
            include 'config.php';
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_immunologi");
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_imun'];?></td>
            <td><?php echo $b['kd_kunjungan'];?></td>
            <td><?php echo $b['tgl_periksai']; ?></td>
            <td><?php echo $b['s_typhio']; ?></td>
            <td><?php echo $b['s_paratyphiAo'];?></td>
            <td><?php echo $b['s_paratyphiBh'];?></td>
            <td><?php echo $b['s_paratyphiCo'];?></td>
            <td><?php echo $b['s_typhih'];?></td>
            <td><?php echo $b['s_paratyphiAh'];?></td>
            <td><a href="detail_imun.php?kd_imun=<?php echo $b['kd_imun']; ?>"><button>DETAIL</button></a></td>
            <td><a href="deletei.php?kd_imun=<?php echo $b['kd_imun']; ?>"><button>HAPUS</button></a></td>
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
            <th>Pengirim</th>
            <th>Keperluan</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan,tgl_kunjungan,t_kunjungan.kd_pasien,t_pasien.nama_pasien,t_kunjungan.jenis_kelamin,keluhan,t_pasien.Alamat_pasien,t_pasien.pengirim,t_pasien.umur,t_kunjungan.kd_dokter,status_rekam_medis FROM t_kunjungan JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter WHERE t_kunjungan.keluhan='Lab.kimiaklinik' ORDER BY t_kunjungan.kd_kunjungan DESC");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['pengirim']; ?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['Alamat_pasien'];?></td>
            <td><?php echo $b['umur'] ?></td>
            <td><?php echo $b['status_rekam_medis']; ?></td>
            <td><center><a href="#popuplb"><button style="color: black; font-weight: 900;" onclick="pilih_tblh('<?php echo $b['kd_kunjungan']?>','<?php echo $b['nama_pasien'] ?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['umur']?>','<?php echo $b['Alamat_pasien'] ?>','<?php echo $b['pengirim']?>')">Pilih</button></a></center></td>


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