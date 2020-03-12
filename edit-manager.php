<!DOCTYPE html>
<?php
session_start();
include 'database.php';

$result2 = mysqli_query($connection,"SELECT * FROM manager_code");
$result1 = mysqli_query($connection,"SELECT * FROM manager_name");
?>
<?php

session_start();

include 'database.php';

$idno = $_REQUEST['id'];

$result = mysqli_query($connection,"SELECT * FROM manager_details where id='$idno' ");

$row = mysqli_fetch_array($result);

?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
      .form-group {
    margin-bottom: 2!important; 
}
.page-body-wrapper {
    
    padding-top:22px!important;
}
#hello{
    line-height:0.4rem!important;
}
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include("navbar.php")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        <?php include ("sidebar.php")?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Manager</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Manager</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">

                   <form class="form-sample" action="add_manager.php" method="POST" entype="multipart/form_data">
                    <p class="card-description">
                    </p>
                <!--    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right">Manager Code</label>
                      <div class="col-sm-7">
                      <input type="text" name="manager_code" id="manager_code" value="<?php echo $row["manager_code"];?>" class="form-control form-control-sm" placeholder="Enter Code" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-1"> 
						<button type="submit" name="addcode" id="addcode" class="btn btn-success btn-icon-text">
                         Add 
                        </button> </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right">Manager Name</label>
                       <div class="col-sm-7">
                      <input type="text" name="manager_name" id="manager_name" value="<?php echo $row["manager_name"];?>" class="form-control form-control-sm" placeholder="Enter Name" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-1"> 
						<button type="submit" name="addmanager" id="addmanager" class="btn btn-success btn-icon-text">
                         Add 
                        </button> </div>
                    </div> -->
                     <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                            <input type="text" name="id" value="<?php echo $row["id"];?>"  hidden>  
                          <label class="col-sm-5 col-form-label text-right" id="hello">Manager Code</label>
                            <div class="col-sm-7">
                                <?php
                        if (mysqli_num_rows($result2) > 0) {
                        ?>
                         <select class="form-control form-control-sm" name="schedule" id="schedule" value="<?php echo $row["name"];?>">
                        <?php
                            $i=1;
                            while($row = mysqli_fetch_array($result2)) {
                            ?>
                            
                              <option><?php echo $row["code"];?></option>
                              <?php
                            $i++;
                            }
                            ?>
                             </select>
                              
                            
                            </div>
                            <?php
                    
                        }
                        ?>
                        </div>
                      </div>
                        <div class="col-md-5">
                          <div class="form-group row">
                             <label class="col-sm-6 col-form-label text-right" id="hello">Manager Name</label>
                           <div class="col-sm-6">
                                <?php
                        if (mysqli_num_rows($result1) > 0) {
                        ?>
                              <select class="form-control form-control-sm" name="schedule" id="schedule" value="<?php echo $row["name"];?>">
                                  <?php
                            $j=1;
                            while($row = mysqli_fetch_array($result1)) {
                            ?>
                                  
                              <option><?php echo $row["name"];?></option>
                              <?php
                            $i++;
                            }
                            ?>
                            </select>
                           </div>
                            <?php
                    
                        }
                        ?>
                         </div>
                       </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group row">
                    <label class="col-sm-5 col-form-label text-right" id="hello">Executive Code</label>  
                    <div class="col-sm-7">
                     <input  class="form-control form-control-sm" name="executive_code" id="executive_code" placeholder="Enter Code" value="<?php echo $row["name"];?>" >
                   </div>
                 </div>
               </div>
                   <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Executive Name </label>
                          <div class="col-sm-5">
                            <input class="form-control form-control-sm" name="executive_name" id="executive_name"  placeholder="Enter Name" value="<?php echo $row["name"];?>">
                          </div>
                      </div>
                    </div>
                  </div> 
                  
                   <div class="row">
                    <div class="col-md-9">
                      <div class="text-right">
                    <!--     <button type="reset" name="reset" value="reset" class="btn btn-danger btn-icon-text">
                         Cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         Update
                        </button> -->
                        <button type="submit" name="submit" class="btn btn-outline-success btn-sm " href="update_company.php? id=<?php echo $row["id"];?>">
                            Update
                            <i class="mdi mdi-box-cutter"></i>
                            </button>
                            <a type="button" class="btn btn-outline-success btn-sm " href="managers.php">
                                Cancel
                                <i class=""></i>
                                </a>
                      </div>
                    </div>
                    <div class="col-md-3"></div>
                   </div>
                  </form>  
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/file-upload.js"></script>
  
  <!-- End custom js for this page-->
</body>

</html>

