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
        

            <div class="col-lg-12 grid-margin stretch-card" style="margin-top:30px">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Donating Details</h4>
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
                           Donor Details
                          </th>
                         
                          <th>
                            Donated  Message
                          </th>
                          <th>
                           Donating Date
                          </th>
                          <th>
                          Blood Group
                          </th>
                          <th>
                           Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        

                         $stmt2 = $admin->ret("SELECT * FROM `b_request` INNER JOIN `user` ON b_request.u_id = user.u_id INNER JOIN `blood` ON user.b_id = blood.b_id");

                        while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr>
                        <td>
                           <?php echo $i++ ; ?>
                          </td>
                         <td> <?php echo $row['r_name'] ; ?> </td>
                                                  
                          <td>
                            <?php echo $row['r_request'] ; ?>
                          </td>
                          <td>
                            <?php echo $row['rq_date'] ; ?>
                          </td>
                          <td>
                            <?php echo $row['b_group'] ; ?>
                          </td>
                          <td>
                            <?php if($row['r_status']=='accept'){ ?>

                                <button type="button" class="btn btn-success" data-mdb-ripple-init>Accepted</button>
                            <?php }elseif($row['r_status']=='reject'){ ?> 
                                <button type="button" class="btn btn-danger" data-mdb-ripple-init>Rejected</button>
                                <?php }else{ ?>
                                  <a href="./controller/records.php?abid=<?php echo $row['r_id'] ; ?>"><button type="button" class="btn btn-success" data-mdb-ripple-init>Accept</button> </a> <br/><br/>
                                  <a href="./controller/records.php?rbid=<?php echo $row['r_id'] ; ?>">  <button type="button" class="btn btn-danger" data-mdb-ripple-init>Reject</button> </a>
                                    <?php } ?>
                            
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