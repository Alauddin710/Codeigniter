<?php echo view('layouts/product_header.php'); ?>


<!-- Navbar -->
<?php echo view('layouts/top_nav.php'); ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view('layouts/main_sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Product</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-lg-12">


          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Products</h3>
            </div>
            <?php
            $errors = [];
            if (session()->has('errors')) {
              $errors = session()->errors;
            }

            ?>

            <form action=" <?= base_url('/products/update/' . $product['id']) ?>" method="post">
              <?php csrf_field() ?>
              <div class="card-body">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="product_name" value="<?= old('product_name') ? old('product_name') : $product['product_name'] ?>" class="form-control" placeholder="Enter Product Name">
                  <span class="text-danger">
                    <?= isset($errors['product_name']) ? $errors['product_name'] : '';  ?>
                  </span>
                </div>
                <div class="form-group">
                  <label>Product Details</label>
                  <textarea type="text" name="product_details" class="form-control" placeholder="Enter Product Details"> <?= old('product_details') ? old('product_details') : $product['product_details'] ?></textarea>
                  <span class="text-danger">
                    <?= isset($errors['product_details']) ? $errors['product_details'] : ''; ?>
                  </span>
                </div>
                <div class="form-group">
                  <label>Product Price</label>
                  <input type="text" name="product_price" class="form-control" value="<?= old('product_price') ? old('product_price') : $product['product_price'] ?>" placeholder="Enter Product Price">

                </div>
                <span class="text-danger">
                  <?= isset($errors['product_price']) ? $errors['product_price'] : ''; ?>
                </span>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section>

</div>
<!-- /.content-wrapper -->

<?php echo view('layouts/product_footer.php'); ?>