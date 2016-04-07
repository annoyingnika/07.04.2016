<?php
	require_once("functions.php");

	//login=sth is in the url
	if(isset($_POST["login"])){
		
		//login
			echo "logging in ...";
			
			//NOT EMPTY
		if(!empty($_POST["username"]) && !empty($_POST["password"])){
			
			//save to db
			login($_POST["username"], $_POST["password"]);
			
		}else{
			
			echo "both fields are required!";
		}
	
	

	//signup button clicked
	}else if(isset($_POST["signup"])){
		
		//signup
		echo "signing up ...";
		
		//NOT EMPTY
		if(!empty($_POST["username"]) && !empty($_POST["password"])){
			
			//save to db
			signup($_POST["username"], $_POST["password"]);
			
		}else{
			
			echo "both fields are required!";
		}
		
	}

?>





<h2>Log in</h2>
<form method="POST">

	<input type="text" placeholder="Username" name="username">
	<input type="password" placeholder="Password" name="password">
	
	<input type="submit" name="login" value="Log in">
	
</form>	

<h2>Sign up</h2>
<form method="POST">

	<input type="text" placeholder="Username" name="username">
	<input type="password" placeholder="Password" name="password">
	
	<input type="submit" name="signup" value="Sign up">
	
</form>	