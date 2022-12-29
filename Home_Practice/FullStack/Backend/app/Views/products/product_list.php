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
          <h1 class="m-0">Products List</h1>

          <?php 
          // update message
          if (session()->has('msg')) : ?>
            <div class="alert alert-success"><?= session()->msg; ?></div>
          <?php endif ?>
          <!-- delete message -->
          <?php 
          if (session()->has('del')) : ?>
            <div class="alert alert-danger"><?= session()->del; ?></div>
          <?php endif ?>
          <?php 
          if (session()->has('insert')) : ?>
            <div class="alert alert-success"><?= session()->insert; ?></div>
          <?php endif ?>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Product Name</th>
                    <th>Product Details</th>
                    <th>Product Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $count = 1;
                  foreach ($products as $product) :
                    //$count=$count+1;
                  ?>
                    <tr>
                      <td><?= $count++; ?></td>


                      <td><?= $product['product_name'] ?></td>
                      <td><?= $product['product_details'] ?></td>
                      <td> <?= $product['product_price'] ?></td>
                      <td>
                        <a href="/products/edit/<?php echo $product['id']; ?>">Edit</a>
                        <a href="/products/delete/<?php echo $product['id']; ?>">Delete</a>
                      </td>
                    </tr>
                  <?php
                  //$count++;
                  endforeach;
                  ?>
              </table>
              <!-- <a href="/products/new" class="btn btn-primary">Add Product</a> -->
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>

    </div>
  </section>

</div>
<!-- /.content-wrapper -->

<?php echo view('layouts/product_footer.php'); ?>