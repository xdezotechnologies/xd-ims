<?php require('inc/toppart.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require('inc/navbar.php'); ?>

<?php require('inc/sidebar.php'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Add Product Category</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Product Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- form -->
          <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form role="form" action="process/addproductcategory.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group col-md-6 float-left">
                    <label for="exampleInputEmail1">Category Name:</label>
                    <input type="text" class="form-control" placeholder="Category Name" name="name">
                  </div>
                  <div class="form-group col-md-6 float-left">
                      <label for="">Details</label>
                      <textarea class="form-control" id="" rows="3" name="details" placeholder="Write category details here."></textarea>
                  </div>
                  <div class="form-group col-md-6 float-left">
                    <label for="">Status</label>
                    <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
          <!-- form -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('inc/footer.php'); ?>
