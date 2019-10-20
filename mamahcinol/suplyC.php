<?php 
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}
$cari=$_GET['cari'];
header("location:suply.php?cari=$cari");
?>