<?php include '../../config.php';
$admin = new Admin(); 
if(isset($_SESSION['donid'])){
  echo $_SESSION['donid'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-BloodGroup</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
   
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

  </head>
  <body>
   
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    <?php include 'header.php'; ?>
      <!-- partial -->
     <?php include  'sidebar.php'; ?>
        <!-- partial -->

        <div class="container-fluid">
        <div class="row justify-content-center" style="margin-top:30px; margin-left:30px; ">
            <!-- <div class="col-lg-12">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                  <h4 class="card-title">Manage Blood Groups</h4>
                 
                  <form class="forms-sample" action="controller/add_blood.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Enter blood group</label>
                      <input type="text" name="gname" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                   
                    <button type="submit" name="bgroup" class="btn btn-primary mr-2">Add</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div> -->
            </div><br/><br/>

            <div class="col-lg-12 grid-margin stretch-card" style="margin-top:30px">
              <div class="card">
                <div class="card-body">
                  <!-- <h4 class="card-title">Striped Table</h4> -->
                  <p class="card-description">
                    <!-- Add class <code>.table-striped</code> -->
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            SI/NO 
                          </th>
                          <th>
                            Blood Group
                          </th>
                          <th>
                        Description
                          </th>
                          <th>
                            Stock
                          </th>
                          <th colspan="3">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                         $stmt = $admin->ret("SELECT * FROM `blood`");
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                        <td>
                           <?php echo $i++ ; ?>
                          </td>
                          <td>
                            <?php echo $row['b_group'] ; ?>
                          </td>
                          <td>
                            <?php echo $row['b_desc'] ; ?>
                          </td>
                          <td>
                            <?php echo $row['b_stock'] ; ?>
                          </td>
                          <td>
                          <a href="bloodup.php?ubid=<?php echo $row['b_id'] ; ?>"><button type="submit" name="loc" class="btn btn-success mr-2">
    <i class="bi bi-pencil"></i> 
</button></a>
<a href="controller/delete_blood.php?dbid=<?php echo $row['b_id'] ; ?>"><button type="submit" name="loc" class="btn btn-danger mr-2">
    <i class="bi bi-trash"></i> 
</button></a>

                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
    
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>