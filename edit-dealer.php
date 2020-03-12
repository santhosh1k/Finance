<!DOCTYPE html>
<?php

session_start();

include 'database.php';

$idno = $_REQUEST['id'];

$result = mysqli_query($connection,"SELECT * FROM delear_details where id='$idno' ");

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
              <h2 class="">Add Dealer </h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Dealer</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="update_delears.php" method="POST" >
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <input type="text" name="id" value="<?php echo $row["id"];?>"  hidden>  
                          <label class="col-sm-3 col-form-label text-right" id="">Dealer Name</label>
                          <div class="col-sm-9 mt-2">
                            <input type="text" name="delear" id="delear" value="<?php echo $row["delearname"];?>" class="form-control form-control-sm" placeholder=" Enter Dealer Name">
                          </div>
                        </div>
                      </div>
                    </div>
                    
                   <div class="row">
                    <div class="col-md-9">
                      <div class="text-right">
                    <!--    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         update
                        </button> -->
                        <button type="submit" name="update_delear" class="btn btn-outline-success btn-sm " href="update_company.php? id=<?php echo $row["id"];?>">
                            Update
                            <i class="mdi mdi-box-cutter"></i>
                                </button>
                                    <a type="button" class="btn btn-outline-success btn-sm " href="Dealers.php">
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

