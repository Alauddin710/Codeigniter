<?php 
echo view('includes/header');
echo view('includes/navbar');

?>

<h1>Edit Product</h1>

<div class="container">

    <form method="POST" action="/productController/update/<?= $product['id'] ?>">

        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="<?php echo $product['name']; ?>" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" value="<?php echo $product['price']; ?>" class="form-control" id="phone" name="price">

        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>

            <textarea type="text" class="form-control" id="details" name="imge"><?php echo $product['details']; ?></textarea>

        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" value="<?php echo $product['imge']; ?>" class="form-control" id="imge" name="imge"></input>
        </div>

        <button type="submit" value="submit" class="btn btn-primary">Update</button>
    </form>
</div>



<?php echo view('includes/footer') ?>