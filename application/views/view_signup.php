<html>
	<head>
		<title>Signup</title>
	<style type="text/css">
	label{
		color: red;
	}
    </style>
	</head>
	<body>
	<h1 align="center">Sign Up</h1>
	<br/>
	<br/>
	<hr>
	<br/>
	<br/>
	<form method="post" align="center">
		
			Firstname:<input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>"><br/><br/>
			Lastname:<input type="text" name="lastname" value="<?php echo set_value('lastname'); ?>"><br/><br/>
			Email:<input type="email" name="email" value="<?php echo set_value('email'); ?>"><br/><br/>
			Password:<input type="password" name="password"><br/><br/>
			User type:<input type="text" name="u_type" value="user" readonly ><br/><br/>
			<input type="submit" name="buttonSubmit" value="Submit">
	</form>
			<label><?php echo $message; ?></label>
		
	</body>
</html>