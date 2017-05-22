<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>

<h1 align="center">Welcome User, <?php echo $this->session->userdata['user']['username']; ?></h1>
<h3 align="center"><a href="/recipe_ci/user/profile">Profile</a><br/></h3>
<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
<hr>
<br/>
	<h3 align="center"><a href="/recipe_ci/categories/cat">View Categories</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/recipes/user_recipes">View Recipes</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/recipes/add">Submit Recipe</a><br/></h3>
	<hr>
<h1 align="center">Recipe types</h1>
<h3 align="center"><a href="/recipe_ci/types">View types</a><br/></h3>


<hr>

	
	<h1 align="center">Recipe Of The Day</h1>
	<table border="1" align="center">
		<tr>
			<th>NAME</th>
			<th>Type</th>
			<th>Description</th>

			<th>Preparation Time</th>
			<th>Cooking Time</th>
			<th>Ingredients</th>
			<th>Procedures</th>
			<th>Serves</th>
            <th colspan="2">Action</th>
			
		</tr>
	<?php
		foreach($recipe_of_the_day as $best_recipe){
	?>
		<tr>
			<td><?php echo $best_recipe['name']; ?></td>
			<td><?php echo $best_recipe['type']; ?></td>
			<td><?php echo $best_recipe['description']; ?></td>

			<td><?php echo $best_recipe['preparation_time']; ?></td>
			<td><?php echo $best_recipe['cooking_time']; ?></td>
			
			<td><?php echo $best_recipe['ingredients']; ?></td>
			<td><?php echo $best_recipe['procedures']; ?></td>
			<td><?php echo $best_recipe['serves']; ?></td>
            <?php
            if($best_recipe['uploaded_by']==$this->session->userdata['user']['id']){?>
                <td><a href="/recipe_ci/recipes/edit/<?php echo $best_recipe['id']; ?>">Edit</a></td>
                <td><a href="/recipe_ci/recipes/delete/<?php echo $best_recipe['id']; ?>">Delete</a></td>
            <?php } ?>
	
			
		</tr>
		<?php } ?>
	</table>
	<br/>
<hr>

<h1 align="center">User Of The Day</h1>
<table border="1" align="center">
    <tr>
        <th>NAME</th>


    </tr>
    <?php
    foreach($user_of_the_day as $best_user){
        ?>
        <tr>
            <td><?php echo $best_user['firstname']; ?> <?php echo $best_user['lastname']; ?></td>



        </tr>
    <?php } ?>
</table>
<br/>
<hr>

<h1 align="center">Latest Recipes</h1>
<table border="1" align="center">
    <tr>
        <th>NAME</th>
        <th>Type</th>
        <th>Description</th>

        <th>Preparation Time</th>
        <th>Cooking Time</th>
        <th>Ingredients</th>
        <th>Procedures</th>
        <th>Serves</th>
        <th colspan="2">Action</th>

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
            <?php
            if($recipe['uploaded_by']==$this->session->userdata['user']['id']){?>
                <td><a href="/recipe_ci/recipes/edit/<?php echo $recipe['id']; ?>">Edit</a></td>
                <td><a href="/recipe_ci/recipes/delete/<?php echo $recipe['id']; ?>">Delete</a></td>
            <?php } ?>


        </tr>
    <?php } ?>
</table>
<br/>
<hr>
	<h3 align="center"><a href="/recipe_ci/recipes/user_recipes">View More</a><br/></h3>
	<hr>
	
	<h1 align="center">Our Members</h1>
	<table border="1" align="center">
		<tr>
			<th>NAME</th>
			
			
		</tr>
	<?php
		foreach($users as $user){
	?>
		<tr>
			<td><?php echo $user['firstname']; ?></td>
			
	
			
		</tr>
		<?php } ?>
	</table>
<br>
<hr>
<h1 align="center">Recipe Blog In Numbers <br/></h1>
<table border="1" align="center">
    <tr>
        <th>Total Recipes</th>
        <th>Total Members</th>


    </tr>

        <tr>
            <td><?php echo $total_recipes[0]['num_of_recipes']; ?></td>
            <td><?php echo $total_users[0]['num_of_users']; ?></td>



        </tr>

</table>
	
	
</body>
</html>