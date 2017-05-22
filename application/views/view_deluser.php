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
	<h1 align="center">Delete User</h1>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<form method="post" align="center">
		<table border="1" align="center">
			<tr>
				<td>ID</td>
				<td><?php echo $user['id']; ?></td>
			</tr>
			<tr>
				<td>NAME</td>
				<td><?php echo $user['firstname']; ?></td>
			</tr>
			
			
			<tr>
				<td colspan="2"><label>This cannot be undone. Are you sure?</label></td>
			</tr>
			<tr>
				<td><a href="/recipe_ci/user/users">&lt;Back</a></td>
				<td><input type="submit" name="buttonSubmit" value="Confirm" /></td>
			</tr>
		</table>
		<input type="hidden" name="uid" value="<?php echo $user['id'] ?>">
	</form>
	<br/>
	
</body>
</html>