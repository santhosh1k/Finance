<!DOCTYPE html>
<?php
session_start();
include 'database.php';
$idno = $_REQUEST['id'];
$result = mysqli_query($connection,"SELECT * FROM company_details where id='$idno' ");
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
     .form-group {
    margin-bottom: 1.0rem;
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
                   <form class="form-sample" action="update_company.php" method="POST">
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                            <input type="text" name="id" value="<?php echo $row["id"];?>"  hidden> 
                          <label class="col-sm-4 col-form-label text-right" id="hello">Name</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="name" id="name" value="<?php echo $row["name"];?> "class="form-control form-control-sm" placeholder=" Enter  Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Start Finance Year</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="startyear" id="startyear" value="<?php echo $row["startyear"];?>" class="form-control form-control-sm" placeholder=" Enter Finance Year">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Address</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="address" id="address" value="<?php echo $row["address"];?>" class="form-control form-control-sm" placeholder=" Enter Address">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Pincode</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="pincode" id="pincode" value="<?php echo $row["pincode"];?>" class="form-control form-control-sm" placeholder=" Enter Pincode">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Dist</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="dist" id="dist" value="<?php echo $row["dist"];?>" class="form-control form-control-sm" placeholder=" Enter Dist">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">State</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="state" id="state" value="<?php echo $row["state"];?>" class="form-control form-control-sm" placeholder=" Enter State">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">PAN NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="panno" id="panno" value="<?php echo $row["panno"];?>" class="form-control form-control-sm" placeholder=" Enter Pan No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">TAN NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="tanno" id="tanno" value="<?php echo $row["tanno"];?>" class="form-control form-control-sm" placeholder=" Enter Tan No">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">GST NO</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="gstno" id="gstno" value="<?php echo $row["gstno"];?>" class="form-control form-control-sm" placeholder=" Enter Gst No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">ward </label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="ward" id="ward" value="<?php echo $row["ward"];?>" class="form-control form-control-sm" placeholder=" Enter Ward">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Telephone no</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="telephone" id="telephone" value="<?php echo $row["telephone"];?>" class="form-control form-control-sm" placeholder=" Enter Telephone">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Mobile No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="mobile" id="mobile" value="<?php echo $row["mobile"];?>" class="form-control form-control-sm" placeholder=" Enter Mobile no">
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Email-ID</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="email" id="email" value="<?php echo $row["email"];?>" class="form-control form-control-sm" placeholder=" Enter Email">
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-0"></div>
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Web site</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="website" id="website" value="<?php echo $row["website"];?>" class="form-control form-control-sm" placeholder=" Enter Website">
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                    <div class="col-md-9">
                      <div class="text-right">
                        <button type="submit" name="update_company" class="btn btn-outline-success btn-sm " href="update_company.php? id=<?php echo $row["id"];?>">
                              Update
                              <i class="mdi mdi-box-cutter"></i>                        
                            </button> 
                        <a type="button" class="btn btn-outline-success btn-sm " href="company.php">
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

