<?php
	$id = $_POST["id"];
	$pass = $_POST["pass"];

	$con = mysqli_connect("localhost", "sukyu0919", "SKlim478359!", "sukyu0919");
	$sql = "select * from members where id = '$id'";
	$result = mysqli_query($con, $sql);

	$num_match = mysqli_num_rows($result);

	if (!$num_match) {
		echo("
			<script>
				window.alert('등록되지 않은 아이디입니다')
				history.go(-1)
			</script>
			");
	} else {
		$row = mysqli_fetch_array($result);
		$db_pass = $row["pass"];

		mysqli_close($con);

		if ($pass != $db_pass) {
			echo("
				<script>
					window.alert('비밀번호가 틀립니다');
					history.go(-1)
				</script>
			");
			exit;
		} else {
			@session_start();
			$_SESSION["userid"] = $row["id"];
			$_SESSION["username"] = $row["name"];
			$_SESSION["userlevel"] = $row["level"];
			$_SESSION["userpoint"] = $row["point"];

			echo ("
			<script>
				location.href = 'index.php';
			</script>
				");

			$con = mysqli_connect("localhost", "sukyu0919", "SKlim478359!", "sukyu0919");
			$update_sql = "update members set point = point + 100 where id = '$id'";


			$result = mysqli_query($con, $update_sql);
		}
	}
if(isset($_POST['g-recaptcha-response'])){
	$captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha) {
	echo '등록폼에 리캡챠를 확인하세요.';
}

$secretKey = "6LeC6bkUAAAAABke4MzmVwygzAzXgrep-XCr5m9s";
$ip = $_SERVER['REMOTE_ADDR'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);

if(intval($responseKeys["success"]) !== 1) {
	echo '검증을 통과하지 못했습니다.';
} else {
	echo '검증을 통과 했습니다.';
}

?>