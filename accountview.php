<!DOCTYPE html>
<?php
session_start();
include 'database1.php';
$result = mysqli_query($connection,"SELECT * FROM account_details");
?>
<html lang="en">
<head>
      <script>
         function disableClick(){
           document.onclick=function(event){
              if (event.button == 2) {
            alert('sorry we cant serve you');
            return false;
             }
           }
         }
       </script>
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
</head>
<body onLoad="disableClick()">
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
              <h2 class="text-">View Account</h2>
              <i class="mdi mdi-home text-muted hover-cursor"></i>
              <span class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</span>
                <span class="text-primary mb-0 hover-cursor">View Account</span> 
               <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>
            </div>
            <div class="col-md-2">
              <a href="account.php" class="btn btn-success btn-rounded btn-fw">
                <i class="mdi mdi-library-plus"> </i>  Add Account
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
                              <div class="col-sm-4 my-1">
                                 <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                              </div>
                            </div>
                         </div>
                       </form>
                  <div class="table-responsive">
                    <table id="account" class="table table-bordered text-center">
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                      <thead class="bg-danger">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Adhar No</th>
                            <th>Pan No</th>
                            <th>DOB</th>
                            <th>Phone No</th>
                            <th>Action</th>
                      </thead>
                      <tbody>
                           <?php
                            $i=1;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row["account_name"]; ?></td>
                          <td><?php echo $row["aadhar_number"]; ?></td>
                          <td><?php echo $row["pan_number"]; ?></td>
                          <td><?php echo $row["dob"]; ?></td>
                          <td><?php echo $row["phone1"]; ?></td>
                          <td>
                             <a type="button" class="btn btn-outline-success btn-sm " href="edit-account.php? id=<?php echo $row["id"];?>">
                              Edit
                              <i class="mdi mdi-box-cutter"></i>                        
                            </a>
                              <a type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm_delete();" href="account_delete.php? id=<?php echo $row["id"]; ?>">
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
  
  <script>
  function confirm_delete(){

       confirmDelete = confirm("R u sure want to delete");

       if(confirmDelete){

       	  return true;
       }
       else{

       	return false;
       }
}
</script>
</body>

</html>
<script>
    $(document).ready(function(){
   
     $('#account').DataTable();
 
   });


</script>

