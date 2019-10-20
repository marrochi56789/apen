<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}
    $id = $_GET['id'];
    $mysql_Hapus = "DELETE  FROM tbl_suply WHERE kode_suply='$id' ";
    mysqli_query($connect, $mysql_Hapus) or die(mysqli_error($connect));
    header('location:suply.php?pesan=s4');

?>