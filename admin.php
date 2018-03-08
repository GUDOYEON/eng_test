<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=no minimum-scale=1/>
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> -->
	<style>
	.clearfix{
		overflow: auto;
	}
</style>
<title>모바일인터넷과 영단어</title>
</head>
<body>
	<div data-role="page" id="page_index" data-theme="b">
		<div data-role="header" id="clearfix">
			<h1 id="date"></h1>
			<button type="button" onclick="location.href='index.html'">메인페이지</button>
		</div>
		<div data-role="content">
			<h1>관리자 페이지</h1>
			<h3>대림대학교 모바일인터넷과</h3>
			<div align="center">
				<img src="src/dept_logo.png" alt="neon-burger" height="50%" width="50%">
			</div>
			<?
			session_start();
			if(!isset($_SESSION['student_code'])){
				header('Location: ./login.html');
			}
			echo "홈(관리자로그인 성공)";
			echo "<a href=logout.php>로그아웃</a>";
			?>

		</div>
	</div>

</body>
<script>
	var date = new Date();

	var year = date.getFullYear();
	var month = date.getMonth()+1;
	var day = date.getDate();
	if (("" + month).length == 1) { month = "0" + month; }
	if (("" + day).length   == 1) { day   = "0" + day;   }

	document.getElementById("date").innerHTML = year + month + day;

</script>
</html>