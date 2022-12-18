<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <div class="container">

        <h1>User Table</h1>

        <?php //print_r($myusers) 
        ?>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Eamil</th>
                <th>Action</th>
            </tr>
            <?php foreach ($myusers as $user) : ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td>
                    <a href="<?php echo base_url("users/edit/" . $user['id']) ?>">Edit</a> |
                    <a href="<?php echo base_url("users/delete/" . $user['id']) ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>

        </table>
        <a href="/userdisplay">All Users</a>
        <a href="/users/add">Add Users</a>
    </div>
</body>

</html>