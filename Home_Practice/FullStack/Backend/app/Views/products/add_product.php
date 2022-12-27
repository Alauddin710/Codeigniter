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
            
            <form action="/products/create" method="post">
              <?php csrf_field() ?>
              <div class="card-body">
                <div class="form-group">
                  <label >Product Name</label>
                  <input type="text" name="product_name" class="form-control"  placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                  <label >Product Details</label>
                  <textarea type="text" name="product_details" class="form-control"  placeholder="Enter Product Details"></textarea>
                </div>
                <div class="form-group">
                  <label >Product Price</label>
                  <input type="text" name="product_price" class="form-control"  placeholder="Enter Product Price">
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

<?php echo view('layouts/product_footer.php'); ?>