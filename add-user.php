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
              <h2 class=""> User Profile</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">User View</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                <form class="form-sample" action="admininsert.php" method="POST" enctype="multipart/form-data">
                    <p class="card-description">
                    </p>
                 <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">First Name</label>
                           <div class="col-sm-7 mt-2">
                            <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" placeholder=" Enter First Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Last Name</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" placeholder=" Enter Last Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-right" id="hello">Upload Image
                              </label> 
                              <div class="col-sm-7 mt-2">
                               <input type="file" name="imagefile1" class="file-upload-default">
                               <div class="input-group ">
                                  <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Image">
                                   <span class="input-group-append">
                                   <button class="file-upload-browse btn btn-primary" type="button"  style="padding: 0.55rem 0.5rem;">Upload</button>
                                   </span>
                               </div>
                              </div>
                            </div>
                      </div>
                  </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Gender</label>
                          <div class="col-sm-7 mt-2">
                            <select class="form-control form-control-sm" name="gender" id="gender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Phone No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="phonenumber" id="phonenumber" class="form-control form-control-sm" placeholder=" Enter No">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Email ID</label>
                          <div class="col-sm-7 mt-2">
                            <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder=" Email ID">
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Create ID</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="createid" id="createid" class="form-control form-control-sm" placeholder=" Enter ID">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Password</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="password" id="password" class="form-control form-control-sm" placeholder=" Enter Password">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                            
                          <label class="col-sm-4 col-form-label text-right" id="hello">Confrom Pwd</label>
                          <div class="col-sm-7 mt-2">
                              <span style="color:red"><?php  if(isset($_SESSION['psw'])) { echo $_SESSION['psw'] ; unset($_SESSION['psw']); } ?></span>
                            <input type="text" name="repassword" id="repassword" class="form-control form-control-sm" placeholder="Confrom Password">
                          </div>
                        </div>
                      </div>
                 </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Door NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="doorno" id="doorno" class="form-control form-control-sm" placeholder=" Enter Door No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Flat NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="flatno" id="flatno" class="form-control form-control-sm" placeholder=" Enter Flat No">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Town/City</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="town" id="town" class="form-control form-control-sm" placeholder=" Enter City">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Mandal</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="mandal" id="mandal" class="form-control form-control-sm" placeholder=" Enter Mandal">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Dist </label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="dist" id="dist" class="form-control form-control-sm" placeholder=" Enter Dist">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">State</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="state" id="state" class="form-control form-control-sm" placeholder=" Enter State">
                          </div>
                        </div>
                      </div>
                </div>
                   <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Email-ID</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="email" id="email" class="form-control form-control-sm" placeholder=" Enter Email">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Web site</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="website" id="website" class="form-control form-control-sm" placeholder=" Enter Website">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4 ">
                          <div class="form-group row">
                             <label class="col-sm-4 col-form-label text-right" id="hello">Pincode</label>
                             <div class="col-sm-7 mt-2">
                               <input type="text" name="pincode" id="pincode" class="form-control form-control-sm" placeholder=" Enter Pincode">
                             </div>
                         </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Company Name</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="" id="" class="form-control form-control-sm" placeholder=" Enter Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">EMP ID</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name=" " id=" " class="form-control form-control-sm" placeholder=" Enter ID">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4 ">
                          <div class="form-group row">
                             <label class="col-sm-4 col-form-label text-right" id="hello">Role</label>
                             <div class="col-sm-7 mt-2">
                               <input type="text" name="" id="" class="form-control form-control-sm" placeholder=" Enter Role">
                             </div>
                         </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4 ">
                          <div class="form-group row">
                             <label class="col-sm-5 col-form-label text-right" id="hello">Password</label>
                             <div class="col-sm-7 mt-2">
                               <input type="text" name="" id="" class="form-control form-control-sm" placeholder=" Enter Password">
                             </div>
                         </div>
                      </div>
                       <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-right" id="hello"> KYC Upload
                              </label> 
                              <div class="col-sm-7 mt-2">
                               <input type="file" name="imagefile1" class="file-upload-default">
                               <div class="input-group ">
                                  <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="KYC">
                                   <span class="input-group-append">
                                   <button class="file-upload-browse btn btn-primary" type="button"  style="padding: 0.55rem 0.5rem;">Upload</button>
                                   </span>
                               </div>
                              </div>
                            </div>
                      </div>
                      </div>
                      <div class="row" style="margin-top: 20px;">
                      <h3>Permissions</h3>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                         <div class="custom-control custom-checkbox custom-control-inline" style="float:right;">
                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                <label class="custom-control-label mt-3" for="defaultInline1">Back Date</label>
                                </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Type</label>
                          <div class="col-sm-7 mt-2">
                            <select  class="form-control form-control-sm" id="" >
                                <option>text1</option>
                                <option>text2</option>
                                <option>text3</option>
                                <option>text4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      </div>
                  
                      <div class="row">
                    <div class="col-md-11 mt-4 ml-4">
                      <div class="text-right">
                         <button type="submit" name="submit" value="submit" onclick="return valid();" class="btn btn-primary btn-icon-text">
                         Submit
                      </div>
                    </div>
                    <div class="col-md-0"></div>
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

