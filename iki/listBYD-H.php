<?php
INCLUDE '../koneksi.php';


    $id = $_GET['id'];
    $ss = "UPDATE tbl_barang SET jumlah='$jjj' WHERE id_barang='$id'";
    $mysql_Hapus = "DELETE  FROM tbl_penjualan WHERE id_penjualan='$id' ";
    mysqli_query($connect, $mysql_Hapus) or die(mysqli_error($connect));
    header('location:listBYD.php?pesan=t1');

?>