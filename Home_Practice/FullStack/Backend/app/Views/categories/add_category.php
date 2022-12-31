<?php echo view('layouts/header.php'); ?>


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

            <form action="<?= base_url('/category/create') ?>" method="post" enctype="multipart/form-data">
              <?php csrf_field() ?>

              <div class="card-body">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="cate_name" value="<?= old('category_name') ?>" class="form-control" placeholder="Enter Category Name">
                  <span class="text-danger">
                    <?=
                    // ata product_name form nice dekanor jonno
                    isset($errors['cate_name']) ? $errors['cate_name'] : '';
                    ?>
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

<?php echo view('layouts/footer.php'); ?>