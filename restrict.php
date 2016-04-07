<?php
	//to deal with session
	require_once("functions.php");
	
	//restriction - logged in
	if(!isset($_SESSION["user_id"])){
		//redirect not user to login page
		header("Location:login.php");
	}
	
	//?logout is in the url
	if(isset($_GET["logout"])){
		//delete the session
		session_destroy();
		
		header("Location: login.php");
		
	}
?>


<a href="?logout=1">Log out</a>