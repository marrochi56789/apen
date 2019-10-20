<?php 
 INCLUDE '../koneksi.php';

    $nama = $_POST['nama'];
    $pOne = $_POST['pOne'];
    $jOne = $_POST['jOne'];
    $pass = $_POST['pass'];

    $tampil = "SELECT * FROM tbl_user WHERE nama_user='$nama'  ";
    $xtampil = mysqli_query($connect, $tampil) or die(mysqli_error($connect));
    $rstampil = mysqli_fetch_array($xtampil);

    if($rstampil > 0 ){
        $tampil2 = "SELECT * FROM tbl_user WHERE nama_user='$nama' AND pOne='$pOne' AND jOne='$jOne'  ";
        $xtampil2 = mysqli_query($connect, $tampil2) or die(mysqli_error($connect));
        $rstampil2 = mysqli_fetch_array($xtampil2);
        if($rstampil2 > 0 ){
                mysqli_query($connect,"UPDATE tbl_user SET pass_user='$pass' WHERE nama_user='$nama' AND pOne='$pOne' AND jOne='$jOne' ");
                header('location:../index.php?pesan=6');
        }
        else {
            header('location:../index.php?pesan=5');
        }
    }
    else {

        header('location:../index.php?pesan=4');
    }





?>