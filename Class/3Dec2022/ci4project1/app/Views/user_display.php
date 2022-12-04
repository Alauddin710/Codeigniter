<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php //print_r($myusers) 
    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($myusers as $user) : ?>
            <tr>
                <td> <?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td>
                    <a href=" <?php echo base_url("users/edit/" . $user['id']) ?>"> Edit</a>

                    <a href=" <?php echo base_url("users/delete/" . $user['id']) ?>"> Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="/users">All Users</a>
    <a href="/users/add">New User</a>
</body>

</html>