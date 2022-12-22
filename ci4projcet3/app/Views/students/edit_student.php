<?php
echo view('includes/header');
echo view('includes/navbar');
?>
<div class="container">
    <h1>Edit Student</h1>

    <form method="POST" action="/student/update/<?= $student['id'] ?>">

        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="<?php echo $student['name'] ?>" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" value="<?php echo $student['phone'] ?>" class="form-control" id="phone" name="phone">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="<?php echo $student['email'] ?>" class="form-control" id="email" name="email">

        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea type="text" class="form-control" id="address" name="address"><?php echo $student['address'] ?></textarea>
        </div>

        <button type="submit" value="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php echo view('includes/footer'); ?>