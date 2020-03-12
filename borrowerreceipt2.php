<?php
include('database1.php');
if(isset($_POST['accno'])){
$num = $_POST['accno'];
//echo $num;
//exit();
$sel = mysqli_query($connection,"SELECT * FROM newborrowers WHERE accno='$num'");

//echo "SELECT * FROM newborrowers WHERE accno='$num'";

//$row = mysqli_fetch_array($sel);
//$row = $sel->fetch_assoc();
$row = mysqli_fetch_assoc($sel);
//print_r($row);



?>
<!DOCTYPE html>
<html>
    <div id="data-menu">
    <input type="text" value="<?php echo $row['accno'];?>">
    </div>
</html>
<?php } ?>

<!--<html lang="en">-->
<!--<head>-->
  <!-- Required meta tags -->
<!--  <meta charset="utf-8">-->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!--  <title> Admin</title>-->
  <!-- plugins:css -->
<!--  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">-->
<!--  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">-->
  <!-- endinject -->
  <!-- plugin css for this page -->
<!--  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">-->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
<!--  <link rel="stylesheet" href="css/style.css">-->
  <!-- endinject -->
<!--  <link rel="shortcut icon" href="images/favicon.png" />-->
<!--    <style>-->
<!--        table {-->
<!--              font-family: arial, sans-serif;-->
<!--              width: 100%;-->
<!--              margin-top: 15px;-->
<!--              border-radius:10px;-->
<!--              background-color: #a7929259;-->
              /*margin-left: 51px;*/
<!--              }-->
<!--        .row  { margin-bottom: -0.4rem;}  -->
<!--        .col-md-12 {max-width: 97%;}-->
<!--        .card .card-body {-->
<!--    padding: 0.5rem 0.875rem;-->
<!--}-->

<!--    </style>-->
<!--  </head>-->
<!--<body>-->
<!--<div class="container-scroller">-->
    <!-- partial:partials/_navbar.html -->
<!--   <?php include("navbar.php")?>-->
    <!-- partial -->
<!-- <div class="container-fluid page-body-wrapper">-->
      <!-- partial:partials/_sidebar.html -->
<!--   <?php include ("sidebar.php")?>-->
      <!-- partial -->
<!--    <div class="main-panel">-->
<!--      <div class="content-wrapper">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 grid-margin">-->
<!--             <h2 class="">Borrower Receipt </h2>-->
<!--              <div class="d-flex">-->
<!--                <i class="mdi mdi-home text-muted hover-cursor"></i>-->
<!--                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>-->
<!--                <p class="text-primary mb-0 hover-cursor">Borrower Receipt</p>-->
<!--              </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-12 grid-margin">-->
<!--           <div class="card">-->
<!--              <div class="card-body">-->
<!--                <form method="post" action="borrowerreceipt2.php">-->
<!--                   <p class="card-description"></p>-->
                   <!-- Rows start 1 -->
<!--                  <div class="row">-->
<!--                    <div class="col-md-4">-->
<!--                      <div class="form-group row">-->
<!--                         <label class="col-sm-5 col-form-label text-right" id="hello">Date</label>-->
<!--                          <div class="col-sm-7 mt-2">-->
<!--                            <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="dd/mm/yyyy">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-8">-->
<!--                     <div class="form-group row">-->
<!--                       <label class="col-sm-4 col-form-label text-right" id="hello">Unique No</label>-->
<!--                       <div class="col-sm-2 mt-2">-->
<!--                        <input type="text" value="<?php echo $row['aadhar_no_bd'];?>" class="form-control form-control-sm">-->
<!--                       </div>-->
<!--                         <label class="col-sm-2 col-form-label text-right" id="hello" style="margin-left: -49px;">Prv Ac No</label>-->
<!--                         <div class="col-sm-2 mt-2">-->
<!--                         <input type="text" class="form-control form-control-sm" name="" placeholder="Ac Number" style="margin-left: -10px;">-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
                  <!-- Row End 1 -->
                  <!-- Row start 2 -->
