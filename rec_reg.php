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
  <title>Rec_Reg</title>
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
  <style>
    /* Additional CSS styles */
    .form-group {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .form-group .form-control {
      width: calc(50% - 10px); /* Adjust the width as needed */
    }


  </style>
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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="controller/donor_reg.php" method="POST">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Recipient Name" required>
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="tel" name="phone" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Phone" required>
                  <input type="date" name="dob" class="form-control form-control-lg" id="exampleInputDOB" placeholder="Date of Birth" required>
                </div>
                <div class="form-group">
                  <select class="form-control form-control-lg" name="l_id" id="exampleFormControlSelect2">
                          <option selected disabled>Select Location</option>
                          <?php $stmt=$admin->ret("select * from `location`");
                         while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                           <option value="<?php echo $row['l_id'];  ?>"><?php echo $row['l_name'];?></option>
                         <?php } ?>
                        </select required>

                  <select class="form-control form-control-lg" name="b_id" id="exampleFormControlSelect3">
                   <option selected disabled>Select Blood Group</option>
                          <?php $stmt=$admin->ret("select * from `blood`");
                         while( $row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
                           <option value="<?php echo $row['b_id'];  ?>"><?php echo $row['b_group'];?></option>
                         <?php } ?>
                        </select required>
                </div>
               
                <div class="form-group">

                <div class="gender">
                    <label>Gender:</label>
                        <input type="radio" id="male" name="gender" value="male">Male
                        <input type="radio" id="female" name="gender" value="female">Female
                 </div>
                </div>
                <div class="form-group">

                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="donor_register">SIGN UP</button>

                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
              </form>
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