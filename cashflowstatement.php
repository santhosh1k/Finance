<!DOCTYPE html>
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
    .table {
    background-color: #0f13103b!important;
  }
  .form-group {
    margin-bottom: -1.5rem!important;
}
.form-group label {
    margin-bottom: 3.5rem!important;
        line-height: 0.4rem;
}
.col-sm-6 {
    margin-top: 15px!important;
}
.form-group label {
    margin-bottom: 3.5rem!important;
}
.content-wrapper {
    padding: 2.1rem 5.04rem !important;
}

.col-sm-6 {
    flex: 0 0 50%;
    max-width: 43%;
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
              <h2 class="">Cash Flow Statement</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Cash flow Statement</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="addvehicle.php" method="POST" >
                    <p class="card-description">
                    </p>
                    <div class="row">
                  <div class="col-md-1"></div>
                      <div class="col-md-8">
                         <div class="form-group row">
                           <label class="col-sm-4 col-form-label text-right" id="hi1">Report Type
                           </label>
                           <div class="col-sm-5" id="hi">
                            <select class="form-control form-control-sm" name="" id="">
                              <option>Month wise</option>
                              <option>Day wise</option>
                            </select>
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right"> From Date</label>
                          <div class="col-sm-5">
                           <input type="date" name="" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                       <div class="form-group row">
                      <label class="col-sm-4 col-form-label text-right">To Date</label>
                      <div class="col-sm-5">
                      <input type="date" name="" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                          <div class="col-md-2"></div>
                        </div>
                      </div>
                    </div>
                 </form>
                  <form>
                   <div class="row mt-3">
                        <div class="col-md-8">
                          <div class="text-right">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                             Submit
                            </button>
                          </div>
                        </div>
                   </div>
                 </form>
              </div>
            </div>
            </div>
        </div>
                  
                
        <!-- partial:partials/_footer.html -->
       <?php include("footer.php")?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
</body>

</html>

