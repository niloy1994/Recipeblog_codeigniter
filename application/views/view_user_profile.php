<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1 align="center">Profile Of <?php echo $this->session->userdata['user']['username']; ?></h1>
<hr>
<br/>


<br/>
<h3 align="center"><a href="/recipe_ci/user">Back To Home</a><br/></h3>
<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
<hr>
<br>
<h1 align="center">Basic Information of <?php echo $this->session->userdata['user']['username']; ?><br/></h1>


<table border="1" align="center">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>


    </tr>

    {user}
        <tr>

            <td>{firstname} {lastname}</td>
            <td>{email}</td>
            <td>{password}</td>




        </tr>
    {/user}
</table>
<hr>

<h1 align="center">Recipe Uploaded By <?php echo $this->session->userdata['user']['username']; ?><br/></h1>

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

    {user_uploads}
    <tr>

        <td>{name}</td>
        <td>{type}</td>
        <td>{description}</td>

        <td>{preparation_time}</td>
        <td>{cooking_time}</td>

        <td>{ingredients}</td>
        <td>{procedures}</td>
        <td>{serves}</td>


        <td><a href="/recipe_ci/recipes/edit/{id}">Edit</a></td>
        <td><a href="/recipe_ci/recipes/delete/{id}">Delete</a></td>





    </tr>
    {/user_uploads}
</table>

</body>
</html>


