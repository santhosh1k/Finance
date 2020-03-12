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

    .row{
        margin-bottom: -0.5rem;
    }
    .col-md-12 {
    max-width: 97%;
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
            <div class="col-md-12 grid-margin">
              <h2 class="">Capital Account </h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Accounts</p>
               <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">

                   <form class="form-sample" action="add_account.php" method="POST"  enctype="multipart/form-data">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="">First Name</label>
                      <div class="col-sm-7 mt-2">
                      <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="First Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Last Name</label>
                       <div class="col-sm-7 mt-2">
                      <input type="text" name="aadhar_number" id="aadhar_number" class="form-control form-control-sm" placeholder="Last Name" >
                          </div>
                        </div>
                      </div>
                    
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Gender</label>
                         <div class="col-sm-6 mt-2">
                         <select class="form-control form-control-sm" name="" id="">
                          <option>Male</option>
                          <option>FeMale</option>
                         </select>
                         </div>
                      </div>
                    </div>
                    </div>
                     <div class="row">
                      <div class="col-md-4">
                      <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">Date of Birth</label>
                      <div class="col-sm-7 mt-2">
                      <input type="date" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Age</label>
                      <div class="col-sm-7 mt-2">
                        <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Age">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Occupation</label>
                       <div class="col-sm-6 mt-2">
                       <input type="text" class="form-control form-control-sm" name="" placeholder="Occupation">
                       </div>
                    </div>
                  </div>
              </div>

                    <div class="row">
                     <div class="col-md-4">
                         <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Schedule Name</label>
                         <div class="col-sm-7 mt-2">
                          <select class="form-control form-control-sm">
                              <option>text1</option>
                              <option>text2</option>
                              <option>text3</option>
                          </select>
                         </div>
                         </div>
                       </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Mobile1</label>
                      <div class="col-sm-7 mt-2">
                        <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Mobile Number">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Mobile2</label>
                       <div class="col-sm-6 mt-2">
                       <input type="text" class="form-control form-control-sm" name="" placeholder="Mobile Number">
                       </div>
                    </div>
                  </div>
                    </div>
                      <div class="row">
                          <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">S/o W/o D/o</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Address">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Door No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Door No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Flat No/Premsis</label>
                       <div class="col-sm-6 mt-2">
                       <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Flat No">
                       </div>
                      </div>
                    </div> 
                    </div>
                    <div class="row">
                         <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Area</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Area">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Landmark</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Landmark">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Street</label>
                         <div class="col-sm-6 mt-2">
                         <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Street">
                         </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">State</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="State">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Dist</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Dist">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Mandal</label>
                         <div class="col-sm-6 mt-2">
                         <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Mandal">
                         </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Village</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Village">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Pincode</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Pincode">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Aadhar No</label>
                         <div class="col-sm-6 mt-2">
                         <input type="text" name="" class="form-control form-control-sm" placeholder="Aadhar No" >
                         </div>
                      </div>
                    </div>
                    </div>
                         <div class="row">
                        <div class="col-md-4">
                       <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">Pan Number</label>
                      <div class="col-sm-7 mt-2">
                      <input type="text" name="pan_number" id="Pan_number" class="form-control form-control-sm" placeholder="Enter Pan Number">
                          </div>
                        </div>
                      </div>
                    
                 <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">KYC Upload
                              </label> 
                              <div class="col-sm-7 mt-2">
                               <input type="file" name="aadharimg1" class="file-upload-default">
                               <div class="input-group ">
                                  <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="KYC">
                                   <span class="input-group-append">
                                   <button class="file-upload-browse btn btn-primary" type="button"  style="padding: 0.55rem 0.5rem;">Upload</button>
                                   </span>
                               </div>
                              </div>
                            </div>
                       </div> 
                           <!-- <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Pan Image
                              </label> 
                              <div class="col-sm-6 mt-2">
                               <input type="file" name="panimg1" class="file-upload-default">
                               <div class="input-group ">
                                  <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Pancard">
                                   <span class="input-group-append">
                                   <button class="file-upload-browse btn btn-primary" type="button"  style="padding: 0.55rem 0.5rem;">Upload</button>
                                   </span>
                               </div>
                              </div>
                            </div>
                       </div>-->
                  </div> 
                   <div class="row">
                    <div class="col-md-12  mt-4">
                      <div class="text-right">
                         <button type="reset" name="reset" value="reset" class="btn btn-danger btn-icon-text">
                         Cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         Save
                        </button> 
						<!--<input type="submit" name="submit" value="submit">
						<input type="reset" name="reset" value="reset">-->
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
  <!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
</body>

</html>

