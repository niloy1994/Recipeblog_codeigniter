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
	<h1 align="center">Edit Recipe</h1>
	<br/>
        <?php
        if($this->session->userdata['user']['user_type']=="admin"){?>
            <h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>

        <?php }
        else {?>
        <h3 align="center"><a href="/recipe_ci/user">Back To Home</a><br/></h3>
        <?php } ?>

	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	    Name: <input type="text" name="name" value="<?php echo $recipe['name']; ?>" size="40"/>
		<br/>
		<br/>
		Category: <select name="cat">
					<?php foreach ($cats as $cat){ 
					if($recipe['category_id']==$cat['id']){?>
						<option value="<?php echo $cat['id']; ?>" selected><?php echo $cat['name']; ?></option>
					<?php }
					else{?>
					    <option value="<?php echo $cat['id']; ?>" ><?php echo $cat['name']; ?></option>
					<?php }
					 } ?>
					</select>
		<br/>
		<br/>
		Type: <?php foreach ($type as $type){ 
					          if($type==$recipe['type']){?>
		
		                            <input type="radio" name="type" value="<?php echo $type; ?>" checked> <?php echo $type; 
			                  }
					          else{?>
                                    <input type="radio" name="type" value="<?php echo $type; ?>"> <?php echo $type; 
							  }
		                    }?>
		<br/>
		<br/>
		Description:<br/>
		<textarea name="description" rows="4" cols="50" ><?php echo $recipe['description']; ?></textarea>
		<br/>
		<br/>
		Difficulty:  <select name="difficulty" >
		                <?php foreach ($difficulty as $difficulty){ 
					          if($difficulty==$recipe['difficulty']){?>
						   <option value="<?php echo $difficulty; ?>" selected><?php echo $difficulty; ?></option>
					<?php }
					else{?>
					    <option value="<?php echo $difficulty; ?>" ><?php echo $difficulty; ?></option>
					<?php }
					 } ?>

					 </select>
		<br/>
		<br/>
		Preparation time: <input type="text" name="preparation_time" value="<?php echo $recipe['preparation_time']; ?>"/>
		<br/>
		<br/>
        Cooking time: <input type="text" name="cooking_time" value="<?php echo $recipe['cooking_time']; ?>" /></div>
		<br/>
		<br/>
		Serves: <input type="text" name="serves" value="<?php echo $recipe['serves']; ?>" /></div>
		<br/>
		<br/>
		Ingredients:<br/>
		<textarea name="ingredients"  rows="4" cols="50"><?php echo $recipe['ingredients']; ?></textarea>
		<br/>
		<br/>
		Procedure:<br/>
		<textarea name="procedures"  rows="4" cols="50"><?php echo $recipe['procedures']; ?></textarea>
		<br/>
		<br/>
		
		<input type="submit" name="buttonSubmit" value="Save" />
		<input type="hidden" name="recipe_id" value="<?php echo $recipe['id'] ?>">
	</form>
	<br/>
	<label><?php echo $message; ?></label>
	
</body>
</html>