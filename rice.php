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
                <img src="./img/rice01.jpg">							
                <p>새우볶음밥 </p>
            </div>
            <div class="card">
                <img src="./img/rice02.jpg">							
                <p>닭가슴살 야채볶음밥 </p>
            </div>
            <div class="card">
                <img src="./img/rice03.jpg">							
                <p>잡채볶음밥 </p>
            </div>
            <div class="card">
                <img src="./img/rice04.jpg">							
                <p>닭가슴살 계란볶음밥 </p>
            </div>
            <div class="card">
                <img src="./img/rice05.jpg">							
                <p>비엔나소시지 야채볶음밥 </p>
            </div>
            <div class="card">
                <img src="./img/rice06.jpg">							
                <p>짜장볶음밥 </p>
            </div>
        <!-- </div> -->
    </section>
    <footer class="foot_div">
    <?php include "footer.php";?>
    </footer>    
</body>
</html>