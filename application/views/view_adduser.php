<html>
	<head>
		<title>Add User</title>
	<style type="text/css">
	label{
		color: red;
	}
    </style>
	</head>
	<body>
	<h1 align="center">Add User</h1>
	<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	<form method="post" align="center">
		
			Firstname:<input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>"><br/><br/>
			Lastname:<input type="text" name="lastname" value="<?php echo set_value('lastname'); ?>"><br/><br/>
			Email:<input type="email" name="email" value="<?php echo set_value('email'); ?>"><br/><br/>
			Password:<input type="password" name="password"><br/><br/>
			User type:<select name="u_type" >
						   <option>admin</option>
						   <option>user</option>
						   

					 </select>
					 <br/>
					 <br/>
			<input type="submit" name="buttonSubmit" value="Submit">
	</form>
			<label><?php echo $message; ?></label>
			<hr>
		
	</body>
</html>










