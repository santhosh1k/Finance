<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
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
    margin-bottom: 1.5rem;
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
              <h2 class=""> Line Modification</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Line Modification</p>
                <br>
             <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>

              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
              <form class="form-sample" method="POST" action="line_action.php">
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello"> Customer ID</label>
                          <div class="col-sm-7">
                            <input type="text" name="customer_id" id="customer_id" class="form-control form-control-sm" placeholder=" Enter ID">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello"> Customer Name</label>
                          <div class="col-sm-7">
                            <input type="text" name="customer_name" id="customer_name" class="form-control form-control-sm" placeholder=" Enter Name">
                          </div>
                        </div>
                      </div>

                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Exisiting Line</label>
                          <div class="col-sm-7">
                            <input type="text" name="exisiting_line" id="exisiting_line" class="form-control form-control-sm" placeholder="">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                       <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Status</label>
                          <div class="col-sm-7">
                            <input type="text" name="status" id="status" class="form-control form-control-sm" placeholder=" ">
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Revised Line</label>
                          <div class="col-sm-7">
                            <input type="text" name="revised_line" id="revised_line" class="form-control form-control-sm" placeholder=" ">
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                          <div class="col-md-10">
                               <div class="text-right">
                                   <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">Submit</button>
                               </div>
                          </div>
                      </div>

                </div>
              </div>
            </div>
        </div>
        </form>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include("footer.php")?>
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
</body>

</html>
