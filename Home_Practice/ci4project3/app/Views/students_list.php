<?php 
echo view('includes/header');
echo view('includes/navbar');
 ?>

<div class="container">
    <h1><?php echo $title ?></h1>

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
        <?php 
foreach ($students as $student){ ?>

        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['address'] ?></td>
        </tr>
        <?php
}
?>
    </table>
</div>
<?php 
 echo view('includes/footer')
 ?>