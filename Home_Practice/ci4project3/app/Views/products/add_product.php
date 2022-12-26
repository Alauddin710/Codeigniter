<?php 
echo view('includes/header');
echo view('includes/navbar');

?>

<h1>Add new Product</h1>

<div class="container">

    <form method="POST" action="/ProductController/create">

        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="phone" name="price">

        </div>
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <input type="text" class="form-control" id="details" name="details">

        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <textarea type="text" class="form-control" id="imge" name="imge"></textarea>
        </div>

        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<?php echo view('includes/footer') ?>