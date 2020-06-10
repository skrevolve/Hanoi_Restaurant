<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appetizer</title>
    <style>
    .section{
        width:1200px;
        height:800px;
        margin:0 auto;
    }
    /* .line_1{
        margin-left:40px;
        width:1200px;
    } */
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
        <div class="card">
            <img src="./img/ap01.png">							
            <p>해물냉채 </p>
        </div>
        <div class="card">
            <img src="./img/ap02.png">							
            <p>버터플라이 쉬림프 토마토 </p>
        </div>
        <div class="card">
            <img src="./img/ap03.png">							
            <p>레몬 크림치즈까나페 </p>
        </div>
        <div class="card">
            <img src="./img/ap04.png">							
            <p>연어 타르타르 </p>
        </div>
        <div class="card">
            <img src="./img/ap05.png">							
            <p>브레드 파스타 </p>
        </div>
        <div class="card">
            <img src="./img/ap06.png">							
            <p>버섯 스테이크 </p>
        </div>
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
                   
    </section>
    <footer class="foot_div">
    <?php include "footer.php";?>
    </footer>    
</body>
</html>