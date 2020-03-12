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
            <div class="col-md-12 grid-margin">
              <h2 class="">View Assets</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">View Assets</p>
              </div>
              <div class="text-right">
                <a href="add-branch.html" class="btn btn-success btn-rounded btn-fw">
                  <i class="mdi mdi-library-plus"> </i>  Add Asset
                </a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                      <form>
                         <div class="row">
                           <div class="col-md-12">
                              <div class="col-sm-4 my-1">
                                 <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="mdi mdi-magnify"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Search">
                                  </div>
                                </div>
                            </div> 
                        
                           </div>
                       </form>
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <th>Type</th>
                        <th>Purchase Date</th>
                        <th>Description</th>
                        <th>Serial Number</th>
                        <th>Files</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>01</td>
                          <td>31-18-2019</td>
                          <td>hello</td>
                          <td>21</td>
                          <td>hi</td>
                          <td>Text</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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

