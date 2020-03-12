<!DOCTYPE html>
<?php

session_start();

include 'database.php';

$idno = $_REQUEST['id'];
$result = mysqli_query($connection,"SELECT * FROM vehicle_info where id='$idno' ");
$row = mysqli_fetch_array($result);
$result1 = mysqli_query($connection,"SELECT * FROM vehicle_info ");
//$row1 = mysqli_fetch_array($result);

//echo $row["vehiclebrand"];
//exit();

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
              <h2 class="">Vehicle Brand</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Vehiclebrand</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="update_vehiclebrand.php" method="POST" >
                    <p class="card-description">
                    </p>
                 <!--   <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-right">Vehicle Brand Add</label>
                          <div class="col-sm-9">
                            <input type="text" name="brandedition" id="brandedition" value="<?php echo $row["vehiclebrandedition"];?>"  class="form-control form-control-sm" placeholder=" Enter Brand Edition" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3"> 
						<button type="submit" name="addbrand" id="addbrand" class="btn btn-success btn-icon-text">
                         Add Brand
                        </button> </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                            <input type="text" name="id" value="<?php echo $row["id"];?>"  hidden>  
                         <label class="col-sm-3 col-form-label text-right">Vehicle Brand</label>
                          <div class="col-sm-9">
                               <?php
                        if (mysqli_num_rows($result1) > 0) {
                        ?>
                             <select class="form-control form-control-sm" name="vehiclebrand" id="vehiclebrand" value="<?php echo $row["vehiclebrand"];?>">
                                 <?php
                            $i=1;
                            while($row1 = mysqli_fetch_array($result1)) {
                            ?>
                              <option><?php echo $row1["vehiclebrand"]; ?></option>
                             <?php
                            $i++;
                            }
                            ?>
                            </select>
                          </div>
                          <?php
                    
                        }
                        ?>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-right">Vehicle Class</label>
                          <div class="col-sm-9">
                            <input type="text" name="vehicleclass" id="vehicleclass" value="<?php echo $row["vehicleclass"];?>" class="form-control form-control-sm" placeholder=" Enter Vehicle Class">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                  
                   <div class="row">
                    <div class="col-md-9">
                      <div class="text-right">
                     <!--    <button type="reset" name="reset" value="reset" class="btn btn-danger btn-icon-text">
                         Cancel
                        </button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                         Update
                        </button> -->
                        <button type="submit" name="update_vehiclebrand" class="btn btn-outline-success btn-sm " href="update_vehiclebrand.php? id=<?php echo $row["id"];?>">
                         Update
                         <i class="mdi mdi-box-cutter"></i>
                         </button>
                         <a type="button" class="btn btn-outline-success btn-sm " href="vehiclebrand.php">
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
  <!-- container-scroller -->

    <!-- Script Src Footer-->
  <?php include("scriptfooter.php")?>
 <!-- End ScriptFooter-->
</body>

</html>

