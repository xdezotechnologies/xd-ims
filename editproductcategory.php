<?php require('inc/toppart.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require('inc/navbar.php'); ?>

<?php require('inc/sidebar.php'); ?>


<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product_category WHERE id=$id";
    $result = mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $details = $row['details'];
    $status = $row['status'];
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Edit Product Category</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Product Category</li>
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
              <form role="form" action="process/editproductcategory.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group col-md-6 float-left">
                    <label for="exampleInputEmail1">Category Name:</label>
                    <input type="text" class="form-control" placeholder="Category Name" name="name" value="<?php echo $name; ?>">
                  </div>
                  <div class="form-group col-md-6 float-left">
                      <label for="">Details</label>
                      <textarea class="form-control" id="" rows="3" name="details" placeholder="Write category details here."><?php echo $details; ?></textarea>
                  </div>
                  <div class="form-group col-md-6 float-left">
                    <label for="">Status</label>
                    <select class="form-control" name="status">
                      <option value="<?php echo $status; ?>" selected><?php if($status==1) { echo "Active"; } else { echo "Inactive"; } ?></option>
                      <option value="<?php if($status==1) { echo "0"; } else { echo "1"; } ?>"><?php if($status==1) { echo "Inactive"; } else { echo "Active"; } ?></option>
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
