
<?php 
include "config.php";
$admin = new Admin;



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="Admin/template/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="Admin/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="Admin/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="Admin/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h1 style="color:red;font-weight:bold; ">LifeDrops</h1>
              </div>
              <h4>Hello! let's get started</h4>
           
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="controller/login.php" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" Required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="login">SIGN IN</button>
                </div>
                
             

              </form>
              <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="#" class="text-primary">Create</a>
                  <br>
                  <!-- <span style="margin-right:10px"><a href="donor_reg.php" class="text-primary">Donor Sign-up</a></span> -->
                  
                <span><a href="rec_reg.php" class="text-primary"> Sign-up</a></span>
                  
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>