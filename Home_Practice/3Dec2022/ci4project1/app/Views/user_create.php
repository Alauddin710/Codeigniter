<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User Create Form</h1>
    <!-- aicode gullo holo form validation jonno -->
    <?php $validation = \Config\Services::validation(); ?>
    <!-- end -->
    <form action="<?php echo site_url('users/submit') ?>" method="post">
        <label>Name</label>
        <input type="text" name="u_name" placeholder=" Enter Your name"> <br>
        <!-- aicode gullo holo form validation jonno -->
        <?php if ($validation->getError('u_name')) : ?>
        <p> <?php echo $error = $validation->getError('u_name') ?></p>
        <?php endif ?>
        <!-- end -->
        <label>Email</label>
        <input type="text" name="u_email" placeholder="Enter your email"> <br>
        <!-- aicode gullo holo form validation jonno -->
        <?php if ($validation->getError('u_email')) : ?>
        <p> <?php echo $error = $validation->getError('u_email') ?></p>
        <?php endif ?>
        <!-- end -->
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <a href="/userdisplay">All Users</a>
    <a href="/users/add">Add Users</a>
</body>

</html>