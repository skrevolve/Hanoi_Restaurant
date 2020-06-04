<!DOCTYPE html>
<html lang="ko">
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>이용후기 > 글 쓰기</title>
<link rel="stylesheet" type="text/css" href="./css/reservation.css">
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">
		function FormSubmit() {
		if (grecaptcha.getResponse() == ""){
        alert("리캡차를 체크해야 합니다.");
	    return false;
        } else {
        return true;
        }
}
		</script>
<script>
  function check_input() {
      if (!document.reservation_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.reservation_form.subject.focus();
          return;
      }
      if (!document.reservation_form.content.value)
      {
          alert("예약 내용을 입력하세요 예) 00명 00메뉴");    
          document.reservation_form.content.focus();
          return;
      }
      document.reservation_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
   	<div id="reservation_box">
	    <h3 id="reservation_title">
	    예약하기
		</h3>
	    <form  name="reservation_form" method="post" action="reservation_insert.php" enctype="multipart/form-data" onsubmit="return FormSubmit();">
	    	 <ul id="reservation_form">
				<li>
					<span class="col1">예약자 : </span>
					<span class="col2"><?=$username?></span>
				</li>		
				<li>
					<span class="col1">예약 일자 : </span>
					<input name="date" type="date" max="9999-12-31" style="width:40%;">
					<input name="time" type="time" style="width:23%;">
				</li>
	    		<li>
	    			<span class="col1">인원 / 메뉴 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">추가 주문사항 : </span>
	    			<span class="col2"><textarea name="content" style="margin-left:-32px;"></textarea></span>
	    		</li>
	    		
	    	    </ul>
				<div class="g-recaptcha" data-sitekey="6LeC6bkUAAAAAEzSl6q9lkQ8b5gUDGcOSVl6cYUF"></div>
	    	<ul class="buttons">
				<li><input type="submit" name="submit" value="완료" style="width: 50.67px; height: 32px"></li>
				<li><button type="button" onclick="location.href='reservation_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- reservation_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
