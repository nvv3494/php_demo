<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<?php
		$name_cookie = "user";
		$value_cookie = "Đỗ Nam Trung";
		setcookie($name_cookie,$value_cookie,time() + 10,"/");
		if(!isset($_COOKIE[$name_cookie])){
			echo "không tồn tại cookie";
		}
		else
		{
			echo $name_cookie. "exist, value is ". $_COOKIE[$name_cookie];
		}

		if(count($_COOKIE) > 0){
			echo "Tồn tại cookie";
		}
		else
		{
			echo "Không tồn tại cookie";
		}
	?>
</body>
</html>