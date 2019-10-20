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
  <li><a class=" GP4" href="databarang.php"><big><i class="fas fa-angle-double-left"></i> Kembali</big> </a></li>

  </div>
</ul>
<br>
<div class="puso">
 <h1>Edit Suply</h1>
 <hr>
</div>
<?php 
								$id = $_GET['id'];
								$E1 = mysqli_query($connect,"SELECT * FROM tbl_suply WHERE kode_suply=('$id') ");
								while($rsE1 = mysqli_fetch_array($E1)){
?>
<div class="puso">
    <form action="suplyEA.php" method='post'>
    <span>Kode Suply : </span> <input type="text" name='ks1' class='form-control' value='<?php echo $rsE1['kode_suply']; ?>'> <br>
    <input type="hidden" name='id' class='form-control' value='<?php echo $rsE1['kode_suply']; ?>'> <br>

    <span>Nama Suply : </span> <input type="text" name='ns' class='form-control' value='<?php echo $rsE1['nama_suply']; ?>'> <br>
    <span>Kontak Suply : </span> <input type="text" name='ks2' class='form-control' value='<?php echo $rsE1['kontak_suply']; ?>'> <br>
    <span>Alamat Suply: </span> <input type="text"  name='as' class='form-control' value='<?php echo $rsE1['alamat_suply']; ?>'> <br>
    <span>Cv Suply: </span> <input type="text"  name='cs' class='form-control' value='<?php echo $rsE1['cv_suply']; ?>'> <br>
    <button type='submit' class='btn btn-success'>Simpan</button> <button type='reset' class='btn btn-danger'>Reset</button>
    </form>    

</div>
                                <?php } ?>
</body>
</html>
