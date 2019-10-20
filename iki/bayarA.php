<?php 
INCLUDE "../koneksi.php";


 $bayar = $_POST['bayar'];
 $total = $_POST['total'];
 $hasil = $bayar-$total;
 

 mysqli_query($connect,"INSERT INTO tbl_barangterjual SELECT * FROM tbl_penjualan");
 mysqli_query($connect,"TRUNCATE TABLE tbl_penjualan2");
 mysqli_query($connect,"INSERT INTO tbl_penjualan2 SELECT * FROM tbl_penjualan");
 mysqli_query($connect,"TRUNCATE TABLE tbl_penjualan");
 $_SESSION['hasil'] = $hasil;
 $_SESSION['bayar'] = $bayar;
 header("location:TT.php");


?>