<?php

	require_once("../../config.php");
	
//start server session to store data
//in every file you want to access session you have to reqiore function
	session_start();

	function login ($user, $pass){
		
		//hash the pass
		$pass = hash("sha512",$pass);
		
		$mysql = new mysqli("localhost", $GLOBALS["db_username"], $GLOBALS["db_password"], "webpr2016_nicole");
		$stmt = $mysql->prepare("SELECT id FROM users WHERE username=? and password=?");
		
		echo $mysql->error;
		
		$stmt->bind_param("ss", $user, $pass);
		$stmt->bind_result($id);
		$stmt->execute();
		
		//get the data
		if($stmt->fetch()){
			echo "user with id ".$id." logged in!";
			
				//create session variables
				//redirect user
				$_SESSION["user_id"] = $id;
				$_SESSION["username"] = $user;
				
				header("Location: restrict.php");
			
		}else{
			//wrong username or/and pass
			echo "wrong credentional";
		}
	}
		
	function signup ($user, $pass){
		
	
		
		
		//hash the password
		$pass = hash("sha512",$pass);
		
		
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