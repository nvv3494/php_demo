<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>	

	<?php
	/*
		echo 'welcome to BH tech';
		echo '<br>';
		echo 'ABCXYZ';
		$a = "Asus";
		//echo $a;
		//echo 'My computer is '.$a ;
		echo "My computer is $a";
		$txt = "W3Schools.com";
		echo "<br>I love $txt!";
		function device($x,$y){
			echo $x / $y;
		}
		device(4,13820982103);
		*/
	/*
		$a = 22;
		$b = 33;
		$c = 44;
		$d = 55;
		//echo $GLOBALS['c'];
		function test_static(){
		static $x = 55;
		echo $x;
		$x+=9;
		}
		test_static();
		test_static();
		test_static();
		*/
	/*
	$x = array('1' => 3,'2' => 4,'3' => 36 );
	var_dump($x);
	*/

	/*
	class Student{
		function Student(){
			$this->name = "Vũ";
		}
	}

	$student = new Student();
	echo $student->name;
	var_dump($student);
	*/
	/*
	$tex = "php is very easy";
	echo str_word_count($tex);
	echo "<br>";
	echo strrev($tex);
	echo "<br>";
	echo strrpos($tex, "ee");
	*/
/*
	define("PI", 3.14159,false);
	echo pi;
	$x = 5;
	$y = 4;
	echo $x**$y;
	echo "<br>";
	echo $x++;
	echo $x;
	*/
	/*
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo "<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SERVER_ADDR'];
	*/
	/*	
	?>
	<form action="" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" name = "name" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$name = $_REQUEST['name'];
			if(empty($name)){
				echo 'Empty';
			}
			else
				echo $name;
		}
	*/

	?>
	<form action="welcome.php" method="GET">
		Name: <input type="text" name="name">
	E-mail: <input type="text" name="email">
	Website: <input type="text" name="website">
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	</form>
</body>
</html>