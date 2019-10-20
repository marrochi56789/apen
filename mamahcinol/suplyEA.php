<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}
    $id = $_POST['id'];
    $ks1 = $_POST['ks1'];
    $ns = $_POST['ns'];
    $ks2 = $_POST['ks2'];
    $as = $_POST['as'];
    $cs  = $_POST['cs'];
    $s = "UPDATE tbl_suply SET kode_suply='$ks1', nama_suply='$ns', kontak_suply='$ks2', alamat_suply='$as', cv_suply='$cs'  WHERE kode_suply='$id'";
    mysqli_query($connect, $s) or die(mysqli_error($connect));
    header('location:suply.php?pesan=s3');

?>