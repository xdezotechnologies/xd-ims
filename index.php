<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>XD IMS | Inventory Management System</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style type="text/css">
    @media only screen and (min-width: 992px) {
      .submit-button {
        margin-top:32px;
      }

      .demo-img {
         margin-top:30px;
         margin-left:auto;
         margin-right: auto;
      }

    @media only screen and (max-width:992px) {
      .view-demo-button {
        margin-left:30%
      }
    }
  </style>

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <h3 class="font-weight-bold mt-2">XD IMS</h3>
      </a>
      

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
         <li class="nav-item">
            <a href="index.php" class="nav-link pl-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="user-guides.php" class="nav-link pl-2">User Guides</a>
          </li>
          <li class="nav-item">
           <button type="submit" class="btn btn-primary btn-sm pl-2 mt-2">Login</button>
          </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="https://www.tvisha.com/data/category_images/inventory-management-system.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://3.imimg.com/data3/SG/JG/MY-594544/inventory-management-system-500x500.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://miro.medium.com/max/1000/1*vjNNEPZD-wL2zd0KALekDg.png" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6 mt-2">
            <h5 class="font-weight-bold">Set up your organization right now.</h5>
              <form role="form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company Name:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company Address:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Your Name:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone:</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary submit-button">Submit Your Query</button>
                    </div>
                  </div>
                </div>

              </form>
            </div>
            <!-- /.card -->    
          </div>
        </div>
        <!-- /.row -->

<!-- demo image -->
        <div class="row">
          <div class="col-md-9 demo-img">
              <img src="https://www.zoho.com/inventory/images/app-dashboard-2x.png" class="img-fluid img-thumbnail">
          </div>
        </div>
<!-- demo img ends -->

        <div class="row">
          <div class="col-md-1 demo-img">
            <a type="submit" class="btn btn-info view-demo-button" href="login.php">View Demo</a>
          </div>
        </div>

<!-- System features -->
          <div class="row">        
            <div class="col-md-9 m-auto">
                <div class="mt-5 text-center features-title">
                  <h4 class="font-weight-bold">Features</h4>
                  <h5 class="font-weight-bold">Inventory software built and designed for growing businesses.</h5>
                  <h6 class="font-weight-bold">Trusted by businesses globally.</h6>
                </div>  
                <div class="mt-4 features-list">
                  <div class="col-md-4 text-center float-left feature-item" style="padding:10px;">
                    <h5>Easy Sales Tracking</h5>     
                    <p class="text-justify p-2">Our free inventory tracking software keeps track of your entire sales activity right from adding contacts of your leads and prospects, creating sales orders, invoices, and managing sales on online marketplaces.</p>               
                  </div>
                  <div class="col-md-4 text-center float-left feature-item" style="padding:10px;">
                    <h5>Centralized View</h5>  
                    <p class="text-justify p-2">Get a quick update of all your transactions and order status from a centralized dashboard. Know how many items has to be packed, how many were shipped, delivered from a single screen.</p>     
                  </div>
                  <div class="col-md-4 text-center float-left feature-item" style="padding:10px;">
                    <h5>Monitor purchases</h5>   
                    <p class="text-justify p-2">Add vendor details to your contacts, and manage all your bills and purchase orders in a single place. Make your buying process more effective by creating backorders or even converting your sales orders into drop-shipments.</p> 
                  </div>
                  <div class="col-md-4 text-center float-left feature-item" style="padding:10px;">
                    <h5>Monitor purchases</h5>   
                    <p class="text-justify p-2">Add vendor details to your contacts, and manage all your bills and purchase orders in a single place. Make your buying process more effective by creating backorders or even converting your sales orders into drop-shipments.</p> 
                  </div>
                  <div class="col-md-4 text-center float-left feature-item" style="padding:10px;">
                    <h5>Monitor purchases</h5>   
                    <p class="text-justify p-2">Add vendor details to your contacts, and manage all your bills and purchase orders in a single place. Make your buying process more effective by creating backorders or even converting your sales orders into drop-shipments.</p> 
                  </div>
                  <div class="col-md-4 text-center float-left feature-item" style="padding:10px;">
                    <h5>Monitor purchases</h5>   
                    <p class="text-justify p-2">Add vendor details to your contacts, and manage all your bills and purchase orders in a single place. Make your buying process more effective by creating backorders or even converting your sales orders into drop-shipments.</p> 
                  </div>
                </div>
          </div>
        </div>
<!-- System features ends -->

        <div class="row">
          <div class="col-md-9 m-auto">
            <div class="mt-2 text-center">
              <h4 class="font-weight-bold">Pricings</h4>
                <div class="mt-3 pricing-list">
                    <div class="col-md-4 pricing-item p-2 float-left" style="background-color:#f7e6e6;border-radius: 20px;">
                      <h5 class="font-weight-bold">Basic</h5>
                      <p>
                        Starting at <br>
                        <span class="font-weight-bold">$50</span> for 1<sup>st</sup> year. <br>
                        Renew at <br>
                        <span class="font-weight-bold">$30</span> per year.
                      </p>
                      <h5 class="font-weight-bold">Features</h5>
                        <ul>
                          <li>Inventory Management Features <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>2GB Storage Space <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Simple Day Book Application Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Accounting Module <span><i class="fa fa-times" aria-hidden="true" style="color:red;"></i></span></li>
                          <li>Advanced Analytics and Reports Module <span><i class="fa fa-times" aria-hidden="true" style="color:red;"></i></span></li>
                          <li>Simple Day Book Application Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Customization Based on your requirements <span><i class="fa fa-times" aria-hidden="true" style="color:red;"></i></span></li>
                          <li>1 Year Support <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Money Back Guarantee <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                        </ul>
                    </div>
                    <div class="col-md-4 pricing-item p-2 float-left" style="background-color:#dfe6f7;border-radius: 20px;">
                      <h5 class="font-weight-bold">Essential</h5>
                      <h3 class="font-weight-bold">(Most Popular)</h3>
                      <p>
                        Starting at <br>
                        <span class="font-weight-bold">$100</span> per year. <br>
                        Renew at <br>
                        <span class="font-weight-bold">$50</span> per year.
                      </p>
                      <h5 class="font-weight-bold">Features</h5>
                        <ul>
                          <li>Inventory Management Features <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>4GB Storage Space <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Simple Day Book Application Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Accounting Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Advanced Analytics and Reports Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Simple Day Book Application Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Customization Based on your requirements <span><i class="fa fa-times" aria-hidden="true" style="color:red;"></i></span></li>
                          <li>1 Year Support <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Money Back Guarantee <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                        </ul>
                    </div>
                    <div class="col-md-4 pricing-item p-2 float-left" style="background-color:#f6e3f7;border-radius: 20px;">
                      <h5 class="font-weight-bold">Advanced</h5>
                      <p>
                        Starting at <br>
                        <span class="font-weight-bold">$150</span> per year. <br>
                        Renew at <br>
                        <span class="font-weight-bold">$80</span> per year.
                      </p>
                      <h5 class="font-weight-bold">Features</h5>
                        <ul>
                          <li>Inventory Management Features <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>4GB Storage Space <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Simple Day Book Application Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Accounting Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Advanced Analytics and Reports Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Simple Day Book Application Module <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Customization Based on your requirements <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>1 Year Support <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                          <li>Money Back Guarantee <span><i class="fa fa-check" aria-hidden="true" style="color:#008500;"></i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 m-auto">
            <h3 class="text-center mt-5 font-weight-bold">Thanks for vising our website.</h3>
            <h5 class="text-center font-weight-bold">For more info.</h5>
            <p class="text-center">Send your query at <a href="mailto:info@xdezo.com">info@xdezo.com</a></p>
          </div>
          
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      A Product of XDezo Technologies
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://xdezo.com">XDezo Technologies</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
