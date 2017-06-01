<?php
/*
	function check($number){
		if($number > 5)
		{
			throw new Exception("phải lớn hơn 5");
		}
		return true;
	}
	try {
		check(1);
		echo "OK";
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	*/
	class MyException extends Exception{
		public function errorMessage(){
			$errMsg = "Lỗi ở dòng ".$this->getLine()." in ".$this->getFile()." <b> ".$this->getMessage()." </b> is not a valid Email address";
			return $errMsg;
		}
	}
	$e = "kvjsdvds@gmail.com";
	try {
		if(filter_var($e,FILTER_VALIDATE_EMAIL) == false){
			throw new MyException($e);
		}
		else{
			echo "email hợp lệ";
		}
	} catch (MyException $e) {
		echo $e->errorMessage();
	}
?>