<?php
    
    include 'config.php';

    $kode = isset($_REQUEST['kd_dokter']) ? $_REQUEST['kd_dokter']:"";
    $nip = isset($_REQUEST['nip']) ? $_REQUEST['nip']:"";
    $nama = isset($_REQUEST['nama_dokter']) ? $_REQUEST['nama_dokter']:"";
    $jenis_kelamin = isset($_REQUEST['jenis_kelamin']) ? $_REQUEST['jenis_kelamin']:"";
    $nohp = isset($_REQUEST['no_tlp']) ? $_REQUEST['no_tlp']:"";
    $spesialis = isset($_REQUEST['spesialis']) ? $_REQUEST['spesialis']:"";
    $ttd = isset($_REQUEST['ttd']) ? $_REQUEST['ttd']:"";


   $query =mysqli_query($koneksi, "INSERT INTO t_dokter VALUES ('$kode', '$nip', '$nama', '$jenis_kelamin', '$nohp', '$spesialis','$ttd');") or die(mysqli_error($koneksi));

  if ($query) {
   echo "<script>window.alert('Data Berhasil Ditambahkan !')
          window.location='dokter2.php'</script>";
}

   


   

 ?>