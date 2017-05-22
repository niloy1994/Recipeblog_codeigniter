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
	<h1 align="center">Add Recipe</h1>
	<hr>
	<br/>
	<h3 align="center"><a href="/recipe_ci/user">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	
	
	<br/>
	<form method="post" align="center">
		Name: <input type="text" name="name" value="<?php echo set_value('name'); ?>" size="40"/>
		<br/>
		<br/>
		Category: <select name="cat">
					<?php foreach ($cats as $cat){ ?>
						<option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
					<?php } ?>
					</select>
		<br/>
		<br/>
		Type: <input type="radio" name="type" value="regular" checked> regular
              <input type="radio" name="type" value="special"> special
		<br/>
		<br/>
		Description:<br/>
		<textarea name="description" rows="4" cols="50"></textarea>
		<br/>
		<br/>
		Difficulty:   <select name="difficulty" >
            <<?php foreach ($diff as $difficulty){ ?>
                <option value="<?php echo $difficulty['id']; ?>"><?php echo $difficulty['type']; ?></option>
            <?php } ?>

        </select>
		<br/>
		<br/>
		Preparation time: <input type="text" name="preparation_time" value="<?php echo set_value('preparation_time'); ?>"/>
		<br/>
		<br/>
        Cooking time: <input type="text" name="cooking_time" value="<?php echo set_value('cooking_time'); ?>" /></div>
		<br/>
		<br/>
		Serves: <input type="text" name="serves" value="<?php echo set_value('serves'); ?>" /></div>
		<br/>
		<br/>
		Ingredients:<br/>
		<textarea name="ingredients" value="<?php echo set_value('ingredients'); ?>" rows="4" cols="50"></textarea>
		<br/>
		<br/>
		Procedure:<br/>
		<textarea name="procedures" value="<?php echo set_value('procedures'); ?>" rows="4" cols="50"></textarea>
		<br/>
		<br/>
		
		
		<input type="submit" name="buttonSubmit" value="Save" />
	</form>
	<br/>
	<label align="center"><?php echo $message; ?></label>
	
</body>
</html>