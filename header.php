<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<?php
	@session_start();
		if(isset($_SESSION["userid"])) {
			$userid = $_SESSION["userid"];
		} else {
			$userid = "";
		}
		if(isset($_SESSION["username"])) {
			$username = $_SESSION["username"];
		} else {
			$username = "";
		}
		if(isset($_SESSION["userlevel"])) {
			$userlevel = $_SESSION["userlevel"];
		} else {
			$userlevel = "";
		}
		if(isset($_SESSION["userpoint"])) {
			$userlevel = $_SESSION["userpoint"];
		} else {
			$userpoint = "";
		}
?>
</head>
	<body>
		<div id="wrap">
			<div id="header">
				<div class="head">
					<div class="inner">
						<ul>
<?php
	if (!$userid) {
?>
							<li>
								<a href="join_config.php" target="_self" title="회원가입">회원가입</a>
							</li>
							<li>
								<a href="login_form.php" target="_self" title="로그인">로그인</a>
							</li>
<?php
	} else {
		$logged = $username."(".$userid.")님[Level:".$userlevel.",Point:".$userpoint."]";
?>
		<li><?=$logged?> </li>
		<li>
		<a href="logout.php" target="_self" title="로그아웃">로그아웃</a>
		</li>
		
		<li>
		<a href="member_modify_form.php" target="_self" title="회원정보수정">회원정보 수정</a>
		</li>
<?php
		}
?>

<?php
	if ($userlevel == 1) {
?>
		<li>|</li>
		<li><a href="admin.php">관리자 모드</a></li>
<?php
	}
?>
						</ul>
					</div>
				</div>
				<div class="head2">
					<div class="inner">
						<h1 class="logo left">
							<a href="index.php" target="_self" title="logo">
								<img src="img/logo.png" alt="logo"/>
							</a>
						</h1>
						<div class="nav">
							<ul>
								<li>
									<a href="all.php" target="_self" title="메뉴소개">메뉴소개</a>
								</li>
								<li>
									<a href="reservation_list.php" target="_self" title="예약하기">예약하기</a>
								</li>
								<li>
									<a href="board_list.php" target="_self" title="이용후기">이용후기</a>
								</li>
								<li>
									<a href="faq.php" target="_self" title="FAQ">FAQ</a>
								</li>
								<li>
									<a href="map.php" target="_self" title="오시는길">오시는길</a>
								</li>
							<ul class=" box1 right">
								<li>
									<a href="reservation_list.php" target="_self" title="예약하기">예약확인</a>
								</li>
							</ul>
							<br/>
							</ul>
						</div>	
					<br/>
					</div>
				</div>
			</div>
			</body>
			</html>