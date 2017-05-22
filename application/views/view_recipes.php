<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center">Recipe List</h1>
	<hr>
	<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	<h3 align="center"><a href="/recipe_ci/recipes/add">Add New</a></h3>
	<hr>
	<table border="1">
		<tr>
			<th>NAME</th>
			<th>Type</th>
			<th>Description</th>
			<th>Preparation Time</th>
			<th>Cooking Time</th>
			<th>Ingredients</th>
			<th>Procedures</th>
			<th>Serves</th>
			<th colspan="2">ACTIONS</th>
		</tr>
	<?php
		foreach($recipes as $recipe){
	?>
		<tr>
			<td><?php echo $recipe['name']; ?></td>
			<td><?php echo $recipe['type']; ?></td>
			<td><?php echo $recipe['description']; ?></td>
			<td><?php echo $recipe['preparation_time']; ?></td>
			<td><?php echo $recipe['cooking_time']; ?></td>
			
			<td><?php echo $recipe['ingredients']; ?></td>
			<td><?php echo $recipe['procedures']; ?></td>
			<td><?php echo $recipe['serves']; ?></td>
	
			<td><a href="/recipe_ci/recipes/edit/<?php echo $recipe['id']; ?>">Edit</a></td>
			<td><a href="/recipe_ci/recipes/delete/<?php echo $recipe['id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


