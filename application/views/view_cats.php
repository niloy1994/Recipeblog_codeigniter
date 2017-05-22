<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center" >Category List</h1>
	<hr>
	<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	<br/>
	<h3 align="center"><a href="/recipe_ci/categories/add">Add New</a></h3>
	<hr>
	<br/>
	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th colspan="2">ACTIONS</th>
		</tr>
	<?php
		foreach($cats as $cat){
	?>
		<tr>
			<td><?php echo $cat['id']; ?></td>
			<td><a href="/recipe_ci/recipes/cat_recipes/<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></a></td>
			
			<td><a href="/recipe_ci/categories/edit/<?php echo $cat['id']; ?>">Edit</a></td>
			<td><a href="/recipe_ci/categories/delete/<?php echo $cat['id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


