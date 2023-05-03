<?php
    
    include 'config.php';
    $kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
    $tgl = isset($_REQUEST['tgl_kunjungan']) ? $_REQUEST['tgl_kunjungan']:"";
    $kodep = isset($_REQUEST['kd_pasien']) ? $_REQUEST['kd_pasien']:"";
    $namap = isset($_REQUEST['nama_pasien']) ? $_REQUEST['nama_pasien']:"";
    $umur = isset($_REQUEST['umur']) ? $_REQUEST['umur']:"";
    $jenis = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
    $no = isset($_REQUEST['no_hp']) ? $_REQUEST['no_hp']:"";
    $keluhan = isset($_REQUEST['keluhan']) ? $_REQUEST['keluhan']:"";
    $kodekd = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
    $status = isset($_REQUEST['status_rekam_medis']) ? $_REQUEST['status_rekam_medis']:"";
    $alamat = isset($_REQUEST['alamat']) ? $_REQUEST['alamat']:"";
    $namad = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
    $nip = isset($_REQUEST['nip']) ? $_REQUEST['nip']:"";

    $cek= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM t_kunjungan WHERE kd_kunjungan='$kodek'"));
    if ($cek>0) {
      echo "<script>window.alert('Pasien sudah ada!')
      window.location='kunjungan2.php#popupk'</script>";
    }else{
    $query =mysqli_query($koneksi, "INSERT INTO t_kunjungan VALUES ('$kodek', '$tgl', '$kodep','$namap','$umur','$jenis','$no','$alamat','$keluhan', '$kodekd','$namad','$nip','$status')") or die(mysqli_error($koneksi));


   // cek hasil query

      if ($query) {
       echo "<script>window.alert('Data Berhasil Ditambahkan..')
       window.location='kunjungan2.php'</script>";
    }
  }

       


        
        

 ?>