<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
	<?php
		session_start();
		$_SESSION['name'] = "Nguyễn Văn Vũ";
		$_SESSION['tuoi'] = 23;
		echo $_SESSION["name"] . ", ".$_SESSION["tuoi"]." tuổi";
		session_unset();
		echo $_SESSION["name"] . ", ".$_SESSION["tuoi"]." tuổi";
	?>
</body>
</html>