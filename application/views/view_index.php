<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

	
	<form method="post" align="center">
	<h1>Best cheff</h1>
	<hr>
	
	<br/>
	<h1>Login Here</h1>
	<hr>
	<br/>
		Email: <input type="text" name="email" value="<?php echo $email; ?>"/><br/></br>
		
	    Password:<input type="password" name="password"/><br/><br/>
		<span style="color:red"><?php echo $message; ?></span><hr/>
	<input type="submit"name="buttonSubmit"value="Login"/>
	<br/>
	<p>Not a member? Click <a href="/recipe_ci/login/sign_up">here</a> to Join our community.</p>
	
	</form>
</body>
</html>