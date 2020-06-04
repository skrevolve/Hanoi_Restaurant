<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appetizer</title>
    <style>
    .section{
        width:1200px;
        height:300px;
        margin:0 auto;
    }
    .card {
        border:1px solid #ccc;
        display:block;
        float:left;
        width:320px;
        background:#fff;
        box-shadow:0px 1px 1px #ccc;
        padding:15px;
        padding-bottom:15px;
        margin:10px;
        margin-top:40px;
    }
    .card img {
        width:100%;
        border-bottom:1px solid #ccc;
        padding-bottom:15px;
        margin-bottom:5px;
        height:200px;
    }

    .card p {
        font-family:"맑은 고딕", 돋움;
        color:#333;
        margin:0;
        padding:10px;
    }
    .foot_div{
        width:1400px;
        float:left;
        margin-top:20px;
        height:130px;
    }
    </style>
</head>
<body>
<?php include "menu_introduce.php";?>
    <section class="section">
        <!-- <div class="line_1"> -->
            <div class="card">
                <img src="./img/set01.png">							
                <p>치킨 연어구이 세트 </p>
            </div>
            <div class="card">
                <img src="./img/set02.png">							
                <p>순살 고등어 불고기 세트 </p>
            </div>
            <div class="card">
                <img src="./img/set03.png">							
                <p>벚꽃세트 </p>
            </div>
            <div class="card">
                <img src="./img/set04.png">							
                <p>순살 고등어데리야끼 세트 </p>
            </div>
           
        <!-- </div> -->
    </section>
    <footer class="foot_div">
    <?php include "footer.php";?>
    </footer>    
</body>
</html>