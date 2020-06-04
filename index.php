<?php
$con = mysqli_connect("localhost", "sukyu0919", "SKlim478359!", "sukyu0919");
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<style>
		a{text-decoration:none;}
		.name{float:right}
		</style>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>하노이 레스토랑</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/banner.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js"></script><!--아이콘폰트-->
		<script>
	 $(document).ready(function(){
         var slide = $('.slide_box > .slide')
         $('.slide > div:last-child').insertBefore('.slide>div:first-child');
         $('.slide').css('margin-left',-($('.slide_box').width()));
         function moveLeft(){
             slide.animate({'margin-left':-($('.slide_box').width()*2)},500,function(){
                 $('.slide>div:first-child').insertAfter('.slide>div:last-child');
                slide.css('margin-left',-($('.slide_box').width()));
             });
         };
          function moveright(){
             slide.animate({'margin-left':'0px'},500,function(){
                 $('.slide>div:last-child').insertBefore('.slide>div:first-child');
                slide.css('margin-left','-1400px')
             });
         };

         var Timer = setInterval(moveLeft,1000);
         $('.ctrl_btn01>.fa-angle-left').click(function(){
            moveLeft(); 
         });

         $('.ctrl_btn01>.fa-angle-right').click(function(){
            moveright(); 
         });

         $('.ctrl_btn01 > i.fas').hover(function(){
             clearInterval(Timer);

         },function(){
            Timer = setInterval(moveLeft,5000);
        });
         
         $('.ctrl_btn02>.fa-pause').click(function(){
             clearInterval(Timer);
         });
         
         $('.ctrl_btn02>.fa-play').click(function(){
             Timer = setInterval(moveLeft,5000);
         });
     });
    </script>
	</head>
	<body>
	<header>
	<?php include "header.php"; ?>
	</header>
	    <section class='banner'>
	         <article class='slide_box'>
                <div class='slide'>
                    <div><img src="./img/bg01.png" alt=""></div>
                    <div><img src="./img/bg02.png" alt=""></div>
                    <div><img src="./img/bg03.png" alt=""></div>
                </div>
                <div class="ctrl_btn01">
                    <i class="fas fa-angle-left"></i>
                    <i class="fas fa-angle-right"></i>
                </div>
                <div class="ctrl_btn02">
                   <i class="fas fa-play"></i>
                   <i class="fas fa-pause"></i>
                </div>
            </article>
	    </section>
		<section>
			<div id="contentsarea">
				<div class="inner1">
					<div class="wrap">
						<div class="con1 big"></div>
						<div class="con2">
							<table>
								<tr>
									<td class="top">
											<a href="reservation_list.php" target="_self" title="레스토랑소개">예약</a>
											<a href="reservation_list.php" target="_self" title="레스토랑소개" class="img"><img src="img/bot.png"/></a>	
									</td>
								</tr>	
								<?
								$sql = "select * from reservation order by num desc limit 0,5";
								$result = mysqli_query($con, $sql);
								?>
								<tr>
									<td class="bottom">
									<?
									while($row = mysqli_fetch_array($result)){
									?>
									<a href="reservation_list.php" target="_self" title="레스토랑소개"><?=$row[subject]?>
									<div class="name"><?=$row[name]?>&nbsp;<?=$row[regist_day]?></div></a>
									<?}?>
									</td>
								</tr>
							</table>
						</div>
						<div class="con3">
							<table>
								<tr>
									<td class="top">
											<a href="board_list.php" target="_self" title="레스토랑소개">이용후기</a>
											<a href="board_list.php" target="_self" title="레스토랑소개" class="img"><img src="img/bot.png"/></a>	
									</td>
								</tr>
								<?
								$sql = "select * from board order by num desc limit 0,5";
								$result = mysqli_query($con, $sql);
								?>
								<tr>
									<td class="bottom">
									<?
									while($row = mysqli_fetch_array($result)){
									?>
									<a href="board_list.php" target="_self" title="레스토랑소개"><?=$row[subject]?>
									<div class="name"><?=$row[name]?>&nbsp;<?=$row[regist_day]?></div></a>
									<?}?>
									</td>
								</tr>
							</table>
						</div>
						</br>
						<div class="con4">
							<table>
								<tr>
									<td class="top">
											<a href="all.php" target="_self" title="레스토랑소개">메뉴</a>
											<a href="all.php" target="_self" title="레스토랑소개" class="img"><img src="img/bot.png"/></a>	
									</td>
								</tr>	
								<tr>
									<td class="bottom">
										<a href="all.php"><div class="img">
											<img src="img/f01.jpg"/>
											<p>메뉴명</p>
										<p class="won">10,000원</p></a>
										</div>
										<a href="all.php"><div class="img">
											<img src="img/f02.jpg"/>
											<p>메뉴명</p>
										<p class="won">10,000원</p></a>
										</div>
										<a href="all.php"><div class="img">
											<img src="img/f03.jpg"/>
											<p>메뉴명</p>
										<p class="won">10,000원</p></a>
										</div>
										<a href="all.php"><div class="img">
											<img src="img/f04.jpg"/>
											<p>메뉴명</p>
										<p class="won">10,000원</p></a>
										</div>
										<a href="all.php"><div class="img">
											<img src="img/f05.jpg"/>
											<p>메뉴명</p>
										<p class="won">10,000원</p></a>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<div class="con5">
							<table>
								<tr>
									<th>
									<p>예약 상담 및 문의</p>
									</th>
								</tr>
								<tr>
									<td>
										<p>010-1111-0000</p>
										<hr/>
										<p class="font"><span>영업시간</span> 09:00 ~ 22:00<p>
									</td>
								</tr>
							</table>
						</div>
						<div class="con6">
						<a href="./map.php" target="_self">
						<p>오시는길</p>
						</a>
						</div>
						<br/>
						<div class="con6">
						<a href="./faq.php" target="_self">
						<p>FAQ</p>
						</a>
						</div>
						<br/>
					</div>
				</div>
			</div>
	</section>
	<footer>
	<?php include "footer.php"; ?>
	</footer>
	</body>
</html>