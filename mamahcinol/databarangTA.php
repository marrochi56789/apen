<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}

    $nb = $_POST['namabarang'];
    $hb = $_POST['hargabarang'];
    $hj = $_POST['hargajual'];
    // $j  = $_POST['jumlah'];
    $suply  = $_POST['suply'];
    // $laba = $hj - $hb;
    // $totallaba = $laba * $j;
    $s = "INSERT INTO tbl_barang(nama_barang, harga_barang, harga_jual, jumlah, kode_suply) VALUES('$nb','$hb','$hj','$j','$suply')";
    mysqli_query($connect, $s) or die(mysqli_error($connect));
    header('location:databarang.php?pesan=t1');

?>