<!--                <div class="row">-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-group row">-->
<!--                      <label class="col-sm-5 col-form-label text-right" id="hello">Borrower Ac No</label>-->
<!--                      <div class="col-sm-7 mt-2">-->
<!--                      <input type="text" value="<?php echo $row['accno'];?>" class="form-control form-control-sm">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="form-group row">-->
<!--                       <label class="col-sm-4 col-form-label text-right" id="hello">Borrower Name</label>-->
<!--                       <div class="col-sm-5 mt-2">-->
<!--                       <input type="text" value="<?php echo $row['firstname_bd'];?>" class="form-control form-control-sm">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
                 <!-- Row End 2 -->

                  <!-- Row start 3 -->
<!--                <div class="row">-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-group row">-->
<!--                      <label class="col-sm-5 col-form-label text-right" id="hello">D.P Due-1</label>-->
<!--                      <div class="col-sm-7 mt-2">-->
<!--                      <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Payment">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="form-group row">-->
<!--                       <label class="col-sm-4 col-form-label text-right" id="hello">D.P Due-2</label>-->
<!--                       <div class="col-sm-5 mt-2">-->
<!--                       <input type="text" name="account_name" id="account_name" class=" form-control form-control-sm" placeholder="Payment">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
                 <!-- Row End 2 -->
                 <!-- Row start 3 -->
<!--                <div class="row">-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-group row">-->
<!--                      <label class="col-sm-5 col-form-label text-right" id="hello">EMI Amount</label>-->
<!--                      <div class="col-sm-7 mt-2">-->
<!--                      <input type=" text" class="form-control form-control-sm" name="" placeholder="₹">-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-8">-->
<!--                    <div class="form-group row">-->
<!--                        <label class="col-sm-4 col-form-label text-right" id="hello">Cash/Bank</label>-->
<!--                        <div class="col-sm-2 mt-2">-->
<!--                        <select class="form-control form-control-sm" >-->
<!--                          <option>Bank</option>-->
<!--                          <option>Cash</option>-->
<!--                        </select>-->
<!--                        </div>-->
<!--                        <div class="col-sm-3 mt-2">-->
<!--                       <select class="form-control form-control-sm">-->
<!--                         <option>NEFT</option>-->
<!--                         <option>UPI</option>-->
<!--                         <option>GPAY</option>-->
<!--                       </select>-->
<!--                       </div>-->
<!--                    </div>-->
<!--                  </div>-->
                  <!--<div class="col-md-4">
<!--                    <div class="form-group row">-->
<!--                       <div class="col-sm-3 mt-2">-->
<!--                       <select class="form-control form-control-sm">-->
<!--                         <option>NEFT</option>-->
<!--                         <option>UPI</option>-->
<!--                         <option>GPAY</option>-->
<!--                       </select>-->
<!--                       </div>-->
<!--                    </div>-->
<!--                  </div>-->-->
<!--                </div>-->
                <!-- Row end 3 -->
                <!-- Row Start 4 -->
<!--                <div class="row">-->
<!--                   <div class="col-md-4">-->
<!--                      <div class="form-group row">-->
<!--                       <label class="col-sm-5 col-form-label text-right" id="hello">Line Colle Date</label>-->
<!--                        <div class="col-sm-7 mt-2">-->
<!--                        <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Line Colle Date">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                   <div class="col-md-8">-->
<!--                      <div class="form-group row">-->
<!--                         <label class="col-sm-4 col-form-label text-right" id="hello">Book/Receipt No</label>-->
<!--                         <div class="col-sm-2 mt-2">-->
<!--                         <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Book No">-->
<!--                         </div>-->
<!--                          <div class="col-sm-3 mt-2">-->
<!--                         <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Book No">-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
                   <!-- <div class="col-md-4">
