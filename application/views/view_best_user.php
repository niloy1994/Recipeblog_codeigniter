<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<h1 align="center">Welcome Admin, <?php echo $this->session->userdata['user']['username']; ?></h1>
<h3 align="center"><a href="/recipe_ci/login/logout">Log Out</a><br/></h3>
<hr>
<h1 align="center">Select User Of The Day</h1>
<form method="post" align="center" action="<?php echo site_url('/recipe_ci/user/user_of_the_day');?>">

<h3 align="center">Select Here:

    <select  name="best_user"  >
        <?php
        foreach($user as $user) {

            if ($user['user_of_the_day'] == 1) {
                ?>
                <option value="<?php echo $user['id']; ?>" selected> <?php echo $user['firstname']; ?></option>
            <?php
            } else {
                ?>
                <option value="<?php echo $user['id']; ?>"> <?php echo $user['firstname']; ?></option>
            <?php
            }
        }
            ?>

    </select>

    <button >Select</button>

</h3>
    </form>


</body>
</html>