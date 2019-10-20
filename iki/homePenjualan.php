<?php 

INCLUDE '../koneksi.php';


    $id = $_POST['id'];
    $nb = $_POST['nb'];
    $hb = $_POST['hb'];
    $hj = $_POST['hj'];
    $j = $_POST['jumlah'];
    $jj = $_POST['jj'];
    $jjj = $jj - $j;
    $subt = $j * $hj;
    $ks = $_POST['ks'];
    $laba = $hj - $hb;
    $totallaba = $laba * $j;
    $dateTime = date('Y-m-d H:i:s');
    $s = "INSERT INTO tbl_penjualan(id_penjualan, nb_penjualan, hb_penjualan, hj_penjualan, jumlah_penjualan, subt_penjualan, kds_penjualan, l_penjualan, tl_penjualan, tgl_penjualan) VALUES('$id','$nb','$hb','$hj','$j','$subt','$ks','$laba','$totallaba','$dateTime')";
    mysqli_query($connect, $s) or die(mysqli_error($connect));
    $ss = "UPDATE tbl_barang SET jumlah='$jjj' WHERE id_barang='$id'";
    mysqli_query($connect, $ss) or die(mysqli_error($connect));
    header('location:index.php?pesan=t1');

?>


