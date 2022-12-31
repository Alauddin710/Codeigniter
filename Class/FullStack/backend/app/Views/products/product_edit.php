<?php echo view('layouts/header.php') ?>

<!-- Navbar -->
<?php echo view('layouts/top_nav.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?php echo view('layouts/main_sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Edit Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8 offset-2">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product Edit</h3>

                        </div>
                        <?php
                        $errors = [];
                        if (session()->has('errors')) {
                            $errors = session()->errors;
                        }
                        ?>
                        <form method="post" action="<?= base_url('/products/update/' . $product['id']); ?>" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="card-body">
                                <?php
                                // ata error deakanor jonno validation ata asce products theke create methoed theke

                                // $errors = $validation->getErrors();

                                // if (isset($errors) && count($errors) > 0) {
                                //     echo "<ul>";
                                //     foreach ($errors as $err) {
                                //         echo "<li> $err</li>";
                                //     }
                                //     echo "</ul>";
                                // }

                                ?>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" class="form-control" value="<?= old('product_name') ? old('product_name') : $product['product_name'] ?>" placeholder="Enter Prodcut Name">
                                    <span class="text-danger">
                                        <?= isset($errors['product_name']) ? $errors['product_name'] : '' ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Product details</label>
                                    <textarea type="text" name="product_details" id="summernote" class="form-control" placeholder="Enter Prodcut Details"><?= old('product_details') ? old('product_details') : $product['product_details'] ?> </textarea>

                                    <span class="text-danger">
                                        <?= isset($errors['product_details']) ? $errors['product_details'] : '' ?>
                                    </span>

                                </div>
                                <div class="form-group">
                                    <label>Product Price</label>
                                    <input type="text" name="product_price" class="form-control" value="<?= old('product_price') ? old('product_price') : $product['product_price'] ?>" placeholder="Enter Prodcut Price">
                                    <span class="text-danger">
                                        <?= isset($errors['product_price']) ? $errors['product_price'] : '' ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label>Product Image</label>
                                    <input type="file" name="product_image" class="form-control" value="<?php echo old('product_image') ?>">
                                    <span class="text-danger">
                                        <?= isset($errors['product_image']) ? $errors['product_image'] : '' ?>
                                    </span>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>

</div>

<!-- /.content-wrapper -->
<?php echo view('layouts/footer.php') ?>