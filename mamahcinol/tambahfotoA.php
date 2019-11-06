<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}

$nb = $_POST['nb'];
$kf = $_POST['kf'];
$ft = $_FILES['foto']['name'];

$cariSQL=mysqli_query($connect, "SELECT * FROM tbl_barang WHERE nama_barang='$nb'");
$RScari=mysqli_fetch_array($cariSQL);
if($RScari > 0 ){

    if(file_exists("foto/".$RScari['foto'])){
        unlink("foto/".$RScari['foto']);
        move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
        mysqli_query($connect, "UPDATE tbl_barang set foto='$ft', keterangan_foto='$kf' WHERE nama_barang='$nb'");
        header("location:tambahfoto.php?err=2");
    }
    else{
        move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
        mysqli_query($connect, "UPDATE tbl_barang set foto='$ft', keterangan_foto='$kf' WHERE nama_barang='$nb'");
        header("location:tambahfoto.php?err=2");
    }



}
else {
    header('location:tambahfoto.php?err=1');
}


?>