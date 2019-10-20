<?php 
 INCLUDE '../../koneksi.php';

    unset($_SESSION['nama-user']);
    unset($_SESSION['pass-user']);
    header('location:../../index.php?pesan=3');

 ?>