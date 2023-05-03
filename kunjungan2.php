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
    <nav class="sidebar">
        <div class="text"><a href="sidebar.php">LABKESDA</a></div>
        <ul>
            <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
            <li>
                <a href="#" class="feat-btn"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp;Registrasi
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="dokter2.php" style="font-size: 15px;"><i class="fa-solid fa-user-doctor"></i>&nbsp;&nbsp;&nbsp;&nbsp;Dokter</a></li>
                    <li><a href="pasien2.php" style="font-size: 15px;"><i class="fa-solid fa-bed"></i>&nbsp;&nbsp;&nbsp;&nbsp;Pasien</a></li>
                    <li><a href="tindakan2.php" style="font-size: 15px;"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tindakan</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="serv-btn"><i class="fa-solid fa-money-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;Transaksi
                    <span class="fas fa-caret-down second"></span>
                </a>            
                <ul class="serv-show">
                    <li><a href="kunjungan2.php" style="font-size: 15px;"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;&nbsp;&nbsp;Kunjungan</a></li>
                    <li><a href="rekamedis2.php" style="font-size: 15px;"><i class="fa-duotone fa-book-medical"></i>&nbsp;&nbsp;&nbsp;&nbsp;Rekam Medis</a></li>    
                </ul>
            </li>
            <li>
                <a href="#" class="lab-btn"><i class="fa-solid fa-flask"></i>&nbsp;&nbsp;&nbsp;&nbsp;Laboratorium
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="lab-show">
                    <li><a href="lab_biomokuler.php" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;Biomokuler</a></li>
                    <li><a href="lab_kimia.php" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;Kimia Klinik</a></li>
                    <li><a href="lab_airmakan.php" style="font-size: 15px;">&nbsp;&nbsp;&nbsp;&nbsp;Air & Makanan</a></li>
                </ul>
            </li><br><br>
            <li><a href="logins.php">logout</a></li>
        </ul>
    </nav>


    <script>
        $('.feat-btn').click(function(){
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('.lab-btn').click(function(){
            $('nav ul .lab-show').toggleClass("show2");
            $('nav ul .third').toggleClass("rotate");
        });
        $('nav ul li').click(function(){
            $(this).addclass("active").siblings().removeClass("active");
        })
    </script>
    <div class="rightbar">

    <h3 style="position: absolute; align-items: center; margin-left: 750px; top:5%;">Kunjungan Pasien</h3>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Kunjungan</th>
            <th>Tanggal Kunjungan </th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Keluhan</th>
            <th>Kode Dokter</th>
            <th>Status Rekamedis</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $no=1;
            $kode = mysqli_query($koneksi, "SELECT kd_kunjungan, tgl_kunjungan, t_kunjungan.kd_pasien, t_pasien.nama_pasien, t_pasien.jenis_kelamin,t_pasien.no_hp, keluhan, t_dokter.kd_dokter, status_rekam_medis FROM t_kunjungan INNER JOIN t_pasien ON t_kunjungan.kd_pasien = t_pasien.kd_pasien JOIN t_dokter ON t_kunjungan.kd_dokter = t_dokter.kd_dokter");
            while ($b = mysqli_fetch_array($kode)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_kunjungan']; ?></td>
            <td><?php echo $b['tgl_kunjungan'];?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien']; ?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['no_hp'];?></td>
            <td><?php echo $b['keluhan'];?></td>
            <td><?php echo $b['kd_dokter'];?></td>
            <td><?php echo $b['status_rekam_medis'] ?></td>
            <td><a href="deletek.php?kd_kunjungan=<?php echo $b['kd_kunjungan']; ?>"><i class="fa-solid fa-trash fa-lg" style="color: #f20202;"></i></a></td>
        </tr>
    <?php }?>

        <tbody>
    </table>
</div>
</div>

            <?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_kunjungan) as kodeTerbesar FROM t_kunjungan ");
                $data = mysqli_fetch_array($query);
                $kodekunjungan = $data['kodeTerbesar'];
                $urutan = (int) substr($kodekunjungan, 3, 3,);
                $urutan++;
                $huruf = "KNJ";
                $kodekunjungan = $huruf. sprintf("%03s",$urutan);
              ?>

<div class="tambah">
<a href="#popupk"><button>Tambah Data</button></a>
</div>
<div id="popupk">
        <div class="form-popupk">
            <a href="#" class="closek-btn" title="Close">X</a>
            <form action="aksi_kunjungan.php" method="POST">
                <h3 style="text-align: center; color: white;">Form Kunjungan</h3><br>
    <label for="Kode_dokter" style="color: white;"><b>Kode Kunjungan   :</b></label>
    <label for="kode_pasien" style="color: white; float: right; font-weight: 900;">Kode pasien    :</label><br>
    <input type="text" placeholder="...." name="kd_kunjungan" style=" font-weight: 900;" value="<?php echo "$kodekunjungan"; ?>" required>
    <input type="text" name="kd_pasien" placeholder="...." id="kd_pasien" onload="load()" style="font-weight: 900; float: right;"><a href="#popuppp" style="
    text-decoration: none; float: right; padding-right: 5px; color: white; padding-left: 5px;"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a><br><br>

    <label for="tanggal_kunjungan" style="color: white;"><b>Tanggal Kunjungan   :</b></label>
    <label for="nama_pasien" name="nama_pasien"  style="color: white; font-weight: 900; float: right;">Nama pasien     :</label><br>
    <input type="text" placeholder="" name="tgl_kunjungan" value="<?php echo date("d-m-Y"); ?>" style=" font-weight: 900;">
    <input type="text" name="nama_pasien" id="nama_pasien" placeholder="....." onload="load()" style="float: right; font-weight: 900;"><br><br>

    <label for="ttl" style="color: white;"><b>Kode Dokter   :</b></label>
    <label for="jenis_kelamin" style="font-weight: 900; float: right; color: white;">Jenis Kelamin   :</label><br>
    <input type="text" placeholder="...." name="kd_dokter" id="kd_dokter" onload="laod()" style=" font-weight: 900; width:158px; height:27px"><a href="#popupd" style="
    text-decoration: none; color: white; padding-left: 5px;"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="-" onload="load()" style="float: right; color: black; font-weight: 900;"><br><br>

    <label for="no.tlp" style="color: white;"><b>Nama Dokter     :</b></label>
    <label for="umur" style="font-weight:900; color: white; float: right;">Umur pasien    :</label><br>
    <input type="text" placeholder="...." name="nama_dokter" id="nama_dokter" onload="load()" style="font-weight: 900; color: black;" required>
    <input type="text" name="umur" id="umur" value="-" onload="load()" style="float: right; font-weight: 900; color: black;"><br><br>


    <label for="jenis_kelamin" style="color: white;"><b>NIP   :</b></label>
    <label for="nohp" style="color: white; font-weight: 900; float: right;">Nomor Handphone  :</label><br>
    <input type="text" placeholder="...." name="nip" id="nip" onload="load()" style=" font-weight: 900;">
    <input type="text" name="no_hp" id="no_hp" value="-" onload="load()" style="float: right; color: black; font-weight: 900;"><br><br>

    <label for="no.tlp" style="color: white;"><b>Spesialis Dokter    :</b></label>
    <label for="keperluan" style="font-weight: 900; float: right; color: white;">Keperluan Pasien   :</label><br>
    <input type="text" placeholder="...." name="spesialis" id="spesialis" onload="laod()" style=" font-weight: 900;" >
            <select name="keluhan" id="keluhan" onload="load()" value="keluhan" style="width:155px; margin:0; float: right; color: black; font-weight: 900;">---- pilih ----
                <option value="Lab.biomokuler" style="font-weight: 900; color: black;">Lab. Biomokuler</option>
                <option value="Lab.kimiaklinik" style="font-weight: 900; color: black;">Lab. Klinik</option>
                <option value="Lab.air&makanan" style="font-weight: 900; color: black;">Lab. Air & Makanan</option>
            </select><br>

    <label for="status_rekam_medis" style="color: white; font-weight: 900; float: right;">Status Rekamedis  :</label><br>
    <?php 
        include 'config.php';
        $status = "Belum Di Rekamedis"
    ?>
    <input type="text" name="status_rekam_medis" value="<?php echo "$status"; ?>" style="float: right; font-weight: 900;">

    
    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; left: 45%; position: absolute;">OK</button>
            </form>
        </div>
    </div>

    <div id="popupd">

            <a href="#popupk" class="closed-btn" title="Close">X</a>
    <h3>PILIH DOKTER</h3><br> 
<table class="responstable">
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nip</th>
            <th>Spesialis</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                include 'config.php';
                $no=1;
                $query = mysqli_query($koneksi, "SELECT * FROM t_dokter");
                while ($b = mysqli_fetch_array($query)) {
                    
                
            ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_dokter']; ?></td>
            <td><?php echo $b['nama_dokter']; ?></td>
            <td><?php echo $b['NIP']; ?></td>
            <td><?php echo $b['spesialis'];?></td>

            <td><center><a href="#popupk"><button style="color: black; font-weight: 900;" onclick="pilih_tbld('<?php echo $b['kd_dokter']?>','<?php echo $b['nama_dokter']?>','<?php echo $b['NIP']?>','<?php echo $b['spesialis']?>')">Pilih</button></a></center></td>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tbld(kode,nama,nip,spesialis){    
            $('#kd_dokter').val(kode);
            $('#nama_dokter').val(nama);
            $('#nip').val(nip);
            $('#spesialis').val(spesialis);
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

<div id="popuppp">
    <form method="GET" action="" >
    <div class="cari3">  
        <input type="text" name="cari" placeholder="Search....">
        <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>   
            <a href="#popupk" class="closed-btn" title="Close">X</a>
    <h3>PILIH PASIEN</h3>><br>    
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No. Hp</th>
            <th>Pengirim</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            include 'config.php';
            $no=1;
            $kodep = isset($_POST['kd_pasien']) ? $_POST['kd_pasien']:"";
            if (isset($_GET['cari3'])) {
                    
            $cari2 = $_GET['cari3'];  
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_pasien WHERE kd_pasien like '%".$cari2."%' OR NIK like '%".$cari2."%' OR nama_pasien like '%".$cari2."%' OR Alamat_pasien like '%".$cari2."%' OR no_hp like '%".$cari2."%' OR pengirim like '%".$cari2."%' ORDER BY kd_pasien ASC");
                } else{
                    $query=mysqli_query($koneksi, "SELECT * FROM t_pasien ORDER BY kd_pasien DESC");
                }
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
               

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_pasien']; ?></td>
            <td><?php echo $b['nama_pasien']; ?></td>
            <td><?php echo $b['umur']; ?></td>
            <td><?php echo $b['Alamat_pasien'];?></td>
            <td><?php echo $b['jenis_kelamin'];?></td>
            <td><?php echo $b['no_hp'];?></td>
            <td><?php echo $b['pengirim'];?></td>
            
        
            <td><center><a href="#popupk"><button style="color: black; font-weight: 900;" onclick="pilih_tblp('<?php echo $b['kd_pasien']?>','<?php echo $b['nama_pasien']?>','<?php echo $b['jenis_kelamin']?>','<?php echo $b['umur'] ?>','<?php echo $b['no_hp'] ?>','<?php echo $b['pengirim']?>')">Pilih</button></a></center></td>

<?php } ?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function pilih_tblp(kode,nama,jenis,umur,no){    
            $('#kd_pasien').val(kode);
            $('#nama_pasien').val(nama);
            $('#jenis_kelamin').val(jenis);
            $('#umur').val(umur);
            $('#no_hp').val(no);
        }
</script>


        </tr>
        
        <tbody>
    </table>
</tbody>
</tbody>
</table>
</div>


<div class="print">
    <a href=""><button value="Cetak"><i class="fa-solid fa-print"></i></button></a>
</div>

<form method="GET" action="" >
    <div class="cari">  
        <input type="text" name="cari" placeholder="Search....">
        <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </div>
</form>

</body>
</html>