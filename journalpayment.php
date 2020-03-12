<?php
require("database1.php");
$select = mysqli_query($connection, "SELECT * FROM journal_voucher");

?>
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
      .btn{
    padding: -0.25rem 0.5rem!important;
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
            <div class="col-md-10">
              <h2 class="text-">Journal View </h2>
              <i class="mdi mdi-home text-muted hover-cursor"></i>
              <span class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</span>
                <span class="text-primary mb-0 hover-cursor">Journal view</span>
            </div>
           <!-- <div class="col-md-4">
              <form>
                <div class="">
                  <div class="input-group"> 
                    <input type="text" class="form-control form-control-sm mt-1" id="inlineFormInputGroupUsername" placeholder="Search" style="background-color: #ffff!important;">
                    <div class="input-group-prepend">
                      <div class="input-group-text"  style="padding: 10.5px 0.55rem; margin-top:3px;"><i class="mdi mdi-magnify"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div> -->
            <div class="col-md-2">
              <a href="add-journal.php" class="btn btn-success btn-rounded btn-fw">
                <i class="mdi mdi-library-plus"> </i>  Add Journal
              </a>
            </div> 
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                     <form>
                         <div class="row">
                           <div class="col-md-12">
                            </div>
                         </div>
                       </form>
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <?php  if (mysqli_num_rows($select) > 0) {   ?>
                      <thead class="bg-danger">
                      <thead class="bg-danger">
                        <th>S NO</th>
                        <th>Date</th>
                        <th>Voucher No</th>
                        <th>Credit Account Name</th>
                        <th>Debit Account Name</th>
                        <th>Amount</th>
                        <th>Action</th>
                       </thead>
                      <tbody>
                          <?php
                            $i=1; while($fetch = mysqli_fetch_array($select)) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <?php $id=$fetch['journal_id'];
                          $sql3="SELECT * FROM journal_voucher_details WHERE payment_id=$id ";
                                      $result3 = mysqli_query($connection,$sql3);
                                      $row3 = mysqli_fetch_array($result3);?>
                        <td><?php echo $fetch['date_of_payment'];?></td>
                     
                          <td><?php echo $fetch['journal_no'];?></td>
                          <td>raju</td>
                          <td><?php echo $row3['account_name'];?></td>
                          <td><?php echo $row3['amount'];?></td>
                           <td>
                               <a type="button" class="btn btn-outline-success btn-sm ">
                                  Edit
                                  <i class="mdi mdi-box-cutter"></i>                        
                                </a>
                                <a type="button" class="btn btn-outline-danger btn-sm">
                                  Delete
                                  <i class="mdi mdi-delete"></i>                        
                                </a>
                          </td>
                        </tr>
                        <?php
                            $i++;
                            }
                            ?>
                      </tbody>
                    </table>
                     <?php    } ?>
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

