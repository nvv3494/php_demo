<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";
	/*
	$conn = new mysqli($server_name,$username,$password);
	if($conn->connect_error){
		die("Lỗi kết nối". $conn->connect_error);
	}
	echo "Kết nối thành công";
	$sql = "CREATE DATABASE myDB";
	if($conn->query($sql) == true){
		echo "Tạo thành công CSDl";
	}
	else
	{
		echo "Lỗi tạo cơ sở dữ liệu";
	}
	$conn->close();
	*/
	$db_name = "myDB";

	$conn = new mysqli($server_name,$username,$password,$db_name);
	if($conn->connect_error){
		die("Lỗi kết nối". $conn->connect_error);
	}
	/* 
	tạo bảng
	$sql = "CREATE TABLE MyGuest(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	reg_date TIMESTAMP
	)";
	if($conn ->query($sql) == true){
		echo "Tạo bảng thành công";
	}
	else{
		echo "Tạo bảng thất bại";
	}
	*/
	/*
	$conn->set_charset("UTF8");
	$sql = "INSERT INTO MyGuest(firstname,lastname,email) values('Nguyễn','Văn Vũ','abc@gmail.com')";
	if(mysqli_query($conn,$sql)){
		echo "Thêm thành công";
	}
	else
	{
		echo "Thêm thất bại";
	}
	*/
	$sql = "SELECT * FROM MyGuest";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo $row["id"]. ", ".$row["firstname"]." ".$row["lastname"].", ".$row["email"]."<br>";
		}
	}
?>