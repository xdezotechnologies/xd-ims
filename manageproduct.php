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
          <h4 class="m-0 text-dark">Manage Products</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="card">
                    <div class="card-body">
                      <div class="col-md-12" style="margin-bottom:10px;">
                      <?php
                      //to get the current url for refresh function
                     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                          $url = "https://";   
                     else  
                          $url = "http://";   
                     // Append the host(domain name, ip) to the URL.   
                     $url.= $_SERVER['HTTP_HOST'];   
                     
                     // Append the requested resource location to the URL   
                     $url.= $_SERVER['REQUEST_URI']; 
                      ?>
                      <a name="" id="" class="btn btn-info btn-sm" href="addproduct.php" role="button"><i class="fas fa-plus-circle"></i></a>
                      <a name="" id="" class="btn btn-warning btn-sm" href="<?php echo $url; ?>" role="button"><i class="fas fa-redo-alt"></i></a>
                      <?php
                      if(isset($_GET['data-show']))
                      {
                        ?>
                        <a name="" id="" class="btn btn-primary btn-sm" href="manageproduct.php" role="button"><i class="fas fa-list"></i></a>
                        <?php
                      }
                      else 
                      {
                      ?>
                      <a name="" id="" class="btn btn-danger btn-sm" href="manageproduct.php?data-show=trashed" role="button"><i class="fas fa-trash"></i></a>
                      <?php
                      } 
                      ?>
                    </div>
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th style="width: 10px;">S.N.</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th style="width:12px;">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php 
                    if(isset($_GET['data-show'])) 
                    {
                      $query = "SELECT products.id as product_id, products.name as product_name, products.status as product_status, product_category.name as category_name FROM products INNER JOIN product_category ON products.category_id = product_category.id WHERE products.deleted_at IS NOT NULL";
                    }
                    else 
                    {
                      $query = "SELECT products.id as product_id, products.name as product_name, products.status as product_status, product_category.name as category_name FROM products INNER JOIN product_category ON products.category_id = product_category.id WHERE products.deleted_at IS NULL";
                    }
                    $result = mysqli_query($conn,$query);
                    $sn = 0;
                    while($data=mysqli_fetch_array($result))
                    {
                        $sn++;
                    ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $data['product_name']; ?></td>
                            <td><?php echo $data['category_name']; ?></td>

                            <td><?php if($data['product_status']==1) { echo '<span class="text-info">Active</span>'; } else { echo '<span class="text-dark">Inactive</span>'; }?></td>
                            <td>
                              <?php
                              if(isset($_GET['data-show'])) {
                                ?>
                               <a href="process/restoreproductcategory.php?id=<?php echo $data['product_id']; ?>" class="btn btn-success btn-xs"><i class="fas fa-recycle"></i></a>
                               <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-default"><i class="fas fa-trash-alt"></i></button>
                                   <!-- Delete Modal-->
                                      <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Delete Record</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Are you sure that you want to parmanently delete this record ?</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <a name="" id="" class="btn btn-danger" href="process/deleteproductcategory.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                                            </div>
                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                      </div>
                                  <!-- Delete Modal -->
                                <?php
                              }
                              else {
                                ?>
                               <a href="editproduct.php?id=<?php echo $data['product_id']; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>
                               <a href="process/softdeleteproduct.php?id=<?php echo $data['product_id']; ?>" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></a>
                                <?php
                              } 
                              ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S.N.</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                  </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php require('inc/footer.php'); ?>