<!--                      <div class="form-group row">-->
<!--                        <div class="col-sm-6 mt-2">-->
<!--                        <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Receipt No">-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div> -->-->
<!--                </div>-->
                <!--Row end 4 -->
               
                <!-- Row start 5 -->
<!--                 <div class="row">-->
                    <!-- <div class="col-md-4">
<!--                      <div class="form-group row">-->
<!--                         <label class="col-sm-5 col-form-label text-right" id="hello">Phone No</label>-->
<!--                         <div class="col-sm-7 mt-2">-->
<!--                         <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Phone No">-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div> -->-->
<!--                    <div class="col-md-4">-->
<!--                      <div class="form-group row">-->
<!--                          <label class="col-sm-5 col-form-label text-right" id="hello">Existing  Mobile No </label>-->
<!--                          <div class="col-sm-7 mt-2">-->
<!--                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Existing No">-->
<!--                          </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-8">-->
<!--                      <div class="form-group row">-->
<!--                         <label class="col-sm-4 col-form-label text-right" id="hello">Revised Mobile No</label>-->
<!--                         <div class="col-sm-5 mt-2">-->
<!--                         <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Revised No">-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
                    <!-- Row start 5 -->
<!--                     <div class="row">-->
<!--                   <div class="col-md-10">-->
<!--                      <div class="form-group row">-->
<!--                       <label class="col-sm-2 col-form-label text-right" id="">Description</label>-->
<!--                        <div class="col-sm-10 mt-2">-->
<!--                        <input type="text" class="form-control form-control-sm" placeholder="Description" >-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--          <table>-->
<!--             <thead>-->
<!--                <tr>-->
<!--                  <td>-->
<!--                    <div class="row" style="margin-bottom: -1.5rem;">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Borrower Name</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Name">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-6">-->
<!--                         <div class="form-group row">-->
<!--                       <label class="col-sm-4 col-form-label text-right" id="hello">Finance Date</label>-->
<!--                       <div class="col-sm-6 mt-2">-->
<!--                      <input type="date" name="aadhar_number" id="aadhar_number" class="form-control form-control-sm" placeholder="dd/mm/yyyy" >-->
<!--                          </div>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </td>-->
<!--               </tr> -->
<!--               <tr>-->
<!--                  <td>-->
<!--                    <div class="row" id="linespace">-->
<!--                      <div class="col-md-5">-->
<!--                       <div class="form-group row">-->
<!--                           <label class="col-sm-4 col-form-label text-right" id="hello">Executing Code/Name</label>-->
<!--                           <div class="col-sm-3 mt-4">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Code">-->
<!--                           </div>-->
<!--                           <div class="col-sm-5 mt-4">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Name">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                       <div class="col-md-6">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4  mt-3 col-form-label text-right" id="hello">Due Date</label>-->
<!--                           <div class="col-sm-6 mt-4">-->
<!--                          <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Due Date">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
                      <!-- <div class="col-md-4">
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-3 col-form-label text-right" id="hello">Model</label>-->
<!--                           <div class="col-sm-6 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Model">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div> -->-->
<!--                    </div>-->
<!--                  </td>-->
<!--               </tr> -->
<!--               <tr>-->
<!--                  <td>-->
<!--                    <div class="row">-->
<!--                     <div class="col-md-5">-->
<!--                       <div class="form-group row">-->
<!--                           <label class="col-sm-4 col-form-label text-right" id="hello">Vehicle Class/No</label>-->
<!--                           <div class="col-sm-3 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Code">-->
<!--                           </div>-->
<!--                           <div class="col-sm-5 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Name">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-6">-->
<!--                       <div class="form-group row">-->
<!--                           <label class="col-sm-4 col-form-label text-right" id="hello">Present Emi/Amount</label>-->
<!--                           <div class="col-sm-2 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Code">-->
<!--                           </div>-->
<!--                           <div class="col-sm-4 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Name">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </td>-->
<!--                </tr> -->
<!--                <tr>-->
<!--                  <td>-->
<!--                    <div class="row">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Model</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Vehicle No">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-6">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Dp1 due</label>-->
<!--                           <div class="col-sm-6 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Dp1 due">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
                    <!--  <div class="col-md-4">
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-3 col-form-label text-right" id="hello">Model</label>-->
<!--                           <div class="col-sm-6 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Model">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div> -->-->
<!--                    </div>-->
<!--                  </td>-->
<!--               </tr> -->
<!--               <tr>-->
<!--                  <td>-->
<!--                    <div class="row">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Dp1</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Model">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                       <div class="col-md-6">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Dp2 due</label>-->
<!--                           <div class="col-sm-6 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Dp2 due">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </td>-->
<!--               </tr> -->
<!--               <tr>-->
<!--                  <td>-->
<!--                    <div class="row">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Dp2</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Dp1">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-6">-->
<!--                         <div class="form-group row">-->
<!--                           <label class="col-sm-4 col-form-label text-right" id="hello">EMI Due</label>-->
<!--                           <div class="col-sm-6 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="EMI Due">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                 </td>-->
<!--             </tr>-->
<!--             <tr>-->
<!--                  <td>-->
<!--                    <div class="row">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Finance Amount</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Dp2">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                      <div class="col-md-6">-->
<!--                         <div class="form-group row">-->
<!--                           <label class="col-sm-4 col-form-label text-right" id="hello">Total Amount</label>-->
<!--                           <div class="col-sm-6 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Amount">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                 </td>-->
<!--             </tr> -->
<!--             <tr>-->
<!--                  <td>-->
<!--                    <div class="row">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Intrest Amount</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Finance Amount">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
                      <!--<div class="col-md-5">
