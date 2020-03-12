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
     .table {
     background-color: #0f13103b;
     }
     .row{
     margin-right: -10px;
     margin-left: -1px;
     }
     .large-td{
     width:27%;
     }
     .small-td{
      width:16%;
     }
     .medium-td{
      width:15%;
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
              <h2 class="">Receipt voucher</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Receipt voucher</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   <form class="form-sample" action="addreceipt_insert.php" method="POST" >
                    <p class="card-description">
                    </p>
                   <div class="row">
                      <div class="col-md-0"></div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Date</label>
                          <div class="col-sm-8 mt-2">
                            <input type="Date" name="dop" id="dateofb" class="form-control form-control-sm"  placeholder="dd/mm/yyyy">
                          </div>
                        </div>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="col-md-0"></div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-right" id="hello">Cash/Bank</label>
                          <div class="col-sm-8 mt-2">
                           <select class="form-control form-control-sm" name="bank" id="brand">
                              <option>SBI</option>
                              <option>HDFC</option>
                             </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5">
                       <div class="form-group row">
                      <label class="col-sm-4 col-form-label " id="hello">Vocher/Ref No</label>
                      <div class="col-sm-4 mt-2">
                      <input type="text" name="vocher" id="Pan_number" class="form-control form-control-sm" placeholder=" Vochar No">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                    </div>
                 
                   <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead>
                        <th>To/Dr Account Name </th>
                        <th>Amount</th>
                        <th>Book No</th>
                        <th>Receipt Code</th>
                        <th>Description</th>
                        <th>Instrument No</th>
                      </thead>
                    <tbody>
                        <tr id="append_data">
                          <td class="large-td"><input type="text" name="account_name[]" value="" class="form-control form-control-sm"> </td>
                          <td class="small-td"><input type="text" name="amount[]"class="form-control form-control-sm"></td>
                          <td class="small-td"><input type="text" name="book_no[]" class="form-control 
                          form-control-sm"></td>
                          <td class="medium-td"><input type="text" name="receipt_code[]" class="form-control
                          form-control-sm"></td>  
                          <td class="large-td"><select class="form-control form-control-sm" name="description[]" id=
                            "">
                              <option>Text1</option>
                              <option>Text2</option>
                            </select></td>
                          <td class="medium-td"><input type="text"  name="instrument_no[]" class="form-control form-control-sm"></td>
                          <td><span class="add-row">+</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                   <div class="row mt-4 text-right">
                    <div class="col-md-2"></div>
                      <div class="col-md-3">
                         <div class="form-group row">
                           <label class="col-sm-3" style="max-width:22%;">Total</label>
                           <div class="col-sm-6 mt-0" style="max-width: 54%;">
                           <input type="text" name="total" class="form-control form-control-sm">
                           </div>
                         </div>
                      </div>
                        <div class="col-md-7">
                          <div class="text-right">
                            <button type="submit" name="submit1" value="submit" class="btn btn-primary btn-icon-text">
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
 
  <script>
  $(document).ready(function(){
    var i =1;
    $(".add-row").click(function(){                           
      $("#append_data").after('<tr class="added-row"><td><input class="form-control form-control-sm" type="text" name="s.no" value=""></td><td><input class="form-control form-control-sm" type="text" name="Amount_no"></td><td><input class="form-control form-control-sm" type="text" name="Book_code"></td><td><input class="form-control form-control-sm" type="text" name="Receipt_code"></td> <td><select class="form-control form-control-sm name="" id=""><option> Text1</option><option> Text2</option></select></td><td><input class="form-control form-control-sm" type="text" name="actions"></td><td><span class="remove-row">X</span></td></tr>'); 
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

