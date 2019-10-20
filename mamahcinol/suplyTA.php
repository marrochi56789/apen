<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}

    $ks1 = $_POST['ks1'];
    $ns = $_POST['ns'];
    $ks2 = $_POST['ks2'];
    $as = $_POST['as'];
    $cs = $_POST['cs'];

    $a = mysqli_query($connect, "SELECT kode_suply FROM tbl_suply WHERE kode_suply='$ks1'") or die(mysqli_error($connect));
    $rsA = mysqli_fetch_array($a);
    
    if($rsA > 0){
        header('location:suply.php?pesan=s2');
    }
    else if($rsA == 0) {
        $s = "INSERT INTO tbl_suply(kode_suply, nama_suply, kontak_suply, alamat_suply, cv_suply) VALUES('$ks1','$ns','$ks2','$as','$cs')";
        mysqli_query($connect, $s) or die(mysqli_error($connect));
        header('location:suply.php?pesan=s1');
    }
  

?>