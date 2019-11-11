<?php
INCLUDE '../koneksi.php';

if(!isset($_SESSION['nama-user'])){
    header('location:../index.php?pesan=2');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/oci.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bowlby+One+SC|Inconsolata|Jomolhari|Liu+Jian+Mao+Cao|Pacifico|Staatliches&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
    .gp1{
        font-family: 'Staatliches', cursive;
    }
    .gp2{
        font-family: 'Inconsolata', monospace;
    }
    .gp3{
        font-family: 'Bowlby One SC', cursive;
    }
    .gp4{
        font-family: 'Liu Jian Mao Cao', cursive;
    }
    .gp5{
        font-family: 'Jomolhari', serif;
    }
    .gp6{
        font-family: 'Pacifico', cursive;
    }
    .gp7{
        font-family: 'Amatic SC', cursive;
    }
  
    .bs1{
        -webkit-box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px);
    }
    .bs2{
        
        -webkit-box-shadow: 0 0 0 0 #ffffff;
    box-shadow: 0 0 0 0 #ffffff;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    -webkit-transform: translateY(0);
    transform: translateY(0);

    }
    .bs2:hover{
        -webkit-box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
    }
    </style>
</head>
<body>
    <p class='bs1 gp3' style="height:70px;width:100%;background: rgba(182,236,226,1);
background: -moz-linear-gradient(left, rgba(182,236,226,1) 0%, rgba(114,238,213,1) 50%, rgba(36,224,180,1) 51%, rgba(182,236,226,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(182,236,226,1)), color-stop(50%, rgba(114,238,213,1)), color-stop(51%, rgba(36,224,180,1)), color-stop(100%, rgba(182,236,226,1)));
background: -webkit-linear-gradient(left, rgba(182,236,226,1) 0%, rgba(114,238,213,1) 50%, rgba(36,224,180,1) 51%, rgba(182,236,226,1) 100%);
background: -o-linear-gradient(left, rgba(182,236,226,1) 0%, rgba(114,238,213,1) 50%, rgba(36,224,180,1) 51%, rgba(182,236,226,1) 100%);
background: -ms-linear-gradient(left, rgba(182,236,226,1) 0%, rgba(114,238,213,1) 50%, rgba(36,224,180,1) 51%, rgba(182,236,226,1) 100%);
background: linear-gradient(to right, rgba(182,236,226,1) 0%, rgba(114,238,213,1) 50%, rgba(36,224,180,1) 51%, rgba(182,236,226,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b6ece2', endColorstr='#b6ece2', GradientType=1 );"> <br>&nbsp; &nbsp; &nbsp;<span class="puso bs2" style="color:#fff; background:rgba(255,255,255,0.5);height:70px; border-radius:30px;cursor:pointer"><a href="index.php" style="text-decoration:none;color:white;"><-></a></span></p>
    <br><br>
   <center>
   <iframe width="1126" height="468" src="../assets/1.mp4" frameborder="2" ></iframe>
   </center>
   <br><br>
   <div class="puso">
       <h3 class="gp1"style='text-align:center;font-size:4rem'>Sungguh <span style="color:red">akunih orangnya tak jelas sekali</span> sumpah bener bener gajelas, permikiran ku disebut gila, pandanganku berbeda dari yang lainya,tujuanku seperti tidak ada tujuan.</h3>
   </div>
   <br>
   <br>
    <center>
    <audio width="320" height="176" controls class='bs2' style="border-radius:50px;">
    <source src="../assets/1.mp3" type="audio/mp3">
</audio>
   </center>
 <br><br><br><br>
</body>
</html>