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

    <h3 style="position: fixed; align-items: center; margin-left: 750px; top:5%;">Tindakan</h3>
    <table class="fl-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Tindakan</th>
            <th>Nama Tindakan</th>
            <th>Harga</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
             include 'config.php';
            $no=1;
            $kodep = isset($_POST['kd_tindakan']) ? $_POST['kd_tindakan']:"";
            if (isset($_GET['cari'])) {
                    
            $cari = $_GET['cari'];  
            $no=1;
            $query = mysqli_query($koneksi, "SELECT * FROM t_tindakan WHERE kd_tindakan like '%".$cari."%' OR tindakan like '%".$cari."%' OR harga_tindakan like '%".$cari."%' ORDER BY kd_tindakan ASC");
                } else{
                    $query=mysqli_query($koneksi, "SELECT * FROM t_tindakan");
                }
            while ($b = mysqli_fetch_array($query)) {
                
            

        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $b['kd_tindakan']; ?></td>
            <td><?php echo $b['tindakan'];?></td>
            <td><?php echo $b['harga_tindakan']; ?></td>
            <td><a href="edit_tindakan.php?kd_tindakan<?php echo $b['kd_tindakan']; ?>"><i class="fa-solid fa-pen-to-square fa-lg"></i></a></td>
            <td><a href="deletet.php?kd_tindakan=<?php echo $b['kd_tindakan']; ?>"><i class="fa-solid fa-trash fa-lg" style="color: #f20202;"></i></a></td>
        </tr>
    <?php }?>

        <tbody>
    </table>
</div>
</div>

            <?php
                include 'config.php';
                $query = mysqli_query($koneksi, "SELECT max(kd_tindakan) as kodeTerbesar FROM t_tindakan ");
                $data = mysqli_fetch_array($query);
                $kodetindakan = $data['kodeTerbesar'];
                $urutan = (int) substr($kodetindakan, 3, 3,);
                $urutan++;
                $huruf = "TDK";
                $kodetindakan = $huruf. sprintf("%03s",$urutan);
              ?>

<div class="tambah">
<a href="#popupt"><button>Tambah Data</button></a>
</div>
<div id="popupt">
        <div class="form-popupt">
            <a href="#" class="close-btn" title="Close">X</a>
            <form action="aksi_tindakan2.php" method="POST">
                <h3 style="text-align: center; color: white;">Form Tindakan</h3><br>
    <label for="Kode_dokter" style="color: white;"><b>Kode Tindakan   :</b></label>
    <input type="text" placeholder="" name="kd_tindakan" style="float: right; font-weight: 900;" value="<?php echo "$kodetindakan"; ?>" required><br><br>

    <label for="nama_pasien" style="color: white;"><b>Nama Tindakan   :</b></label>
    <input type="text" placeholder="...." name="tindakan" style="float: right; font-weight: 900;"><br><br>

    <label for="ttl" style="color: white;"><b>Harga Tindakan   :</b></label>
    <input type="text" placeholder="...." name="harga_tindakan" style="float: right; font-weight: 900; " required><br><br>

    <button type="submit" name="submit" value="Ok" style="font-weight: 900; width:50px; justify-content:center; align-items: center; bottom: 40px; left: 180px; position: absolute;">OK</button>
            </form>
        </div>
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