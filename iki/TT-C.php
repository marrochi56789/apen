<?php 
INCLUDE '../koneksi.php';

$cari=$_GET['cari'];
header("location:TT.php?cari=$cari");
?>