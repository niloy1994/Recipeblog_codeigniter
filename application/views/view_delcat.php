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
	<h1 align="center">Delete Category</h1>
	<h3 align="center" align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<form method="post" align="center">
		<table border="1" align="center">
			<tr>
				<td>ID</td>
				<td><?php echo $cat['id']; ?></td>
			</tr>
			<tr>
				<td>NAME</td>
				<td><?php echo $cat['name']; ?></td>
			</tr>
			<tr>
				<td colspan="2"><label>This cannot be undone. Are you sure?</label></td>
			</tr>
			<tr>
				<td><a href="/recipe_ci/categories">&lt;Back</a></td>
				<td><input type="submit" name="buttonSubmit" value="Confirm" /></td>
			</tr>
		</table>
		<input type="hidden" name="cat_id" value="<?php echo $cat['id'] ?>">
	</form>
	<br/>
	
</body>
</html>