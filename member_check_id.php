<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이용약관</title>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	</head>
<body>
<h3>아이디 중복체크<h3>
<p>
<?php
	$id = $_GET["id"];
	if (!$id) {
		echo("<li>아이디를 입력해 주세요!</li>");
	} else {
		$con = mysqli_connect("localhost", "sukyu0919", "SKlim478359!", "sukyu0919");
		$sql = "select * from members where id = '$id'";
		$result = mysqli_query($con, $sql);
		$num_record = mysqli_num_rows($result);

		if ($num_record) {
			echo "<li>".$id." 아이디는 중복됩니다.</li>";
			echo "<li>다른 아이디를 이용해 주세요.</li>";
		} else {
			echo "<li>".$id."아이디는 사용 가능합니다.</li>";
		}
		mysqli_close($con);
	}
?>
</p>
<div id="close">
	<img src="./img/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>

