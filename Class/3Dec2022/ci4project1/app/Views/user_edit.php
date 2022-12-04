<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User Edit Form</h1>
    <form action="<?php echo site_url('/users/update') ?>" method="post">
        <label>Name</label>
        <input type="text" name="u_name" value="<?php echo $user['name'] ?>" placeholder="Enter Your name"> <br>
        <label>Email</label>
        <input type="text" name="u_email" value="<?php echo $user['email'] ?>" placeholder="Enter Your Eamil"> <br>
        <input type="submit" name="update" value="Update">
        <input type="hidden" name="u_id" value="<?php echo $user['id'] ?>">
    </form>
    <br>
    <a href="/users">All Users</a>
    <a href="/users/add">New User</a>
</body>

</html>