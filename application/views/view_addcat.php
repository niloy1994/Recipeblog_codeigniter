<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
	label{
		color: red;
	}
</style>
</head>
<body>
	<h1 align="center">Add Category</h1>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<hr>
	<br>
	<br/>
	<form method="post" align="center">
		NAME: <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
		<br/>
		<br/>
		<input type="submit" name="buttonSubmit" value="Save" />
	</form>
	<br/>
	<label align="center"><?php echo $message; ?></label>
	
</body>
</html>