<!--                         <div class="form-group row">-->
<!--                           <label class="col-sm-4 col-form-label text-right" id="hello">Total</label>-->
<!--                           <div class="col-sm-7 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Amount">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->-->
<!--                    </div>-->
<!--                 </td>-->
<!--             </tr> -->
<!--             <tr>-->
<!--                 <td>-->
<!--                    <div class="row">-->
<!--                      <div class="col-md-5">-->
<!--                         <div class="form-group row">-->
<!--                            <label class="col-sm-4 col-form-label text-right" id="hello">Total</label>-->
<!--                           <div class="col-sm-8 mt-2">-->
<!--                           <input type="text" name="account_name" id="account_name" class="form-control form-control-sm" placeholder="Total">-->
<!--                           </div>-->
<!--                         </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                 </td>-->
<!--             </tr>   -->
<!--           </thead>-->
<!--         </table>-->
<!--         <input type="submit" name="submit">-->
<!--      </form>-->
<!--                   </div>-->
<!--                </div>-->
                
<!--            </div>-->
<!--        </div>-->
        
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<!--        <?php include("footer.php")?>-->
        <!-- partial -->
<!--      </div>-->
      <!-- main-panel ends -->
<!--    </div>-->
    <!-- page-body-wrapper ends -->
<!--  </div>-->
  <!-- container-scroller -->

  <!-- plugins:js -->
<!--  <script src="vendors/base/vendor.bundle.base.js"></script>-->
  <!-- endinject -->
  <!-- Plugin js for this page-->
<!--  <script src="vendors/chart.js/Chart.min.js"></script>-->
<!--  <script src="vendors/datatables.net/jquery.dataTables.js"></script>-->
<!--  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
<!--  <script src="js/off-canvas.js"></script>-->
<!--  <script src="js/hoverable-collapse.js"></script>-->
<!--  <script src="js/template.js"></script>-->
  <!-- endinject -->
  <!-- Custom js for this page-->
<!--  <script src="js/dashboard.js"></script>-->
<!--  <script src="js/data-table.js"></script>-->
<!--  <script src="js/jquery.dataTables.js"></script>-->
<!--  <script src="js/dataTables.bootstrap4.js"></script>-->
<!--  <script src="js/file-upload.js"></script>-->
  
  
<!--</body>-->

<!--</html>-->






