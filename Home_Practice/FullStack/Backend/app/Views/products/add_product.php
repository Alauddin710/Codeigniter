<?php echo view('layouts/header.php'); ?>


<!-- Navbar -->
<?php echo view('layouts/top_nav.php'); ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view('layouts/main_sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->

<?php echo view('layouts/footer.php'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add new Product</h1>
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

  <?php if (session()->has('errors')) {
    $errors = session()->errors;
  } ?>
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

            <form action="<?= base_url(
                            '/products/create'
                          ) ?>" method="post" enctype="multipart/form-data">
              <?php csrf_field(); ?>

              <div class="card-body">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="product_name" value="<?= old('product_name') ?>" class="form-control" placeholder="Enter Product Name">
                  <span class="text-danger">
                    <?= // ata product_name form nice dekanor jonno
                    isset($errors['product_name'])
                      ? $errors['product_name']
                      : '' ?>
                  </span>
                </div>s
                <div class="form-group">
                  <label>Product Category</label>
                  <select name="product_cat" class="form-control">
                    <option value="">Select One</option>
                    <?php foreach ($cats as $cat) : ?>
                      <option value="<?= $cat['id'] ?>"><?= $cat['category_name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <span class="text-danger">
                    <?= // ata product_name form nice dekanor jonno
                    isset($errors['product_cat'])
                      ? $errors['product_cat']
                      : '' ?>
                  </span>
                </div>
                <div class="form-group">
                  <label>Product Details</label>
                  <textarea type="text" name="product_details" id="summernote" class="form-control"><?= old('product_details') ?></textarea>
                  <span class="text-danger">
                    <?= // ata product_details form nice dekanor jonno
                    isset($errors['product_details'])
                      ? $errors['product_details']
                      : '' ?>
                  </span>
                </div>
                <div class="form-group">
                  <label>Product Image</label>
                  <input type="file" name="product_image" value="<?= old('product_image') ?>" class="form-control">
                  <span class="text-danger">
                    <?= // ata product_price form nice dekanor jonno
                    isset($errors['product_image'])
                      ? $errors['product_image']
                      : '' ?>
                  </span>
                </div>
                <div class="form-group">
                  <label>Product Price</label>
                  <input type="text" name="product_price" value="<?= old('product_price') ?>" class="form-control" placeholder="Enter Product Price">
                  <span class="text-danger">
                    <?= // ata product_price form nice dekanor jonno
                    isset($errors['product_price'])
                      ? $errors['product_price']
                      : '' ?>
                  </span>
                </div>
              </div>
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