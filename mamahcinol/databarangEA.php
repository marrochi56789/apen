<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}
    $id = $_POST['id'];
    $nb = $_POST['namabarang'];
    $hb = $_POST['hargabarang'];
    $hj = $_POST['hargajual'];
    $j  = $_POST['jumlah'];
    $suply  = $_POST['suply'];
    $laba = $hj - $hb;
    $totallaba = $laba * $j;
    $s = "UPDATE tbl_barang SET nama_barang='$nb', harga_barang='$hb', harga_jual='$hj', jumlah='$j', laba='$laba', total_laba='$totallaba', kode_suply='$suply' WHERE id_barang='$id'";
    mysqli_query($connect, $s) or die(mysqli_error($connect));
    header('location:databarang.php?pesan=t2');

?>