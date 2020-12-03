<?php require('inc/toppart.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php require('inc/navbar.php'); ?>

<?php require('inc/sidebar.php'); ?>

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $username = $row['username'];
    $role = $row['role'];
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h4 class="m-0 text-dark">Settings</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12 col-md-2">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link" href="adduser.php">Add User</a>
                  <a class="nav-link"  href="manageuser.php">Manage User</a>
                  <a class="nav-link"  href="changelogs.php">Changelogs</a>
                  <a class="nav-link" href="about.php">About</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active">
                  <div class="card card-primary">
                    <form role="form" action="process/edituser.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name:</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email:</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username:</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="">User Role</label>
                                 <select class="form-control" name="role" id="">
                                    <option value="<?php echo $role; ?>"><?php if($role=="admin") { echo 'Admin'; } else { echo 'Editor'; } ?></option>
                                    <option value="<?php if($role=="admin") { echo 'editor'; } else { echo 'admin'; } ?>"><?php if($role=="admin") { echo 'Editor'; } else { echo 'Admin'; } ?></option>
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
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('inc/footer.php'); ?>
