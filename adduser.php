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
                  <a class="nav-link active" href="adduser.php">Add User</a>
                  <a class="nav-link"  href="manageuser.php">Manage User</a>
                  <a class="nav-link"  href="changelogs.php">Changelogs</a>
                  <a class="nav-link" href="about.php">About</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active">
                  <div class="card-header bg-dark">
                        <h3 class="card-title">Add User</h3>
                  </div>
                  <div class="card card-primary">
                    <form role="form" action="process/adduser.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name:</label>
                                <input type="text" class="form-control" placeholder="Full Name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email:</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username:</label>
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password:</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password:</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                            </div>
                            <div class="form-group">
                                <label for="">User Role</label>
                                 <select class="form-control" name="role" id="">
                                    <option value="admin">Admin</option>
                                    <option value="editor">Editor</option>
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
