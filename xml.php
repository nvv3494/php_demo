<?php
/*
	$myXML = "<?xml version = '1.0' encoding = 'UTF-8'?>
		<student>
			<name>ABCXYZ</name>
			<school>Havard</school>
		</student>
	";
	$xml = simplexml_load_string($myXML);
	print_r($xml);
	*/
	$xml = simplexml_load_file("note.xml") or die("Error: can't create object");
	foreach ($xml as $key => $value) {
		# code...
		echo $value."<br>";
	}
?>