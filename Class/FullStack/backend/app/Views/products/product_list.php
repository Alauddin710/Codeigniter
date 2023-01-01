<?php echo view('layouts/header1.php') ?>

<!-- Navbar -->
<?php echo view('layouts/top_nav.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?php echo view('layouts/main_sidebar.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Prodcuts</h1>
                    <?php
                    if (session()->has('msg')) : ?>
                        <div class="alert alert-success"> <?= session()->msg; ?></div>


                    <?php endif ?>

                    <?php
                    if (session()->has('del')) : ?>
                        <div class="alert alert-danger"> <?= session()->del; ?></div>


                    <?php endif ?>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Product details</th>
                                        <th>Product Price</th>
                                        <th>Product Image</th>
                                        <th>Product Category</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($products as $product) : ?>
                                        <tr>
                                            <td><?= $product['id']; ?></td>
                                            <td><?= $product['product_name']; ?>
                                            </td>
                                            <td><?= $product['product_details']; ?></td>
                                            <td> <?= $product['product_price']; ?></td>
                                            <td> <img width="50px" src="<?= $product['product_image']; ?>" alt=""> </td>
                                            
                                            <td> <?= $product['product_category']; ?></td>
                                            <td> <a href="<?= site_url("/products/edit/" . $product['id']) ?>"> <i class="fa fa-pen"></i></a>
                                                <a href="/products/delete/<?php echo $product['id']; ?>"> <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo view('layouts/footer1.php') ?>