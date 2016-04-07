<?php

	require_once("../../config.php");

	function signup ($user, $pass){
		
		//GLOBALS-access autside variable in function
		$mysql = new mysqli("localhost", $GLOBALS["db_username"], $GLOBALS["db_password"], "webpr2016_nicole");
		
		$stmt = $mysql->prepare("INSERT INTO users(username, password) VALUES(?,?)");
		
		//echo error
		echo $mysql->error;
		
		// for each question mark its type with one letter
		$stmt->bind_param("ss", $user, $pass);
		
		//save
		if($stmt->execute()){
			echo "user saved sucessfully!";
		}else{
			echo $stmt->error;
		}
	}




	/*$name = "Nicole";
	
	hello($name, "thursday", 7);
	hello("Toomas", "esmaspaev", 1);
	
	function hello($recieved_name, $day_of_the_week, $day){
		echo "hello ".$recieved_name."!";
		echo "<br>";
		echo "Today is ".$day_of_the_week." ".$day;
		echo "<br>";
	}*/
	
?>