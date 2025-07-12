<?php include '../../config.php';
$admin = new Admin(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-Blog</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
   
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

  </head>
  <body>
   
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    <?php include 'header.php'; ?>
      <!-- partial -->
     <?php include  'sidebar.php'; ?>
        <!-- partial -->

        <div class="container-fluid">
        <div class="row">
            <div class="col-12 grid-margin stretch-card" style="margin-top:30px; margin-right:30px;">
                <div class="card" style="width: 80%;">
                    <div class="card-body">
                  <h4 class="card-title">Upload Blogs</h4> <br/>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" action="controller/add_blog.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1"> blog Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                   
                    <div class="form-group">
    <label for="image">Image upload</label>
    <input type="file" name="image" id="image" class="file-upload-default" style="display: none;">
    <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" id="image-name">
        <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button" onclick="document.getElementById('image').click();">Upload</button>
        </span>
    </div>
</div>



                   
                    <div class="form-group">
                      <label for="exampleTextarea1"> Blog Description </label>
                      <textarea class="form-control" name="des" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" name="blog" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
             </div>




             <div class="col-lg-12 grid-margin stretch-card">
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
                         Blog Title
                          </th>
                          <th>
                           Blog Image
                          </th>
                         
                          <th colspan="2">
                         Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php
                      $i = 1;
                      $stmt = $admin->ret("SELECT * FROM `blog`");
                      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>

                        <tr>
                          <td class="py-1">
                          <?php echo $i++ ; ?>
                          </td>
                          <td>
                           <?php echo $row['blog_title'] ; ?>
                          </td>
                          <td>
                          <img src="controller/<?php echo $row['blog_image']; ?>" width="100%" height="100%" >
                          </td>
                      
                          <td>

                          <a class="btn btn-info mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['blog_id'] ; ?>">
                                        <i class="bi bi-eye"></i>
                          </a>
                          <a href="blogup.php?ubid=<?php echo $row['blog_id'] ; ?>" class="btn btn-success mr-2">
                            <i class="bi bi-arrow-clockwise"></i> 
                          <a>
                          <a href="controller/add_blog.php?dblogid=<?php echo $row['blog_id'] ; ?>" class="btn btn-danger mr-2">
                            <i class="bi bi-trash"></i> 
                          </a>

                          </td>


                          <div class="modal fade" id="exampleModal<?php echo $row['blog_id'] ; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row['blog_title']; ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="controller/<?php echo $row['blog_image']; ?>" width="300" height="250" style="margin-left: 90px;border: 2px solid black;border-radius: 30px;">
        <div style="display: flex;flex-direction: row;margin-top: 20px;">
        <ul>
         
          <p><?php echo $row['blog_desc']; ?></p>
          <p>Posted on : <?php echo date('d/m/Y', strtotime($row['blog_date'])); ?></p>
          
        
        
      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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
    
        
      <!-- page-body-wrapper ends -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
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

    <script>
    document.getElementById('image').addEventListener('change', function() {
        var input = this;
        var fileName = input.files[0].name;
        document.getElementById('image-name').value = fileName;
    });
</script>

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