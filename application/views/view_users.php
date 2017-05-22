<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

<h1 align="center">User List</h1>
<hr>
<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
<br/>
	<table border="1" align="center">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>User Type</th>
			<th>Email</th>
			<th>Password</th>
			<th colspan="2">ACTIONS</th>
			
			
		</tr>
	<?php
		foreach($users as $user){
	?>
		<tr>
			<td><?php echo $user['firstname']; ?></td>
			<td><?php echo $user['lastname']; ?></td>
			<td><?php echo $user['type']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><a href="/recipe_ci/user/edit/<?php echo $user['id']; ?>">Edit</a></td>
			<td><a href="/recipe_ci/user/delete/<?php echo $user['id']; ?>">Delete</a></td>
			
	
			
		</tr>
		<?php } ?>
	</table>
	
	</body>
</html>