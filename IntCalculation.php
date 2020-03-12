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
  .modal-content {
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
            <div class="col-md-12">
              <h2 class="">Int.Calculation</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Int.Calculation</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" action="addvehicle.php" method="POST" >
                    <p class="card-description"></p>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello"> From Date</label>
                          <div class="col-sm-7 mt-2">
                           <input type="date" name="" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                       <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">To Date</label>
                      <div class="col-sm-7 mt-2">
                      <input type="date" name="" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Rate of Intrest</label>
                          <div class="col-sm-7 mt-2">
                           <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Rate of Intrest">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">Intrest Type</label>
                      <div class="col-sm-7 mt-2">
                      <select class="form-control form-control-sm" name="" id="">
                      <option>Summary</option>
                      <option>Details</option>
                      </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Name</label>
                          <div class="col-sm-7 mt-2">
                           <input type="text" name="" id="" class="form-control form-control-sm" placeholder="Enter Name">
                          </div>
                        </div>
                      </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Groups
                           </label>
                           <div class="col-sm-7 mt-2" id="hi">
                            <select id="change" class="form-control form-control-sm">
                            <option value="Particular">select1</option>
                            <option value="All">select2</option>
                            </select>
                            <div class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Modal title</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                  <div class="col-md-2">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="form-group">
                                        <div>
                                          <label class="form-check-label" id="hi">
                                            <input type="checkbox" class="form-check-input">
                                            select box1
                                          <i class="input-helper"></i></label>
                                        </div>
                                        <div>
                                          <label class="form-check-label" id="hi">
                                            <input type="checkbox" class="form-check-input">
                                            select box2
                                          <i class="input-helper"></i></label>
                                        </div>
                                        <div>
                                          <label class="form-check-label" id="hi">
                                            <input type="checkbox" class="form-check-input">
                                            select box3
                                          <i class="input-helper"></i></label>
                                        </div>
                                        <div>
                                          <label class="form-check-label" id="hi">
                                            <input type="checkbox" class="form-check-input">
                                            select box4
                                          <i class="input-helper"></i></label>
                                        </div>
                                        <div>
                                          <label class="form-check-label" id="hi">
                                            <input type="checkbox" class="form-check-input">
                                            select box5
                                          <i class="input-helper"></i></label>
                                        </div>
                                      </div>  

                                  </div>
                                  <div class="col-md-2">
                                    
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save</button>
                            </div>
                                </div>
                                </div>
                                </div>
                           </div>
                         </div>
                      </div>
                    </div>
                  </form>
                  <form>
                   <div class="row mt-3">
                        <div class="col-md-9">
                          <div class="text-right">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                             Save
                            </button>
                          </div>
                        </div>
                   </div>
                 </form>
              </div>
            </div>
          </div>
        </div>
                  
                
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
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
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
</body>

</html>
