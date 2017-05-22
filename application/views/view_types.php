<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1 align="center" >Type List</h1>
<hr>
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
<br/>

<hr>
<br/>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Type</th>

    </tr>
    <?php
    foreach($types as $type){
        ?>
        <tr>
            <td><?php echo $type['id']; ?></td>
            <td><a href="/recipe_ci/recipes/type_recipes/<?php echo $type['id']; ?>"><?php echo $type['type']; ?></a></td>


        </tr>
    <?php } ?>
</table>
</body>
</html>


