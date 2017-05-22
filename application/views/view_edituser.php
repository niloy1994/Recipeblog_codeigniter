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
	<h1 align="center">Edit user</h1>
	<br/>
	<h3 align="center"><a href="/recipe_ci/admin">Back To Home</a><br/></h3>
	<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
	<hr>
	<br>
	    First Name: <input type="text" name="firstname" value="<?php echo $user['firstname']; ?>" size="40"/>
		<br/>
		<br/>
		
		Last Name: <input type="text" name="lastname" value="<?php echo $user['lastname']; ?>" size="40"/>
		<br/>
		<br/>
		
		Type: <select name="type" >
		                <?php foreach ($type as $type){ 
					          if($type==$user['type']){?>
						   <option value="<?php echo $type; ?>" selected><?php echo $type; ?></option>
					<?php }
					else{?>
					    <option value="<?php echo $type; ?>" ><?php echo $type; ?></option>
					<?php }
					 } ?>
					 </select>
		<br/>
		<br/>
		
		Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"/>
		<br/>
		<br/>
        Password: <input type="text" name="password" value="<?php echo $user['password']; ?>" /></div>
		<br/>
		<br/>
		
		
		<input type="submit" name="buttonSubmit" value="Save" />
		<input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
	</form>
	<br/>
	<label><?php echo $message; ?></label>
	
</body>
</html>