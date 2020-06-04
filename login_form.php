<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>로그인</title>
		<style>
		.section{
			width:1200px;
			margin:0 auto;
		}
		#login_box{
			width:906px;
		}
		.table{
			width:960px;
			
			margin-top:43px;
			margin-left:200px;
			
			margin-bottom:300px;
		
		}
		.table h1{
			text-indent:55px;
			margin-bottom:50px;
		}
		#login_form{
			width:800px;
			
			margin:0 auto;
			
		}

		#input{
			line-height:30px;
		}
		#login_form li{
			padding:10px;
		}
		#button{
			padding-left:10px;
			padding-right:10px;
			padding-top:5px;
			padding-bottom:5px;
			

			margin-left:509px;
		}
		.g-recaptcha{
			margin-left:270px;
		}
		
		</style>
	
		<script type="text/javascript" src="/js/login.js"></script>
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

	</head>
	<body>
	<header>
	<?php include "header.php"; ?>
	</header>

<section class="section">
	
<!---login_box시작--->
<div id="login_box">	
	<form name="login_form" method="post" action="login.php" onsubmit="return FormSubmit();">
		<table class="table">
			<tr>
				<td>
					<h1>로그인</h1>
				</td>
			</tr>
			<tr>
				<td>
					<div id="login_form">
						<ul>
						<li>아 이 디&nbsp; <input id="id" type="text" name="id" placeholder="아이디" size="66"></li>
						<li>패스워드 <input id="pass" type="password" name="pass" placeholder="비밀번호" size="66"></li>
						</ul>
						<input type="submit" name="submit" value="로그인" id='button' onclick="FormSubmit();"><br/><br/>
					<div class="g-recaptcha" data-sitekey="6LeC6bkUAAAAAEzSl6q9lkQ8b5gUDGcOSVl6cYUF"></div>
					</div>
				</td>
			</tr>
		</table>			
	</form>
</div><!---login_box--->
</section>
	
<footer>
	<?php include "footer.php"; ?>
</footer>
</body>
</html>