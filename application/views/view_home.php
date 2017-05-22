<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
<h1 align="center">Welcome Admin, <?php echo $this->session->userdata['user']['username']; ?></h1>
<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
<hr>
<h1 align="center">Category</h1>
	<h3 align="center"><a href="/recipe_ci/categories">View Categories</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/categories/add">Add Category</a><br/></h3>
	<hr>
<h1 align="center">Recipe types</h1>
<h3 align="center"><a href="/recipe_ci/types">View types</a><br/></h3>


<hr>
	<h1 align="center">Recipes</h1>
	
	<h3 align="center"><a href="/recipe_ci/recipes">View Recipes</a><br/></h3>
<h3 align="center"><a href="/recipe_ci/recipes/best_recipe">Recipe Of The Day</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/recipes/add">Add Recipe</a><br/></h3>
	
	<hr>
	<h1 align="center">User</h1>
	<h3 align="center"><a href="/recipe_ci/user/users">Users</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/user/best_user">User Of The Day</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/user/add">Add User</a><br/></h3>
	
	<hr>
</body>
</html>