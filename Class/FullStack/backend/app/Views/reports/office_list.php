<?= $this->include('layouts/header1.php') ?>

<!-- Navbar -->
<?= $this->include('layouts/top_nav.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?= $this->include('layouts/main_sidebar.php') ?>
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
                            <h3 class="card-title">DataTable with Office Wise</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <h1>Staff list</h1>
                            <form action="">
                                <select name="" id="officeCode">
                                    <option value="">Select One</option>
                                    <?php foreach ($offices as $office) : ?>
                                        <option value="<?= $office['officeCode'] ?>"><?= $office['city'] . "(" . $office['country'] . ")" ?></option>

                                    <?php endforeach ?>
                                </select>
                            </form>
                            <div class="card" id="show"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->include('layouts/footer1.php') ?>