<!DOCTYPE html>
<?php
session_start();
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
    .table {
    background-color: #0f13103b;
    }
    .form-group {
        
    margin-bottom: 1.0rem;
    }
    .large-td{
      width: 35%;
    }
    .small-td{
      width: 15%;
    }
    .medium-input{
      width:68%;
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
              <h2 class="">Contra voucher</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Contra voucher</p>
                <span style="color:red"><?php  if(isset($_SESSION['msg'])) { echo $_SESSION['msg'] ; unset($_SESSION['msg']); } ?></span>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="addcontra_insert.php" method="POST" >
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right">Date</label>
                          <div class="col-sm-6 mt-2">
                           <input type="date" name="dop" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5">
                       <div class="form-group row">
                      <label class="col-sm-4 col-form-label text-right">Vocher No</label>
                      <div class="col-sm-6 mt-2">
                      <input type="text" name="vocher_no" id="Pan_number" class="form-control form-control-sm" placeholder="Enter Journal No">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right">Cash Account
                           </label>
                           <div class="col-sm-6 mt-2">
                            <select class="form-control form-control-sm" name="cash_account" id="">
                              <option>select1</option>
                              <option>select2</option>
                              <option>select3</option>
                            </select>
                           </div>
                         </div>
                      </div>
                      <div class="col-md-5">
                         <div class="form-group row"> 
                           <label class="col-sm-4 col-form-label text-right">Debit/Credit</label>
                           <div class="col-sm-6 mt-2">
                            <select class="form-control form-control-sm" name="debit" id="">
                              <option>select1</option>
                              <option>select2</option>
                              <option>select3</option>
                            </select>
                           </div>
                         </div>
                      </div>
                    </div>
                 <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <th>To/Dr Account Name</th>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Instrument No</th>
                      </thead>
                       <tbody>
                        <tr id="append_data">
                        <td class="large-td"><input type="text" name="account_name[]" value="" class="form-control form-control-sm"></td>
                        <td class="small-td"><input type="text" name="amount[]" class="form-control form-control-sm"></td>
                         <td class="large-td"><select class="form-control form-control-sm" name="description[]" id="">
                            <option>Select text areaaa 11</option>
                            <option>Select text areaaa 22</option>
                          </select></td>
                          <td class="small-td"><input type="text" name="instrument_no[]" class="form-control form-control-sm"></td>
                          <td><span class="add-row">+</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                 <div class="row mt-4">
                    <div class="col-md-4 mt-2 text-right">Total</div>
                      <div class="col-md-2 ml-3">
                         <div class="form-group row">
                           <div class="">
                           <input type="text" name="total" class="form-control form-control-sm medium-input" >
                           </div>
                         </div>
                      </div>
                        <div class="col-md-5 ml-auto">
                          <div class="text-right">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                             Save
                            </button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                             Save&Print
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
  $(document).ready(function(){
    var i =1;
    $(".add-row").click(function(){                           
      $("#append_data").after('<tr class="added-row"><td><input class="form-control form-control-sm" type="text" name="s.no" value=""></td><td><input class="form-control form-control-sm" type="text" name="vocher_type"></td><td><select class="form-control form-control-sm" name="" id=""><option>Select Text areaaa 11</option><option>Select text areaaa 22</option></select></td><td><input class="form-control form-control-sm" type="text" name="actions"></td><td><span class="remove-row">X</span></td></tr>'); 
    });

    $(document).on("click" , ".remove-row", function(){
      console.log("clicked");
      $(this).closest(".added-row").remove();
    });
  });
</script>
  <!-- End custom js for this page-->
</body>

</html>

c