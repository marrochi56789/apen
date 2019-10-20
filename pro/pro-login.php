<?php 
 INCLUDE '../koneksi.php';

    $nama = $_POST['nama'];
    $pass = $_POST['pass'];

    $tampil = "SELECT * FROM tbl_user WHERE nama_user='$nama' AND pass_user='$pass' ";
    $xtampil = mysqli_query($connect, $tampil) or die(mysqli_error($connect));
    $rstampil = mysqli_fetch_array($xtampil);

    if($rstampil > 0 ){

        $_SESSION['nama-user'] = $nama;
        header('location:../mamahcinol/index.php');

    }
    else {

        header('location:../index.php?pesan=1');
    }





?>