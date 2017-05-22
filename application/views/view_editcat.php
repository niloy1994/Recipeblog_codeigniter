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
	<form method="post" align="center">
	<h1>Edit Category</h1>
	<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
		NAME: <input type="text" name="name" value="<?php echo $cat['name'] ?>"/>
		<br/>
		<br/>
		<input type="submit" name="buttonSubmit" value="Save" />
		<input type="hidden" name="cat_id" value="<?php echo $cat['id'] ?>">
	</form>
	<br/>
	<label align="center"><?php echo $message; ?></label>
	
</body>
</html>