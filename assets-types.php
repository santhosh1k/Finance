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
                    <h2 class="">Asset Type</h2>
                    <div class="d-flex">
                      <i class="mdi mdi-home text-muted hover-cursor"></i>
                      <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                      <p class="text-primary mb-0 hover-cursor">Asset Type</p>
                    </div>
                  </div>
              </div>
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Asset Type
                  </p>
              <section class="">
                   <div class="panel-heading">
                        <h6 class="panel-title">Add Asset Type<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                        <div class="heading-elements">
                        </div>
                   </div>
                <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal">
                 <input name="_token" type="hidden" value="">
                    <div class="panel-body">
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                    <input class="form-control" placeholder="" required="required" name="name" type="text" id="name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" =""="" required="required" id="type" name="type"><option value="current">Current Asset</option><option value="fixed">Fixed Asset</option><option value="intangible">Intangible Asset</option><option value="investment">Investment Asset</option><option value="other">Other Asset</option></select>
                    </div>
                   </div>
                   </div>
                    <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                    <div class="heading-elements">
                    <button type="submit" class="btn btn-primary pull-right legitRipple">Save</button>
                    </div>
                    </div>
                    </form>
                    </div>
                </section>
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
   <!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
</body>

</html>

