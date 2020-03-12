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
     .form-group {
    margin-bottom: -0.9rem;
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
              <h2 class=""> Company Profile</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Company Profile</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="add_company.php" method="POST">
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Name</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder=" Enter  Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Start Finance Year</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="startyear" id="startyear" class="form-control form-control-sm" placeholder=" Enter Finance Year">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Address</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="address" id="address" class="form-control form-control-sm" placeholder=" Enter Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Pincode</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="pincode" id="pincode" class="form-control form-control-sm" placeholder=" Enter Pincode">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Dist</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="dist" id="dist" class="form-control form-control-sm" placeholder=" Enter Dist">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">State</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="state" id="state" class="form-control form-control-sm" placeholder=" Enter State">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">PAN NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="panno" id="panno" class="form-control form-control-sm" placeholder=" Enter Pan No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">TAN NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="tanno" id="tanno" class="form-control form-control-sm" placeholder=" Enter Tan No">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">GST NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="gstno" id="gstno" class="form-control form-control-sm" placeholder=" Enter Gst No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Ward </label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="ward" id="ward" class="form-control form-control-sm" placeholder=" Enter Ward">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Telephone No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="telephone" id="telephone" class="form-control form-control-sm" placeholder=" Enter Telephone">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Mobile No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="mobile" id="mobile" class="form-control form-control-sm" placeholder=" Enter Mobile no">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Email-ID</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder=" Enter Email">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Web site</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="website" id="website" class="form-control form-control-sm" placeholder=" Enter Website">
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Account No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder="Account No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">IFSC CODE</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="website" id="website" class="form-control form-control-sm" placeholder=" IFSC CODE">
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row" style="margin-top: 28px;">
                         <div class="col-md-3">
                           <div class="custom-control custom-checkbox custom-control-inline" style="float: right;">
                           <input type="checkbox" class="custom-control-input" id="defaultInline1">
                           <label class="custom-control-label" for="defaultInline1">Phone</label>
                           </div>
                         </div>
                        <div class="col-md-3">
                           <div class="custom-control custom-checkbox custom-control-inline" style="margin-left: 92px;">
                           <input type="checkbox" class="custom-control-input" id="defaultInline2">
                           <label class="custom-control-label" for="defaultInline2">Google</label>
                           </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="defaultInline3">
                            <label class="custom-control-label" for="defaultInline3">Email</label>
                            </div>
                         </div>
                         <div class="col-md-3">
                            <div class="custom-control custom-checkbox custom-control-inline" style="margin-left: -63px;">
                            <input type="checkbox" class="custom-control-input" id="defaultInline4">
                            <label class="custom-control-label" for="defaultInline4">Biometric</label>
                            </div>
                        <!--<div class="form-group row" style="margin-left:-112px;">
                          <label class="col-sm-4 col-form-label text-right">Biometric</label>
                          <div class="col-sm-7 mt-4">
                            <input type="radio" name="" id="">
                          </div>
                        </div>-->
                          </div>
                      </div>
                         <div class="row">
                             <div class="col-md-3">
                                <div class="custom-control custom-checkbox custom-control-inline" style="float: right;margin-right: 35px;">
                                <input type="checkbox" class="custom-control-input" id="defaultInline5">
                                <label class="custom-control-label mt-4" for="defaultInline5">Lps</label>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="custom-control custom-checkbox custom-control-inline" style="margin-left: 93px;">
                                <input type="checkbox" class="custom-control-input" id="defaultInline6">
                                <label class="custom-control-label mt-4" for="defaultInline6">Lpi </label>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                       <div class="col-md-9 mt-4 ml-5">
                         <div class="text-right">
                         <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         Save
                        </button> 
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

