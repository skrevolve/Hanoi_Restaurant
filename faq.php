<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <style>
    .wrap{
        width:1200px;
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
    *{margin:0px;padding:0px;}
		body{
			font-family: "맑은 고딕",arial,sans-serif;
			font-size:16px;
			color:#333;
		}
		h3{
			padding:30px;
			border-bottom:1px solid #000;
			margin-bottom:30px;
			font-size:20px;
		}
		
		dl{
			border-bottom:1px solid #000;
		}
		dt{
            font-size:20px;
            font-weight:bold;
			line-height:40px;
			border-bottom:1px solid #afafaf;
			color:#147714;
            cursor: pointer;
            line-height: 45px;
		}
		dt:before{
			content:"Q. ";
		}
		
		dd{
            cursor: pointer;
			background-color:#e3e3e3;
			padding:15px; /* 안쪽여백 */
            display:none;
            text-indent: 10px;
		}
		dd:before{
			content:"A. ";
		}
    
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>
	 $(document).ready(function(){
		 
		 //질문변수
		 var qBtn = $('dl > dt');
		 
		 qBtn.click(function(){ //질문을 클릭하면
			 //1. 답변이 펼쳐지고
			 //$(this).next().slideToggle();
			 
			 //2. 현재 선택한 요소의 다음요소(dd)를 보이게하고 그외 나머지 형제요소중 dd를 접히게 하여 숨김
			 $(this).next().slideToggle().siblings('dd').slideUp();
		 });
		 
	 });	
	</script>
	
	
</head>
<body>
    <header>
        <?php include "header.php";?>
    </header>
    <section>
        <section class="wrap">
            <div class="boxA">
                <div class="box_t">
                <p><a href="index.php" title="home">home</a> / 자주 묻는 질문</p>
                </div>
            <div class="qna">
                <dl>
                    <dt>식당 단체예약은 어떻게 하나요?</dt>
                    <dd>식당(CJ프레시웨이)으로 전화하시어 문의해 주시면 친절히 안내해 드립니다. 원활한 식사 제공을 위해 최소 일주일전 예약해 주시기 바랍니다.

                        ☎ 053)611-8640</dd>
                    <dt>몇 명까지 예약 가능한가요?</dt>
                    <dd>최대 200명 까지 예약 가능합니다.</dd>
                    
                    <dt>식사시간은 얼마나 가능합니까?</dt>
                    <dd>무제한 가능합니다.</dd>
                    
                    <dt>특정일 예약이 가능한가요?</dt>
                    <dd>네 가능합니다. 최소 3일 이전에는 전화 예약 부탁드립니다.</dd>
                    
                    <dt>매점이나 기념품점이 있나요?</dt>
                    <dd>1Gate 우측편에 CU편의점이 있으며 편의점 내에 과학 관련 장난감 등이 준비되어 있습니다.</dd>
                    
                    <dt>우대고객의 경우 어떤 혜택이 있나요? </dt>
                    <dd>우대고객의 경우 어떤 혜택이 있나요?</dd>
                    
                    <dt>온라인예약 시 결제 오류가 발생하면 어떻게 하나요?</dt>
                    <dd>온라인 예약 시 결제 단계에서 오류가 발생되면<br>
                        인터넷창(익스플로러) [설정] > [인터넷옵션] > [일반] > [검색기록] 쿠키 및 웹사이트 데이터 삭제 를 실행 후<br>
                        인터넷창(크롬) [설정] > [도구더보기] > [인터넷사용기록삭제] > 쿠키 및 웹사이트 데이터 삭제 를 실행 후<br>
                        재구동을 하셔서 다시 시도 하면 가능합니다.
                        
                        </dd>
                </dl>
            </div>
                
        </section>
    </section>
    <footer>
        <?php include "footer.php";?>
    </footer>
</body>
</html>