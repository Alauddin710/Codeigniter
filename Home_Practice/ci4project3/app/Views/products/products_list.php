<?php 
echo view('includes/header');
echo view('includes/navbar');

?>

<h1>Products List</h1>

<div class="container">
<table class="table table-striped">
    <tr>
        <th>SI</th>
        <th>Name</th>
        <th>Price</th>
        <th>Details</th>
        <th>Image</th>
    </tr>


<?php
$count =0;

foreach($products as $product){ 
    
    $count=$count+1;

    ?>

<tr>
    <td> <?php echo $count ?></td>
    <td><?php echo $product['name'] ?></td>
    <td><?php echo $product['price'] ?></td>
    <td><?php echo $product['details'] ?></td>
    <td><?php echo $product['imge'] ?></td>
    <td>
        <a href="productController/edit/<?php echo $product['id']; ?>">Edit</a>
        <a href="productController/delete/<?php echo $product['id']; ?>">Delete</a>
    </td>
</tr>

<?php
}
?>

</table>


<a href="/ProductController/new" class="btn btn-primary">Add New Product</a>
</div>


<?php echo view('includes/footer') ?>