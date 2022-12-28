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
                    <h1>Product Entry Form</h1>
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
                            <h3 class="card-title">Product</h3>
                        </div>

                        <form method="post" action="<?= base_url('/products/create') ?>">
                            <div class="card-body">
                                <?php
                                // ata error deakanor jonno validation ata asce products theke create methoed theke
                                if (isset($validation)) {
                                    $errors = $validation->getErrors();

                                    if (count($errors) > 0) {
                                        echo "<ul>";
                                        foreach ($errors as $err) {
                                            echo "<li> $err</li>";
                                        }
                                        echo "</ul>";
                                    }
                                }
                                ?>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" class="form-control" value="<?php echo set_value('product_name') ?>" placeholder="Enter Prodcut Name">
                                    <span class="text-danger"> <?php
                                                                if (isset($validation)) {
                                                                    $error = $validation->getError('product_name');
                                                                    echo ($error);
                                                                }

                                                                ?> </span>
                                </div>
                                <div class="form-group">
                                    <label>Product details</label>
                                    <textarea type="text" name="product_details" id="summernote" class="form-control" placeholder="Enter Prodcut Details"><?php echo set_value('product_details') ?> </textarea>

                                </div>
                                <div class="form-group">
                                    <label>Product Price</label>
                                    <input type="text" name="product_price" class="form-control" value="<?php echo set_value('product_price') ?>" placeholder="Enter Prodcut Price">
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