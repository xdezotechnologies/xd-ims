<?php require('inc/toppart.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require('inc/navbar.php'); ?>

<?php require('inc/sidebar.php'); ?>

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id=$id";
    $result = mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $unit = $row['unit'];
    $category_id = $row['category_id'];
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
            <h4 class="m-0 text-dark">Edit Product</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
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
              <form role="form" action="process/editproduct.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group col-md-6 float-left">
                    <label for="exampleInputEmail1">Product Name:</label>
                    <input type="text" class="form-control" placeholder="Product Name" name="name" value="<?php echo $name; ?>">
                  </div>
                  <div class="form-group col-md-6 float-left">
                    <label for="exampleInputEmail1">Unit:</label>
                    <input type="text" class="form-control" placeholder="Unit" name="unit" value="<?php echo $unit; ?>">
                  </div>
                  <div class="form-group col-md-6 float-left">
                    <label for="">Product Category</label>
                    <select class="form-control" name="category_id">
                    <?php
                    $selected_query = "SELECT * FROM product_category WHERE category_id='$category_id'";
                    $selected_result = mysqli_query($conn,$query);
                    $selected_row = $selected_result->fetch_assoc();
                    ?>
                    <option value="<?php echo $category_id; ?>" selected><?php echo $selected_row['name']; ?></option>
                    <?php
                    $query = "SELECT * FROM product_category WHERE deleted_at IS NULL && status=1";
                    $result = mysqli_query($conn,$query);
                    while($data=mysqli_fetch_array($result))
                    {
                    ?>
                      <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                    <?php
                    } 
                    ?>
                    </select>
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
