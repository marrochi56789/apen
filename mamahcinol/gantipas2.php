<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}

    $nama = $_SESSION['nama-user'];
    $pl = $_POST['pl'];


    $a = mysqli_query($connect, "SELECT * FROM tbl_user WHERE nama_user='$nama' AND pass_user='$pl' ") or die(mysqli_error($connect));
    $rsA = mysqli_fetch_array($a);
    
    if($rsA > 0){
        $_SESSION['pass-user'] = $pl;
        header('location:gantipas3.php');
    }
    else if($rsA == 0) {
     
        header('location:gantipas.php?pesan=g1');
    }
  

?>