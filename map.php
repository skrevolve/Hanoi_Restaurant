<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>오시는 길</title>
    <style>
    .wrap{
        width:1200px;
        height:700px;
        margin:0 auto;
    }

    .boxA{
        float:left;
        width:100%;
        height:680px;
    }
    .box_t{
        
        width:100%;
        border-radius: 5px;
        background:#ccc;
        margin-bottom:20px;
        height:50px;
        line-height:50px;
        text-indent: 10px;
    }
    .box_add{
        height:100px;
        margin-bottom:20px;
        border-bottom:1px solid #ccc;
    }
    .box_add #tel{
        width:100%;
        border-radius: 5px;
        background:#ccc;
        display:block;
        height:50%;
        line-height:50px;
        margin-top:10px;
    }
    .box_add #add{
        height:50%;
        margin-bottom:10px;
        line-height:50px;
    }
    .box_add p{
        text-indent: 10px;
    }
    #ad{
        padding-top:10px;
    }
    .box_map{
        background:black;
        top:100px;
        height:465px;
    }
   
    </style>
</head>
<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section class="wrap">
        <div class="boxA">
            <div class="box_t">
            <p><a href="index.php" title="home">home</a> / 오시는 길</p>
            </div>
            <div class="box_add">
                <p id='tel'>전화                 02-1004-1004</p>
                <p id='ad'>주소                 서울시 마포구 서교동 477-5 </p>
            </div>
            <div class="box_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1880.729819631868!2d126.91190861522837!3d37.55511263132867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c98d85702730d%3A0xa3234d39737cf8f3!2z7ISc7Jq47Yq567OE7IucIOuniO2PrOq1rCDshJzqtZDrj5kgNDc3LTU!5e0!3m2!1sko!2skr!4v1569206838328!5m2!1sko!2skr" width="100%" height="465" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
          
    </section>
    <footer>
            <?php include "footer.php"; ?>
    </footer>
</body>
</html>