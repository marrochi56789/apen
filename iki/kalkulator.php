<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            .button:hover{
                background:#eddb76;
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
                background:rgba(255,255,255,0.3);
                padding:30px;
            }
            /* .bg{
                background-image: linear-gradient(to right top, #0f2039, #00537a, #008b92, #00c072, #a8eb12);
                height: 100%;
            } */
            body{
                background-image: url(../assets/img/1.gif);
                background-repeat: no-repeat;
                background-size: cover;
           
            }
    </style>
</head>
<body>
    <!-- <div class="bg"></div> -->
     <div class="main">
         <form action="" name="form">
             <input type="text" class="textview" name="textview">
         </form>
     <table>
         <tr>
             <td><input type="button" class="button" value="C" onclick="clean()"></td>
             <td><input type="button" class="button" value="<" onclick="back()"></td>
             <td><input type="button" class="button" value="/" onclick="insert('/')"></td>
             <td><input type="button" class="button" value="X" onclick="insert('*')"></td>
         </tr>
         <tr>
            <td><input type="button" class="button" value="7" onclick="insert(7)"></td>
            <td><input type="button" class="button" value="8" onclick="insert(8)"></td>
            <td><input type="button" class="button" value="9" onclick="insert(9)"></td>
            <td><input type="button" class="button" value="-" onclick="insert('-')"></td>
        </tr>
        <tr>
            <td><input type="button" class="button" value="4" onclick="insert(4)"></td>
            <td><input type="button" class="button" value="5" onclick="insert(5)"></td>
            <td><input type="button" class="button" value="6" onclick="insert(6)"></td>
            <td><input type="button" class="button" value="+" onclick="insert('+')"></td>
        </tr>
        <tr>
            <td><input type="button" class="button" value="1" onclick="insert(1)"></td>
            <td><input type="button" class="button" value="2" onclick="insert(2)"></td>
            <td><input type="button" class="button" value="3" onclick="insert(3)"></td>
            <td rowspan="2"><input type="button" style="height: 106px" class="button" value="=" onclick="equal()"></td>
        </tr>
        <tr>
                <td colspan="2"><input type="button" class="button" style="width: 106px;" value="0" onclick="insert(0)"></td>
                <td><input type="button" class="button" value="." onclick="insert('.')"></td>
        </tr>
     </table>
    </div>
</body>
</html>