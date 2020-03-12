<!DOCTYPE html>
<?php
session_start();
include 'database.php';

$result = mysqli_query($connection,"SELECT * FROM addbranch");
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
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
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
              <h2 class="text-">Branches View </h2>
              <i class="mdi mdi-home text-muted hover-cursor"></i>
              <span class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</span>
                <span class="text-primary mb-0 hover-cursor">Branches</span>
                <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>
            </div>
            <div class="col-md-2">
              <a href="add-branch.php" class="btn btn-success btn-rounded btn-fw">
                <i class="mdi mdi-library-plus"> </i>  Add Branch
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
                    <table id="branches" class="table table-bordered text-center">
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                      <thead class="bg-danger">
                        <th>S NO</th>
                        <th>Branch Name</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                          <?php
                            $i=1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                        <tr>
                          <td><?php echo $i ?></td>
                          <td><?php echo $row["branch"]; ?></td>
                           <td>
                            <a type="button" class="btn btn-outline-success btn-sm " href="edit-branch.php? id=<?php echo $row["id"];?>">
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
                      
                           
                     
                       <tbody>
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
<!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
</body>

</html>
<script>
    $(document).ready(function(){
   
     $('#branches').DataTable();
 
   });


</script>
