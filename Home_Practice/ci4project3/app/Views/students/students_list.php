<?php 
echo view('includes/header');
echo view('includes/navbar');
 ?>

<div class="container">
    <h1><?php echo $title ?></h1>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php 
foreach ($students as $student){ ?>

        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['phone'] ?></td>
            <td><?php echo $student['email'] ?></td>
            <td><?php echo $student['address'] ?></td>
            <td>
                <a href="studentsController/edit/<?php echo $student['id'] ?>">Edit</a>
                <a href="studentsController/delete/<?php echo $student['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php
}
?>
    </table>
    <a href="studentsController/new" class="btn btn-primary">New Student</a>
</div>
<?php 
 echo view('includes/footer')
 ?>