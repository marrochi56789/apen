<?php 
INCLUDE '../koneksi.php';

$cari=$_GET['cari'];
header("location:index.php?cari=$cari");
?>