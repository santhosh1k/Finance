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
  .row {
        margin-bottom: -7.5px;
         }
    .modal-content 
          {
         width:73%!important;
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
               <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="add_account.php" method="POST"  enctype="multipart/form-data">
                    <p class="card-description">Personal information</p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row ">
                      <label class="col-sm-5 col-form-label  text-right" >First Name</label>
                      <div class="col-sm-7 mt-2">
                      <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Account Name">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" >Last Name</label>
                       <div class="col-sm-7 mt-2">
                      <input type="text" name="aadhar_number" id="aadhar_number" class="form-control form-control-sm" placeholder="Last name" >
                          </div>
                        </div>
                      </div>
                        <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Gender</label>
                         <div class="col-sm-7 mt-2">
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
                        <label class="col-sm-5 col-form-label text-right" id="hello">Date
                          Of Birth</label>
                          <div class="col-sm-7 mt-2">
                            <input type="Date" name="account_name" id="Account id" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                      </div>
                    </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Age</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder=" Age">
                          </div>
                        </div>
                    </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Occupation</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Occupation">
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
                           <label class="col-sm-5 col-form-label text-right" id="hello">Mobile 1</label>
                           <div class="col-sm-7 mt-2">
                             <input type="Text" name="account name" id="account id" class="form-control form-control-sm" placeholder="Mobile">
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Mobile 2</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder=" Mobile">
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Borrower Name</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Borrower Name">
                           </div>
                           </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">A/c No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="A/c No">
                          </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">IFSC</label>
                           <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="IFSC">
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">S/o</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="S/O">
                           </div>
                           </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Door No</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Door no">
                          </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Flat No/Premises</label>
                           <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Flat no">
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Street</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Street">
                          </div>
                        </div>
                        </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Village</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Village">
                          </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Pincode</label>
                           <div class="col-sm-7 mt-2">
                            <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="IFSC">
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Mandal</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Mondal">
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Dist</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Dist">
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">State</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="State">
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Email Id</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Email Id">
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Intrest Rate</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="Rate">
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">From Date</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">To Date</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="account_name" id="account id" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                           </div>
                         </div>
                       </div>
                      <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" >KYC Upload
                              </label> 
                              <div class="col-sm-7 mt-2">
                               <input type="file" name="panimg1" class="file-upload-default">
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
                    <div class="row">
                    <div class="col-md-12">
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
 
   <script type="text/javascript">
    $('#change').change(function(){
  //this is just getting the value that is selected
  var title = $(this).val();
  $('.modal-title').html(title);
  $('.modal').modal('show');
});
  </script>
  <script>
function myFunction() {
  var radio = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (radio.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
  <!-- End custom js for this page-->
</body>

</html>

