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
    <link rel="stylesheet" href="../assets/FA/css/all.css">
    <title>Document</title>
    <style>
        /*-------------------------------------------------------------------------------------------------------- */
/*                                 NAVBAR USER                                                            */
/* -------------------------------------------------------------------------------------------------------- */ 
  /* nabvar   */
  .navbar-user {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }

    .navbar-user   li {
    float: left;
    }

    .navbar-user    li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

    .navbar-user     li a:hover:not(.active) {
    background-color: #50a0e1;
    }
    .active:hover{
      background: #ffdb59 !important;
    }
    .navbar-user    .active {
        background-image: linear-gradient(to right top, #ef45ff, #ff009e, #ff6e3c, #ffb800, #a8eb12);
    }
    /* dropdown navbar*/
    .dropdown-content {
  display: none;
  position: absolute;
  background-color: #ccc;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
     /* form search */
  .box-search1{
  margin: 0% auto;
  width: 300px;
  height: 50px;
}.container-search{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;;
  
}
.container-search input#search{
  width: 300px;
  height: 40px;
  background: #333;
  border: none;
  font-size: 10pt;
  float: left;
  color: #fff;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.container-search input#search::-webkit-input-placeholder {
   color: #fff;
}
 
.container-search input#search:-moz-placeholder { /* Firefox 18- */
   color: #fff;  
}
 
.container-search input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #fff;  
}
 
.container-search input#search:-ms-input-placeholder {  
   color: #fff;  
}
.container-search .icon{
  position: absolute;
  /* top: 50%; */
  margin-left: 3%;
  margin-top: 0%;
  font-size: 25px;
  /* margin-top: 17px; */
  /* z-index: 1; */
  color: #fff;
}

/* table */
/* table */
#tbl-penjualan-iki {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;

  width: 100%;
 
}

#tbl-penjualan-iki td, #tbl-penjualan-iki th {
  border-top: 1px solid #ddd;
  padding: 8px;
}

#tbl-penjualan-iki tr:nth-child(even){background-color: #f2f2f2;}

#tbl-penjualan-iki tr:hover {background-color: #ddd;}

#tbl-penjualan-iki th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #333;
  color: white;
}
/* pagination1 */
.pagination1 {
  display: inline-block;
}

.pagination1 a {
  background: #333;
  color: #fff;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border-collapse: collapse;
  border-right: 2px solid #fff;
}
* {
  box-sizing: border-box;
}


.colom3 {
  float: left;
  width: 32.33%;
  padding: 10px;
  margin-right:1%;
  height:auto; 
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
    </style>
</head>
<body>
<ul class='navbar-user'>
  <div class="puso">
  <li><a class=" GP4 active" href="index.php"><big><i class="fab fa-phoenix-squadron"></i> Home</big> </a></li>
  <li><a class='GP4 ' href="databarang.php"><big><i class="fas fa-store"></i> DataBarang</big></a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fab fa-airbnb"></i> Master Data</a>
    <div class="dropdown-content">
      <a href="suply.php">Suply</a>
      <a href="tambahstock.php">Tambah Stock</a>
      <a href="kalkulator.php" target='_blank'>Kalkulator</a>
 
    </div>
  </li>
  <li><a class=" GP4" href="gantipas.php"><big><i class="fas fa-lock"></i> Ganti Password</big> </a></li>
  <li><a href="https://www.youtube.com/?hl=id&gl=ID" target="_blank"><big><i class="fab fa-youtube "></i></i></big></a></li>
          <li><a href="https://web.facebook.com/" target="_blank"><big><i class="fab fa-facebook-square"></i></a></big></li>
  <li class='float-r'><a class='GP4' href="pro/pro-logout.php"><big><i class="fas fa-sign-out-alt"></i> Logout</big></a></li>
  </div>
</ul>
<br>
<div class="puso">
 <h1>Dashboard</h1>
 <hr>

<div class="puso">
<div class="row">
  <div class="colom3" style="background-color:rgba(0,0,0,0.7);border-radius:0.25rem;color:white;">
    <h2>Pendapatan Tahun Ini</h2>
    <?php 
     $dateTime1 =   date('Y-');
    $tahun = mysqli_query($connect,"SELECT sum(tl_bt) as total FROM tbl_barangterjual WHERE tgl_bt LIKE '%$dateTime1%' ");
    $rstahun = mysqli_fetch_array($tahun);
    ?>
    <p>Rp.<?php echo number_format($rstahun['total']) ?></p>
    <a href="tahun.php" class="btn btn-success">Lihat Selengkapnya</a>
  </div>
  <div class="colom3" style="background-color:rgba(0,0,0,0.7);border-radius:0.25rem;color:white;">
  <h2>Pendapatan Bulan Ini</h2>
  <?php 
     $dateTime1 =   date('Y-m');
    $bulan = mysqli_query($connect,"SELECT sum(tl_bt) as total FROM tbl_barangterjual WHERE tgl_bt LIKE '%$dateTime1%' ");
    $rsbulan = mysqli_fetch_array($bulan);
    ?>
   <p>Rp.<?php echo number_format($rsbulan['total']) ?></p>
   <a href="bulan.php" class="btn btn-success">Lihat Selengkapnya</a>

  </div>
  <div class="colom3" style="background-color:rgba(0,0,0,0.7);border-radius:0.25rem;color:white;">
    <h2>Pendapatan Hari Ini</h2>
    <?php 
     $dateTime1 =   date('Y-m-d');
    $hari = mysqli_query($connect,"SELECT sum(tl_bt) as total FROM tbl_barangterjual WHERE tgl_bt LIKE '%$dateTime1%' ");
    $rshari = mysqli_fetch_array($hari);
    ?>
    <p>Rp.<?php echo number_format($rshari['total']) ?></p>
    <a href="hari.php" class="btn btn-success">Lihat Selengkapnya</a>
  </div>
</div></div>

</div>
</body>
</html>
