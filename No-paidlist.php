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
            <div class="col-md-8">
              <h2 class="text-">No Paid List View </h2>
              <i class="mdi mdi-home text-muted hover-cursor"></i>
              <span class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</span>
                <span class="text-primary mb-0 hover-cursor">No Paid List view</span>
            </div>
            <div class="col-md-4 text-right">
              <a href="add-nopaidlist.php" class="btn btn-success btn-rounded btn-fw">
                <i class="mdi mdi-library-plus"> </i> Generate No Paid List view
              </a>
            </div> 
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <p class="card-description"></p>
                <div class="card-body dashboard-tabs p-0">
                     <form>
                         <div class="row">
                           <div class="col-md-12">
                            </div>
                         </div>
               <div class="table-responsive">
                 <table class="table table-bordered text-center">
                    <thead class="bg-danger">
                      <th>S NO</th>
                      <th>Customer ID </th>
                      <th>Customer Name </th>
                      <th>Previous pay Date</th>
                      <th>No of Inst</th>
                      <th>Amount</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                    <tr>
                      <td>01</td>
                      <td>201</td>
                      <td>raju</td>
                      <td>31/01/2020</td>
                      <td>20</td>
                      <td>3000</td>
                           <td>
                            <a type="button" class="btn btn-outline-success btn-sm ">
                                  view
                                <i class="mdi mdi-box-cutter"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>02</td>
                          <td>202</td>
                          <td>raju</td>
                          <td>31/01/2020</td>
                          <td>25</td>
                          <td>3000</td>
                           <td>
                            <a type="button" class="btn btn-outline-success btn-sm ">
                                 Edit
                             <i class="mdi mdi-box-cutter"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </form>
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
  <!-- End custom js for this page-->
   <!--<script>
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
-->
</body>

</html>

