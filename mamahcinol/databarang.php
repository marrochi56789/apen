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
  <li><a class=" GP4" href="index.php"><big><i class="fab fa-phoenix-squadron"></i> Home</big> </a></li>
  <li><a class='GP4 active' href=""><big><i class="fas fa-store"></i> DataBarang</big></a></li>
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
 <h1>Data Barang</h1>
 <hr>
</div>
<?php 
$per_hal=10;
$jumlah_record=mysqli_query($connect, "SELECT * from tbl_barang");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="puso">
<a href="databarangT.php" class='btn btn-T'><i class="fas fa-plus"></i>Tambah Data</a>
<a href="" class='btn btn-P' onclick='window.print()'><i class="fas fa-print"></i></a>  
<a href="javascript:void(0)" class='btn btn-T2'>JumlahBaris : <?php echo $jum; ?></a>
<a href="javascript:void(0)" class='btn btn-T2'>JumlahHalaman : <?php echo $halaman; ?></a>
<?php
     if(isset($_GET['pesan'])){
          if($_GET['pesan']=='t1'){
            echo "<a href='' class='btn btn-T3'>Barang Berhasil Ditambah!!</a>"; 
          }
          else if($_GET['pesan']=='t2'){
            echo "<a href='' class='btn btn-T3'>Barang Berhasil Diperbarui!!</a>"; 
          }
          else if($_GET['pesan']=='t3'){
            echo "<a href='' class='btn btn-T3'>Barang Berhasil Dihapus!!</a>"; 
          }
     }
    ?>
<!--  -->
<?php 
if(isset($_GET['cari'])){
  $cari=mysqli_real_escape_string($connect, $_GET['cari']);
  $db1=mysqli_query($connect, "SELECT * from tbl_barang where   nama_barang like '$cari%' OR harga_barang like '$cari%'");
}else{
  $db1=mysqli_query($connect, "SELECT * from tbl_barang limit $start, $per_hal");
}
?>
<div class="box-search1 float-r ">
           <form action="databarangC.php" method="get">
           <div class="container-search ">
                <span class="icon"><i class="fas fa-search"></i></span>
                <input type="text"  name='cari' class="bs-1" id="search" placeholder="Search..." />
            </div>
           </form>
</div> 
</div>
<br><br>
<div class="puso">
      <table id="tbl-penjualan-iki" class="bs-1" style="font-size: 14px!important">
       <thead>
       <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Suply</th>
            <th>Harga Barang</th>
            <th>Harga Jual</th>
            <th>Jumlah</th>
            <th>Laba</th>
            <th>Total Laba</th>
            <th>Opsi</th>
          </tr>
       </thead>
      <tbody>
      <?php
          $no =1; 
									while ($rsdb1 = mysqli_fetch_array($db1)) {
												
                      ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $rsdb1['nama_barang'] ?></td>
                  <td><a href="suplyC.php?cari=<?php echo $rsdb1['kode_suply'] ?>" style='color:#fff; padding:5px; background:lightblue; border-radius:0.25rem'><?php echo $rsdb1['kode_suply'] ?></a></td>
                  <td>RP.<?php echo number_format($rsdb1['harga_barang']) ?></td>
                  <td>RP.<?php echo number_format($rsdb1['harga_jual']) ?></td>
                  <td><?php echo $rsdb1['jumlah'] ?></td>
                  <td>RP.<?php echo number_format($rsdb1['laba']) ?></td>
                  <td>RP.<?php echo   number_format($rsdb1['total_laba']) ?></td>
                  <td>
                  <a href="databarangE.php?id=<?php echo $rsdb1['id_barang'] ?>" class='btn-info' style='padding:5px;border-radius: 0.25rem;'><i class="fas fa-pencil-alt"></i></a>
                  <a href="databarangH.php?id=<?php echo $rsdb1['id_barang'] ?>" onclick="return confirm ('Yakin mau hapus?')" class='btn-danger' style='padding:5px;border-radius: 0.25rem;'><i class="fas fa-trash"></i></a>
                  </td>
                </tr>     
                  <?php } ?> 
      </tbody>
      <tfoot>
        <tr>
          <td colspan=6>Total</td>
          
            <td>	<?php 
            $x=mysqli_query($connect, "SELECT sum(laba) as total from tbl_barang");	
            $xx=mysqli_fetch_array($x);			
            echo "<b> Rp.". number_format($xx['total']).",-</b>";		
              ?></td>
            <td colspan=2>	<?php 		
            $x2=mysqli_query($connect, "SELECT sum(total_laba) as total2 from tbl_barang");	
            $xx2=mysqli_fetch_array($x2);			
            echo "<b> Rp.". number_format($xx2['total2']).",-</b>";		
          ?></td>
        </tr>
      </tfoot>
        </table>
  </div>
<br>
<div class="puso">
    <div class="pagination1">
		<?php 
			for($x3=1;$x3<=$halaman;$x3++){
				?>
			<a href="?page=<?php echo $x3 ?>"><?php echo $x3 ?></a>
				<?php
			}
			?>	
      </div>
</div>

</div>
</body>
</html>
