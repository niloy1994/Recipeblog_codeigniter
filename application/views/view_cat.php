<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1 align="center" >Category List</h1>
	<hr>
	<br/>
	<h3 align="center"><a href="/recipe_ci/user">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	<br/>
	<table border="1" align="center">
		<tr>
			
			<th>NAME</th>
			
		</tr>
	<?php
		foreach($cats as $cat){
	?>
		<tr>
			
			<td><a href="/recipe_ci/recipes/cat_recipes/<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></a></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>


