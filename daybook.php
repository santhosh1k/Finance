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
    background-color: #0f13103b;
  }
  .form-group {
    margin-bottom: -1.0rem;
}
.col-sm-6 {
    margin-top: 21px;
}
.form-group label {
    margin-bottom: 2.5rem;
    
}
.content-wrapper {
    padding: 1.1rem 5.04rem !important;
   
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -10px;
    margin-left: -10px;
    padding-top: 20px;
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
              <h2 class="">Day Book</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Day Book</p>
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
                          <label class="col-sm-4 col-form-label text-right" id="hello"> From Date</label>
                          <div class="col-sm-4">
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
                      <label class="col-sm-4 col-form-label text-right" id="hello">To Date</label>
                      <div class="col-sm-4">
                      <input type="date" name="" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                          <div class="col-md-2"></div>
                        </div>
                      </div>
                    </div>
                <div class="row">
                  <div class="col-md-2"></div>
                      <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-6 col-form-label text-right" id="">Daily page Skip?
                           </label>
                           <div class="col-sm-6" id="hi">
                            <input type="radio" name="Gender" value="Yes">Yes
                            <input type="radio" name="Gender" value="No">No
                           </div>
                         </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Print From Page</label>
                           <div class="col-sm-7">
                            <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Page No">
                           </div>
                         </div>
                      </div>
                 </div>
                 </form>
                  <form>
                   <div class="row mt-1">
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

