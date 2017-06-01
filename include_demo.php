<!DOCTYPE html>
<html>
<head>
	<title>Include Demo</title>
</head>
<body>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
	<?php
		include "footer.php"
	?>
	<?php
	/*
		//echo readfile("content.txt");
		$file = fopen("content.txt", "r") or die("unable to open file");
		echo fread($file, filesize("content.txt"));
		//echo fgets($file);
		fclose($file);
		*/
	$myfile = fopen("newfile.txt", "w") or die("Không thể tạo file mới");
	$txt = "elephants";
	for ($i=0; $i < 100 ; $i++) { 
		# code...
		fwrite($myfile, $txt. $i*$i);
	}
	fclose($myfile);
	echo "ghi xong";
	?>
</body>
</html>