<!DOCTYPE html>
<?php
session_start();
include 'database1.php';
$idno = $_REQUEST['id'];
$result = mysqli_query($connection,"SELECT * FROM account_details where id=$idno");
$row=mysqli_fetch_array($result);
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
    margin-bottom: 0!important; 
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
              <h2 class="">Account Profile</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Accounts</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="update_account.php" method="POST"  enctype="multipart/form-data">
                    <p class="card-description">Personal info</p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                            <input type="text" name="id" value="<?php echo $row["id"];?>"  hidden>  
                      <label class="col-sm-5 col-form-label text-right">Account Name</label>
                      <div class="col-sm-7">
                      <input type="text" name="account_name" id="account_name" value="<?php echo $row["account_name"]?>" class="form-control form-control-sm" placeholder="Account Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-4 col-form-label text-right">Adhar Number</label>
                       <div class="col-sm-7">
                      <input type="text" name="aadhar_number" id="aadhar_number"value="<?php echo $row["aadhar_number"]?>" class="form-control form-control-sm" placeholder="Adhar Number" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-right">Adhar Image
                              </label> 
                              <div class="col-sm-6">
                               <input type="hidden" name="old_aadharimg1" class="file-upload-default" value="<?php echo $row["aadhar_image"]?>">
                                <input type="file" name="aadharimg1" class="file-upload-default" value="">
                               <div class="input-group ">
                                  <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Adhar">
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
                      <label class="col-sm-5 col-form-label text-right">Pan Number</label>
                      <div class="col-sm-7">
                      <input type="text" name="pan_number" id="Pan_number" value="<?php echo $row["pan_number"]?>" class="form-control form-control-sm" placeholder="Enter Pan Number">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right">Date of Birth</label>
                          <div class="col-sm-7">
                            <input type="date" name="dob" id="dateofb" value="<?php echo $row["dob"]?>" class="form-control form-control-sm"  placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div> 
                            <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-4 col-form-label text-right">Pan Image
                              </label> 
                              <div class="col-sm-6">
                               <input type="hidden" name="old_panimg1" class="file-upload-default" value="<?php echo $row["pan_image"]?>">
                               <input type="file" name="panimg1" class="file-upload-default" value="">

                               <div class="input-group ">
                                  <input type="text" class="form-control file-upload-info form-control-sm" disabled placeholder="Pancard">
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
                          <label class="col-sm-5 col-form-label text-right">Schedule Name</label>
                          <div class="col-sm-7">
                            <select class="form-control form-control-sm" name="schedule" id="schedule" value="<?php echo $row["schedule_name"]?>">
                              <option>Assets1</option>
                              <option>Assets2</option>
                              <option>Assets3</option>
                              <option>Assets4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-right">S/O W/O C/O:</label>
                        <div class="col-sm-7">
                        <input type="text" name="sonof" id="sonof" value="<?php echo $row["son_of"]?>" class="form-control form-control-sm" placeholder="Enter Name">
                               </div>
                            </div>
                         </div>
                      <div class="col-md-4">
                         <div class="form-group row">
                       <label class="col-sm-4 col-form-label text-right">Door No:</label>
                           <div class="col-sm-6">
                           <input type="text" name="dno" id="dno" value="<?php echo $row["door_no"]?>" class="form-control form-control-sm" placeholder="Door Number">
                           </div>
                         </div>
                      </div>
                    </div>
                      <div class="row">
                             <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right ">Flat No:</label>
                          <div class="col-sm-7">
                            <input type="text" name="flatno" id="flatno" value="<?php echo $row["flat_no"]?>" class="form-control form-control-sm" placeholder="Enter Street">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right"  >Premsis</label>
                          <div class="col-sm-7">
                            <input type="text" name="premsis" id="premsis" value="<?php echo $row["premsis"]?>" class="form-control form-control-sm" placeholder="Town/City">
                          </div>
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">Street</label>
                          <div class="col-sm-6">
                            <input type="text" name="street" id="street" value="<?php echo $row["street"]?>" class="form-control form-control-sm" placeholder="Enter Street">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right ">Village Town/City</label>
                          <div class="col-sm-7">
                            <input type="text" name="town" id="town" value="<?php echo $row["town"]?>" class="form-control form-control-sm" placeholder="Town/City">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">Pincode</label>
                          <div class="col-sm-7">
                          <input type="text" name="pincode" id="pincode" value="<?php echo $row["pincode"]?>" class="form-control form-control-sm"  placeholder="Pincode">
                          </div>
                        </div>
                      </div>
                           <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">Mandal</label>
                          <div class="col-sm-6">
                            <select class="form-control form-control-sm" name="mandal" id="mandal" value="<?php echo $row["mandal"]?>">
                              <option>Madhapur</option>
                              <option>B</option>
                              <option>C</option>
                              <option>D</option>
                              <option>E</option>
                              <option>F</option>
                              <option>G</option>
                              <option>H</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right ">Dist</label>
                          <div class="col-sm-7">
                             <select class="form-control form-control-sm" name="dist" id="dist" value="<?php echo $row["distic"]?>">
                              <option>Hyderabad</option>
                              <option>B</option>
                              <option>C</option>
                              <option>D</option>
                              <option>E</option>
                              <option>F</option>
                              <option>G</option>
                              <option>H</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">State</label>
                          <div class="col-sm-7">
                            <select class="form-control form-control-sm" name="state" id="state" value="<?php echo $row["state"]?>">
                              <option>Telangana</option>
                              <option>Andhra pradesh</option>
                              <option>C</option>
                              <option>D</option>
                              <option>E</option>
                              <option>F</option>
                              <option>G</option>
                              <option>H</option>
                            </select>
                          
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">Phone1</label>
                          <div class="col-sm-6">
                            <input type="text" name="phone1" id="phone1" value="<?php echo $row["phone1"]?>" class="form-control form-control-sm" placeholder="Phone1">
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right ">Phone2</label>
                          <div class="col-sm-7">
                            <input type="text" name="phone2" id="phone2" value="<?php echo $row["phone2"]?>" class="form-control form-control-sm" placeholder="Phone2">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">Email Id</label>
                          <div class="col-sm-7">
                         <input type="text" name="email" id="email" value="<?php echo $row["email"]?>" class="form-control form-control-sm" placeholder="Email">
                          </div>
                        </div>
                      </div>
                         <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right ">Intrest Rate%</label>
                          <div class="col-sm-6">
                             <select class="form-control form-control-sm" name="rate" id="rate" value="<?php echo $row["intrest"]?>">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group row">
                    <label class="col-sm-5 col-form-label text-right ">Form Date</label>  
                    <div class="col-sm-7">
                     <input  class="form-control form-control-sm" name="fromdate" id="fromdate" value="<?php echo $row["from_date"]?>" placeholder="dd/mm/yyyy">
                   </div>
                 </div>
               </div>
                   <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-right ">To Date </label>
                          <div class="col-sm-7">
                            <input class="form-control form-control-sm" name="todate" id="todate" value="<?php echo $row["to_date"]?>"  placeholder="dd/mm/yyyy">
                          </div>
                      </div>
                    </div>
                  </div> 
                  
                   <div class="row">
                    <div class="col-md-11">
                      <div class="text-right">
                    <!--     <button type="reset" name="reset" value="reset" class="btn btn-danger btn-icon-text">
                         Cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         Update
                        </button> -->
                        <button type="submit" name="update_account" class="btn btn-outline-success btn-sm " href="update_account.php? id=<?php echo $row["id"];?>">
                        Update
                        <i class="mdi mdi-box-cutter"></i>
                        </button>
                            <a type="button" class="btn btn-outline-success btn-sm " href="accountview.php">
                            Cancel
                    <i class=""></i>
                            </a>
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

