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
    <link rel="stylesheet" href="../assets/css/ao.css">
    <title>Kalkulator</title>
    <script>
            function insert(num){
                document.form.textview.value = document.form.textview.value+num;
            }
            function equal(){
                var exp = document.form.textview.value;
                if(exp){
                    document.form.textview.value = eval(exp);
                }
            }
            function clean(){
                document.form.textview.value = "";
            }
            function back(){
                var exp = document.form.textview.value;
                document.form.textview.value = exp.substring(0,exp.length-1);
            }
            
    </script>
    <style>
            *{
                margin: 0;
                padding: 0;
            }
            .button{
                width: 50px;
                height: 50px;
                font-size: 25px;
                margin:2px;
                cursor: pointer;
                background: #607d8b;
                border: none;
                color: #fff;
            }
            .btn2{
              
                background:#283b44!important;
                color: #fff;
            }
            .btn2:hover{
              
                background-image: linear-gradient(to right top, #fb008f, #e947b5, #d068d2, #b481e4, #9a95eb, #85a5f4, #73b3f8, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1)!important;
              color: #fff;
          }
            .button:hover{
                width: 50px;
                height: 50px;
                font-size: 25px;
                margin:2px;
                cursor: pointer;
                background-image: linear-gradient(to right top, #c43ebe, #ff3082, #ff6e3a, #f6b300, #a8eb12);
                border: none;
                color: #fff;
            }
            .textview{
                width: 209px;
                margin: 5px;
                font-size: 25px;
                padding: 5px;
                border: none;
            }
            .main{
                position: absolute;
                top:50%;
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
                background: rgba(0,0,0,0.2);
                padding: 35px;
                border-radius: 0.25em;

            }
            /* .bg{
                background-image: linear-gradient(to right top, #0f2039, #00537a, #008b92, #00c072, #a8eb12);
                height: 100%;
            } */
            body{
                background-image: url(../assets/img/2.png);
                background-repeat: repeat;
           
            }
    </style>
</head>
<body>
    <div style="color: #fff;padding-left:80px;width:25%;" class="animated swing slower">
        <br><br><br>
            <h1>Marrochi&trade;/13/10/2019</h1>
            <br>
            <h2 style="text-align: justify"><blockquote><q>Hari Ini adalah hari yang indah, tapi sayang sekali masih banyak orang yg tidak bisa melihat keindahan tersebut</q></blockquote></h2>
            <br>
            <img src="../assets/img/3.gif" alt="" style="max-width: 100%">
        </div>
     <div class="main">
         <form action="" name="form">
             <input type="text" class="textview" name="textview">
         </form>
     <table>
         <tr>
             <td><input type="button" class="button btn2 animated fadeInLeftBig fast" value="C" onclick="clean()"></td>
             <td><input type="button" class="button btn2 animated fadeInLeftBig faster" value="<" onclick="back()"></td>
             <td><input type="button" class="button btn2 animated fadeInLeftBig slow" value="/" onclick="insert('/')"></td>
             <td><input type="button" class="button btn2 animated fadeInLeftBig slower" value="X" onclick="insert('*')"></td>
         </tr>
         <tr>
            <td><input type="button" class="button animated flipInX fast" value="7" onclick="insert(7)"></td>
            <td><input type="button" class="button animated flipInX faster" value="8" onclick="insert(8)"></td>
            <td><input type="button" class="button animated flipInX fast" value="9" onclick="insert(9)"></td>
            <td><input type="button" class="button btn2 animated fadeInLeftBig delay-2s" value="-" onclick="insert('-')"></td>
        </tr>
        <tr>
            <td><input type="button" class="button animated flipInX slow" value="4" onclick="insert(4)"></td>
            <td><input type="button" class="button animated flipInX fast" value="5" onclick="insert(5)"></td>
            <td><input type="button" class="button animated flipInX slower" value="6" onclick="insert(6)"></td>
            <td><input type="button" class="button btn2 animated fadeInLeftBig slower" value="+" onclick="insert('+')"></td>
        </tr>
        <tr>
            <td><input type="button" class="button animated flipInX delay-3s" value="1" onclick="insert(1)"></td>
            <td><input type="button" class="button animated flipInX faster" value="2" onclick="insert(2)"></td>
            <td><input type="button" class="button animated flipInX delay-4s" value="3" onclick="insert(3)"></td>
            <td rowspan="2"><input type="button" style="height: 106px" class="button btn2 animated fadeInLeftBig delay-5s" value="=" onclick="equal()"></td>
        </tr>
        <tr>
                <td colspan="2"><input type="button" class="button  animated flipInX slower" style="width: 106px;" value="0" onclick="insert(0)"></td>
                <td><input type="button" class="button animated flipInX delay-4s" value="." onclick="insert('.')"></td>
        </tr>
     </table>
    </div>
</body>
</html>