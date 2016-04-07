<?php
	require_once("functions.php");

	//login=sth is in the url
	if(isset($_GET["login"])){
		
		//login
			echo "logging in ...";
	
	
	
	//signup button clicked
	}else if(isset($_GET["signup"])){
		
		//signup
		echo "signing up ...";
		if(!empty($_GET["username"]) && !empty($_GET["password"])){
			
			//save to db
			signup($_GET["username"], $_GET["password"]);
			
		}else{
			
			echo "both fields are required!";
		}
		
	}

?>





<h2>Log in</h2>

<form>

	<input type="text" placeholder="Username" name="username">
	<input type="password" placeholder="Password" name="password">
	
	<input type="submit" name="login" value="Log in">
	
</form>	

<h2>Sign up</h2>

<form>

	<input type="text" placeholder="Username" name="username">
	<input type="password" placeholder="Password" name="password">
	
	<input type="submit" name="signup" value="Sign up">
	
</form>	