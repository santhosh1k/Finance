<!DOCTYPE html>
<?php 
session_start();
include('database.php');
 $query=mysqli_query($connection,"SELECT * FROM `delear_details` WHERE 1") or die(mysqli_error());
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
    .btn {
    padding: 0.75rem 0.5rem;
  </style>
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
              <h2 class="text-">Dealer View</h2>
              <i class="mdi mdi-home text-muted hover-cursor"></i>
              <span class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</span>
                <span class="text-primary mb-0 hover-cursor">Dealer</span>
                <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>
            </div>
            
            <div class="col-md-2">
              <a href="add-dealer.php" class="btn btn-success btn-rounded btn-fw">
                <i class="mdi mdi-library-plus"> </i> Add Dealer
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
                    <table id="delears" class="table table-bordered text-center">
                      <thead class="bg-danger">
                        <th>S NO</th>
                        <th>Dealer Name</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                          <?php
     $i=1;
      while($fetch=mysqli_fetch_array($query))
      {

       ?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $fetch["delearname"];?></td>
                           <td>
                            <a type="button" class="btn btn-outline-success btn-sm " href="edit-dealer.php? id=<?php echo $fetch["id"];?>">
                                Edit
                                <i class="mdi mdi-box-cutter"></i> 
                            </a>
                          </td>
                        </tr>
                        <?php
                        
          $i++;
      } 
                        ?>
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
  <!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
</body>
</html>
<script>
    $(document).ready(function(){
   
     $('#delears').DataTable();
 
   });


</script>