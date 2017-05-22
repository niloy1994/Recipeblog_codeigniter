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
	<h1 align="center">Delete Recipe</h1>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<form method="post" align="center">
		<table border="1" align="center">
			<tr>
				<td>ID</td>
				<td><?php echo $recipe['id']; ?></td>
			</tr>
			<tr>
				<td>NAME</td>
				<td><?php echo $recipe['name']; ?></td>
			</tr>
			
			<tr>
				<td colspan="2"><label>This cannot be undone. Are you sure?</label></td>
			</tr>
			<tr>
				<td><a href="/recipe_ci/recipes">&lt;Back</a></td>
				<td><input type="submit" name="buttonSubmit" value="Confirm" /></td>
			</tr>
		</table>
		<input type="hidden" name="rid" value="<?php echo $recipe['id'] ?>">
	</form>
	<br/>
	
</body>
</html>