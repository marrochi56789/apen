<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}

    $id = $_POST['id'];
    $nb = $_POST['nb'];
    $j = $_POST['tambah'];
    $jumlah = $_POST['jumlah'];
    $jts = $jumlah + $j;
    $hb = $_POST['hb'];
    $hj = $_POST['hj'];
    $laba = $hj - $hb;
    $totallaba = $laba * $j;

   
        $s = "UPDATE tbl_barang SET jumlah='$jts', laba='$laba', total_laba='$totallaba'  WHERE id_barang='$id'";
        mysqli_query($connect, $s) or die(mysqli_error($connect));
        header('location:tambahstock.php?pesan=s1');
      

?>