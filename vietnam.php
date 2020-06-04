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
                <img src="./img/f001.jpg">							
                <p>해물냉채 </p>
            </div>
            <div class="card">
                <img src="./img/f002.jpg">							
                <p>뚝배기 쌀국수 </p>
            </div>
            <div class="card">
                <img src="./img/f003.jpg">							
                <p>오리지널 베트남 쌀국수 </p>
            </div>
            <div class="card">
                <img src="./img/f004.jpg">							
                <p>매운 쌀국수 </p>
            </div>
            <div class="card">
                <img src="./img/f005.jpg">							
                <p>치즈토마토쌀국수 </p>
            </div>
            <div class="card">
                <img src="./img/f006.jpg">							
                <p>태국 쌀국수 </p>
            </div>
        <!-- </div> -->
    </section>
    <footer class="foot_div">
    <?php include "footer.php";?>
    </footer>    
</body>
</html>