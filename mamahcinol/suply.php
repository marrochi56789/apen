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
  <li class='float-r'><a class='GP4 active' href=""><big><i class="fas fa-compress-arrows-alt"></i> Suply</big></a></li>
  </div>
</ul>
<br>
<div class="puso">
 <h1>Data Suply</h1>
 <hr>
</div>
<?php 
$per_hal=10;
$jumlah_record=mysqli_query($connect, "SELECT * from tbl_suply");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="puso">
<a href="suplyT.php" class='btn btn-T'><i class="fas fa-plus"></i>Tambah Suply</a>
<a href="" class='btn btn-P' onclick='window.print()'><i class="fas fa-print"></i></a>  
<a href="" class='btn btn-T2'>JumlahBaris : <?php echo $jum; ?></a>
<a href="" class='btn btn-T2'>JumlahHalaman : <?php echo $halaman; ?></a>
<?php
     if(isset($_GET['pesan'])){
          if($_GET['pesan']=='s1'){
            echo "<a href='' class='btn btn-T3'>Suply Berhasil Ditambah!!</a>"; 
          }
          else if($_GET['pesan']=='s2'){
            echo "<a href='' class='btn btn-T3'>Kode Sudah Terpakai</a>"; 
          }
          else if($_GET['pesan']=='s3'){
            echo "<a href='' class='btn btn-T3'>Berhasil Di Ubah</a>"; 
          }
          else if($_GET['pesan']=='s4'){
            echo "<a href='' class='btn btn-T3'>Berhasil Di Hapus</a>"; 
          }
     }
    ?>
<!--  -->
<?php 
if(isset($_GET['cari'])){
  $cari=mysqli_real_escape_string($connect, $_GET['cari']);
  $db1=mysqli_query($connect, "SELECT * from tbl_suply where nama_suply like '$cari%' OR kode_suply like '$cari%'");
}else{
  $db1=mysqli_query($connect, "SELECT * from tbl_suply limit $start, $per_hal");
}
?>
<div class="box-search1 float-r ">
           <form action="suplyC.php" method="get">
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
            <th>Kode Suply</th>
            <th>Nama Suply</th>
            <th>Kontak Suply</th>
            <th>Alamat Suply</th>
            <th>Cv Suply</th>
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
                  <td><?php echo $rsdb1['kode_suply'] ?></td>
                  <td><?php echo $rsdb1['nama_suply'] ?></td>
                  <td><?php echo $rsdb1['kontak_suply'] ?></td>
                  <td><?php echo $rsdb1['alamat_suply'] ?></td>
                  <td><?php echo $rsdb1['cv_suply'] ?></td>
          
                  <td>
                  <a href="suplyE.php?id=<?php echo $rsdb1['kode_suply'] ?>" class='btn-info' style='padding:5px;border-radius: 0.25rem;'><i class="fas fa-pencil-alt"></i></a>
                  <a href="suplyH.php?id=<?php echo $rsdb1['kode_suply'] ?>" onclick="return confirm ('Yakin mau hapus?')" class='btn-danger' style='padding:5px;border-radius: 0.25rem;'><i class="fas fa-trash"></i></a>
                  </td>
                </tr>     
                  <?php } ?> 
      </tbody>

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
