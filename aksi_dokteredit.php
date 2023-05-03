<?php
    
    include 'config.php';

    $kode = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
    $nip = isset($_REQUEST['nip']) ? $_REQUEST['nip']:"";
    $nama = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
    $jenis_kelamin = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
    $nohp = isset($_REQUEST['no_tlp']) ? $_REQUEST['no_tlp']:"";
    $spesialis = isset($_REQUEST['spesialis']) ? $_REQUEST['spesialis']:"";
    $ttd = isset($_REQUEST['ttd']) ? $_REQUEST['ttd']:"";

    $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM t_dokter WHERE nama_dokter='$nama'"));

   
   $query =mysqli_query($koneksi, "UPDATE t_dokter SET NIP='$nip', nama_dokter='$nama', jenis_kelamin='$jenis_kelamin', no_hp='$nohp', spesialis='$spesialis', ttd='$ttd' WHERE kd_dokter='$kode' ");

  if ($query) {
   
      echo "<script>window.alert('Data Berhasil Di Ubah !')
          window.location='dokter2.php'</script>";

   }

   


    
   

 ?>