<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
    <style>
        .table {
          background-color: #0f13103b;
             }
        #hello{
         line-height:0.4rem!important;
              }
        .modal-content {
         width:73%!important;
               }

     </style>
 </head>
<body>
   <div class="container-scroller">
     <?php include("navbar.php")?>
    <div class="container-fluid page-body-wrapper">
      <?php include ("sidebar.php")?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <h2 class="">Borrower Imports</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Borrower Imports</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group row">
                         <label class="col-sm-4 col-form-label text-right" id="hello">
                           File Imports
                         </label>
                         <div class="col-sm-4 mt-1">
                             <select class="form-control form-control-sm" name="" id="">
                              <option>Borrower Master</option>
                              <option>Borrower Receipt</option>
                              <option>DP1 INST</option>
                              <option>DP2 INST</option>
                              <option>EMI INST</option>
                              <option>Payment Vouchers</option>
                              <option>Receipt Vouchers</option>
                              <option>Journal Vouchers</option>
                              <option>Contra Vouchers</option>
                              <option>Capital Account</option>
                              <option>Account Master</option>
                              <option>Branches</option>
                              <option>Book Numbers</option>
                              <option>Narrations</option>
                            </select>
                          </div>
                         <div class="col-sm-4 mt-1">
                         <input type="file" name="aadharimg1" class="file-upload-default">
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
                    <div class="col-md-7 text-right">
                      <button type="submit" name="button" value="button" class="btn btn-primary btn-icon-text">
                        Submit
                      </button>
                    </div>
                    <div class="col-md-3 mt-2">
                      
                      
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

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

