<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>예약하기 > 내용보기</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/reservation.css">
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
   	<div id="reservation_box">
	    <h3 class="title">
			예약하기 > 내용보기
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "sukyu0919", "SKlim478359!", "sukyu0919");
	$sql = "select * from reservation where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$subject    = $row["subject"]; // 인원 / 메뉴
	$content    = $row["content"]; // 추가주문사항
	$date    = $row["date"]; //예약날짜
	$time    = $row["time"]; //예약시간



	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update reservation set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><b>인원 / 메뉴 :</b> <?=$subject?></span>
				<span class="col2"><b>예약자 : <?=$name?>&nbsp;&nbsp; | &nbsp;<b>예약일자 : <?=$date?>&nbsp; | <b>예약시간 :<?=$time?></span>
			</li>
			<li>
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		<a href='download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
			           	}
				?>
				<?=$content?>
			</li>		
	    </ul>
	    <ul class="buttons">
				<li><button onclick="location.href='reservation_list.php?page=<?=$page?>'">목록</button></li>
				<!---
				<li><button onclick="location.href='reservation_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
				<li><button onclick="location.href='reservation_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
				취약점이라뺐음...--->
				<li><button onclick="location.href='reservation_form.php'">글쓰기</button></li>
		</ul>
	</div> <!-- reservation_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
