<?php
    @session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if ( !$userid )
    {
        echo("
                    <script>
                    alert('로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }
	
	/*
	예약일자 : date / time

	인원 / 메뉴 : subject
	추가 주문사항 : content
	*/
	$userid = $_SESSION["userid"];
	$username = $_SESSION["username"];
	$subject = $_POST["subject"]; // 인원 /  메뉴
    $content = $_POST["content"]; // 추가 주문사항
	$date = $_POST["date"]; // 예약일자 날짜
	$time = $_POST["time"]; // 예약일자 시간
   

	
	$con = mysqli_connect("localhost", "sukyu0919", "SKlim478359!", "sukyu0919");
	

	$sql = "insert into reservation (id, name, subject, content, date, time) ";
	$sql .= "values ('$userid', '$username', '$subject', '$content', '$date' , '$time')";
	
	mysqli_query($con, $sql);

	

	mysqli_close($con);

	echo "
	   <script>
	    location.href = 'reservation_list.php';
	   </script>
	";
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

  
