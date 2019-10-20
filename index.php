<?php
      INCLUDE 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/JQ/jquery.js"></script>
    <script src="assets/js/oci.js"></script>
    <link rel="stylesheet" href="assets/css/oci.css">
    <link rel="stylesheet" href="assets/FA/css/all.css">
    <!-- <script src="assets/FA/js/all.js"></script> -->
    <title>Document</title>
</head>
<body>
 
    <div id="mySidenav-home" class="sidenav-home bs--1">
      <div class="pt-1 bs-1">
        <marquee direction="up" class="fc-white">
          <span style="display: block; padding-right:5px;background-image: linear-gradient(to right top, #2adc32, #1de04e, #11e466, #0ae87a, #12eb8d);color:transparent;" >----</span> 
        </marquee>
      </div>
      <br>
        <div class="puso">
            <a href="javascript:void(0)" class="closebtn ml--1" onclick="closeNav()"> &times;</a>
            <img src="assets/img/1.png" alt="logo" class="img-fluid">
          <form action="pro/pro-login.php" method='post'>
            <div class="form-group">
              <label for="uname" class='fc-white GP18'>Nama </label>
              <input type="text" name='nama' id='uname' class='form-control' required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="upass" class="fc-white GP18">Password</label>
            
              <input  type="password" name='pass' id='upass' class='form-control' required autocomplete="off">
            </div>
            <input type="checkbox" class="form-checkbox loginjs"> <span class="fc-white">Show Password</span>
            <br>
            <button type='submit' class="btn-block btn-success  border-r1">Login</button>
          </form>
        </div>
      </div>

      <div id="mySidenav-home2" class="sidenav-home bs--1">
            <div class="puso">
                <a href="javascript:void(0)" class="closebtn ml--1" onclick="closeNav2()"> &times;</a>
                <h1 class="fc-white">Lupa Password</h1>
                <span class="fc-white">isilah kolom dibawah ini dengan benar</span>
                <hr class="hr--1">
              <form action="pro/pro-lupas.php" method='post'>
                <div class="form-group">
                  <label for="uname" class='fc-white GP18'>Nama </label>
                  <input type="text" name='nama' id='uname' class='form-control' required autocomplete="off" placeholder="Masukan Nama...">
                </div>
                <br>
                <div class="form-group" >
                  <select name='pOne' class="form-control">
                    <option value="Kamu suka apa?">Kamu suka apa?</option>
                    <option value="Kamu benci apa?">Kamu benci apa?</option>
                    <option value="Cita-cita kamu!"> Cita-cita kamu!</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                    <input  type="password" name='jOne' id='jOne' class='form-control' required autocomplete="off" placeholder="Jawaban...">
                </div>
                <hr class="hr--1">
                <div class="form-group">
                  <label for="upass" class="fc-white GP18">Masukan Password Baru</label>
                
                  <input  type="password" name='pass' id='upasss' class='form-control' required autocomplete="off">
                </div>
                <input type="checkbox" class="form-checkbox lupasjs"> <span class="fc-white">Show Password</span>
                <br>
                <button type='submit' class="btn-block btn-success  border-r1">Submit</button>
              </form>
            </div>
          </div>
      
      <div id="main-home" >
  
  <header id="header">
    <div class="puso">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" style="text-decoration: none; cursor:none;"><i class="GP6">marrochi</i></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active bs-1" style="padding-top: 5px;"><a href="#"><i class="fas fa-user-astronaut fa-3x" onclick="openNav()"></i> </a></li>
          <li><a href="#" class="bs-1" style="padding-top: 5px;"><i class="fas fa-user-times fa-3x" onclick="openNav2()"></i></a></li>
          <li><a href="https://www.youtube.com/?hl=id&gl=ID" class="bs-1" style="padding-top: 5px;" target="_blank"><i class="fab fa-youtube fa-3x"></i></i></a></li>
          <li><a href="https://web.facebook.com/" class="bs-1" style="padding-top: 5px;" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a></li>
         
        </ul>
      </nav>
    </div>
  </header>

  <section id="hero">
    <div class="hero-container">
      <h1 class="GP16">Warung Laris </h1>
      <h2 class="GP18">semoga hari ini banyak yang beli </h2>
      <a href="iki/index.php" class="btn-get-started GP16" >Get Started</a>
<div class="dn1">
    <?php
     if(isset($_GET['pesan'])){
          if($_GET['pesan']=='1'){
            echo '<div class="alert2 GP25" style="letter-spacing: 1.4px"><marquee>Password/Nama yg anda masukan salah</marquee></div>'; 
          }
          else if($_GET['pesan']=='2'){
            echo '<div class="alert2 GP25" style="letter-spacing: 1.4px"><marquee>Anda harus login</marquee></div>'; 
          }
          else if($_GET['pesan']=='3'){
            echo '<div class="alert2 GP25" style="letter-spacing: 1.4px"><marquee>Anda telah logout</marquee></div>'; 
          }
          else if($_GET['pesan']=='4'){
            echo '<div class="alert2 GP25" style="letter-spacing: 1.4px"><marquee>Nama Yg Anda Masukan Salah</marquee></div>'; 
          }
          else if($_GET['pesan']=='5'){
            echo '<div class="alert2 GP25" style="letter-spacing: 1.4px"><marquee>Pertanyaan Dan Jawaban Yg Anda Masukan Salah</marquee></div>'; 
          }
          else if($_GET['pesan']=='6'){
            echo '<div class="alert2 GP25" style="letter-spacing: 1.4px"><marquee>Selamat Anda Telah Ganti Password</marquee></div>'; 
          }
     }
    ?>
 
</div>
    </div>
  </section><!-- #hero -->



      </div>
      
 
</body>
</html>