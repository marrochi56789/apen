<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}
if(!isset($_SESSION['pass-user'])){
    header('location:gantipas.php?pesan=g2');
}

    $nama = $_SESSION['nama-user'];
    $pl = $_SESSION['pass-user'];
    $pb = $_POST['pb'];


    $a = mysqli_query($connect, "SELECT * FROM tbl_user WHERE nama_user='$nama' AND pass_user='$pl' ") or die(mysqli_error($connect));
    $rsA = mysqli_fetch_array($a);
    
    if($rsA > 0){
        $s = "UPDATE tbl_user SET pass_user='$pb' WHERE nama_user='$nama'";
        mysqli_query($connect, $s) or die(mysqli_error($connect));
        header('location:gantipas5.php');
    }
    else if($rsA == 0) {
     
        header('location:gantipas.php?pesan=g1');
    }
  

?>