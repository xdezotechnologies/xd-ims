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
                  <a class="nav-link" href="adduser.php">Add User</a>
                  <a class="nav-link active"  href="manageuser.php">Manage User</a>
                  <a class="nav-link"  href="changelogs.php">Changelogs</a>
                  <a class="nav-link" href="about.php">About</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-10">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active">
                  <div class="card-header bg-dark">
                        <h3 class="card-title">Manage User</h3>
                  </div>
                  <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px;">S.N.</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th style="width: 10px;">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php 
                    $query = "SELECT * FROM users WHERE deleted_at IS NULL";
                    $result = mysqli_query($conn,$query);
                    $sn = 0;
                    while($data=mysqli_fetch_array($result))
                    {
                      $sn++;
                    ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php if($data['status']==1) { echo '<span class="text-info">Active</span>'; } else { echo '<span class="text-dark">Inactive</span>'; }?></td>
                            <td>
                               <a href="edituser.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>
                               <a href="process/deleteuser.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S.N.</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                  </div>
            <!-- /.card -->
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
