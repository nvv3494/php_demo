<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD FILE</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		Chọn ảnh
		<input type="file" name="file_upload">
		<input type="submit" name="upload">
	</form>
	<?php
		if(isset($_POST["upload"])){
			if(isset($_FILES["file_upload"])){
				if($_FILES["file_upload"]["error"] > 0)
				{
					echo "File upload bị lỗi";
				}
				else
				{
					move_uploaded_file($_FILES["file_upload"]["tmp_name"], "./upload/".$_FILES["file_upload"]["name"]);
					echo "File đã được upload";
				}
			}
		}
	?>
</body>
</html>