<?php 
INCLUDE '../koneksi.php';

$cari=$_GET['cari'];
header("location:listBYD.php?cari=$cari");
?>