<!DOCTYPE html>
<?php

session_start();

include 'database.php';

$idno = $_REQUEST['id'];

$result = mysqli_query($connection,"SELECT * FROM narrations_details where id='$idno' ");

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
              <h2 class="">Narrations View</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Narrations</p>
                
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="update_narrations.php" method="POST" >
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <input type="text" name="id" value="<?php echo $row["id"];?>"  hidden>  
                         <label class="col-sm-3 col-form-label text-right" id="hello">Vochar Type</label>
                          <div class="col-sm-9">
                             <select class="form-control form-control-sm" name="vochartype" id="vochartype" value="<?php echo $row["vochartype"];?>">
                              <option>Payment Vochers</option>
                              <option>Recipt Vochers</option>
                              <option>Journal Vochers</option>
                              <option>Contra Vochers</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-right" id="hello">Narrations</label>
                          <div class="col-sm-9">
                            <input type="text" name="narrations" id="narrations" value="<?php echo $row["narrations"];?>"class="form-control form-control-sm" placeholder=" Enter Narration">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                  
                   <div class="row">
                    <div class="col-md-9">
                      <div class="text-right">
                    <!--    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         update
                        </button> -->
                        <button type="submit" name="update_narrations" class="btn btn-outline-success btn-sm " href="update_narrations.php? id=<?php echo $row["id"];?>">
                         Update
                         <i class="mdi mdi-box-cutter"></i>
                        </button>
                        <a type="button" class="btn btn-outline-success btn-sm " href="Narrations.php">
                            Cancel
                            <i class=""></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-1"></div>
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

   <!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
  
  <!-- End custom js for this page-->
</body>

</html>

