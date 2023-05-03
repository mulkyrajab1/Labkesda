<?php
    
    include 'config.php';

    $kodek = isset($_REQUEST['kd_kunjungan']) ? $_REQUEST['kd_kunjungan']:"";
    $tgl = isset($_REQUEST['tgl_kunjungan']) ? $_REQUEST['tgl_kunjungan']:"";
    $kodep = isset($_REQUEST['kd_pasien']) ? $_REQUEST['kd_pasien']:"";
    $jenis = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
    $keluhan = isset($_REQUEST['keluhan']) ? $_REQUEST['keluhan']:"";
    $kodekd = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
    $status = isset($_REQUEST['status_rekam_medis']) ? $_REQUEST['status_rekam_medis']:"";

    $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM t_dokter WHERE kd_kunjungan='$kodek'"));

   
   $query =mysqli_query($koneksi, "UPDATE t_kunjungan SET tgl_kunjungan='$tgl', kd_pasien='$kodep', jenis_kelamin='$jenis', keluhan='$keluhan', kd_dokter='$kodekd' WHERE kd_kunjungan='$kodek' ");

  if ($query) {
   
      echo "<script>window.alert('Data Berhasil Di Ubah !')
          window.location='dokter2.php'</script>";

   }

   


    
   

 ?>