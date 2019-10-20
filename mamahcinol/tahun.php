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
    </style>
</head>
<body>
<ul class='navbar-user'>
  <div class="puso">
  <li><a class="GP4" href="index.php"><big><i class="fas fa-angle-double-left"></i> Kembali</big> </a></li>
  <li class='float-r'><a class='GP4 active' href=""><big><i class="fas fa-compress-arrows-alt"></i> Keuntungan Tahun Ini</big></a></li>
  </div>
</ul>
<br>
<div class="puso">
 <h1>Penjualan Tahun Ini</h1>
 <hr>
</div>
<?php 
$dateTime1 =   date('Y-');
$jumlah_record=mysqli_query($connect, "SELECT * from tbl_barangterjual WHERE tgl_bt like '$dateTime1%'");
$jum=mysqli_num_rows($jumlah_record);

?>
<div class="puso">
<a href="" class='btn btn-P' onclick='window.print()'><i class="fas fa-print"></i></a>  
<a href="javascript:void(0)" class='btn btn-T2'>JumlahBaris : <?php echo $jum; ?></a>

<!--  -->
<?php 
  $dateTime1 =   date('Y-');
  $db1=mysqli_query($connect, "SELECT * from tbl_barangterjual WHERE tgl_bt like '$dateTime1%' ");

?>

</div>
<br><br>
<div class="puso">
      <table id="tbl-penjualan-iki" class="bs-1" style="font-size: 14px!important">
       <thead>
       <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Tanggal</th>
            <th>Kode Suply</th>
            <th>Jumlah</th>
            <th>Laba</th>
            <th>Total Laba</th>
         
          </tr>
       </thead>
      <tbody>
      <?php
          $no =1; 
									while ($rsdb1 = mysqli_fetch_array($db1)) {
												
                      ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $rsdb1['nb_bt'] ?></td>
                  <td><?php echo $rsdb1['tgl_bt'] ?></td>
                  <td><?php echo $rsdb1['kds_bt'] ?></td>
                  <td><?php echo $rsdb1['jumlah_bt'] ?></td>
                  <td><?php echo $rsdb1['l_bt'] ?></td>
                  <td><?php echo $rsdb1['tl_bt'] ?></td>
                
                
                </tr>     
                  <?php } ?> 
      </tbody>
      <tfoot>
        <tr>
          <td colspan=5>Total</td>
          
            <td>	<?php 
            $x=mysqli_query($connect, "SELECT sum(l_bt) as total from tbl_barangterjual WHERE tgl_bt like '$dateTime1%'");	
            $xx=mysqli_fetch_array($x);			
            echo "<b> Rp.". number_format($xx['total']).",-</b>";		
              ?></td>
            <td colspan=1>	<?php 		
            $x2=mysqli_query($connect, "SELECT sum(tl_bt) as total2 from tbl_barangterjual WHERE tgl_bt like '$dateTime1%'");	
            $xx2=mysqli_fetch_array($x2);			
            echo "<b> Rp.". number_format($xx2['total2']).",-</b>";		
          ?></td>
        </tr>
      </tfoot>
        </table>
  </div>
<br>


</div>
</body>
</html>
