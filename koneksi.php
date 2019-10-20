<?php 
    $hostName ="localhost";
    $userName ="root";
    $password = "";
    $dbName = "apen";

    $connect = mysqli_connect($hostName, $userName, $password, $dbName);
    date_default_timezone_set("Asia/Bangkok");
    session_start();
?>