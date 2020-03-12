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
              <h2 class="">Add Executive</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Executive</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1"></div>
                     <div class="col-md-4">
                       <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right"id="hello">Manager Code</label>
                         <div class="col-sm-7 mt-2">
                        <select class="form-control form-control-sm" name="" id="">
                          <option>select1</option>
                          <option>select2</option>
                          <option>select3</option>
                        </select>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                     <label class="col-sm-5 col-form-label text-right" id="hello">Manager Name</label>
                       <div class="col-sm-7 mt-2">
                      <select class="form-control form-control-sm" name="" id="">
                        <option>select1</option>
                        <option>select2</option>
                        <option>select3</option>
                      </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                    <div class="col-md-4">
                    <div class="form-group row"> 
                    <label class="col-sm-5 col-form-label text-right" id="hello">Executive Code</label>  
                    <div class="col-sm-7 mt-2">
                     <input  class="form-control form-control-sm" name="executive_code" id="executive_code" placeholder="Enter Code">
                   </div>
                 </div>
               </div>
                   <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Executive Name </label>
                          <div class="col-sm-7 mt-2">
                            <input class="form-control form-control-sm" name="executive_name" id="executive_name"  placeholder="Enter Name">
                          </div>
                      </div>
                    </div>
                  </div> 
                   <div class="row">
                    <div class="col-md-9">
                      <div class="text-right">
                         <button type="reset" name="reset" value="reset" class="btn btn-danger btn-icon-text">
                         Cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         Save
                        </button>
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

