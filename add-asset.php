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
            <div class="col-md-12 grid-margin">
              <h2 class="">Add Asset</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Add Asset</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Add Role
                  </p>
        <section class="">
            <div class="panel panel-white">
                  <div class="panel-heading">
                      <h6 class="panel-title">Add Asset<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                    <div class="heading-elements">
                    </div>
                </div>
                <form method="POST" action="" accept-charset="UTF-8" class="" name="form" enctype="multipart/form-data"><input name="_token" type="hidden" value="">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="asset_type_id" class=" control-label">Asset Type</label>

                        <select class="form-control" required="required" id="asset_type_id" name="asset_type_id"><option value="1">Eggs</option></select>
                     </div>
            <div class="form-group">
                <label for="current_value" class="">Current Value</label>
                <div class="col-sm-12">
                    <table width="100%" id="current_valuation" class="table table-bordered">
                       <tbody>
                          <tr>
                            <td style="width:5px" class="bg-gray padding"><b>#</b></td>
                            <td class="bg-gray padding"><b>Date of Valuation</b></td>
                            <td class="bg-gray padding"><b>Value Amount</b></td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><input type="text" name="asset_management_current_date[]" class="date-picker form-control is-datepick" 
                            id="inputAssetManagementDateCurrent" placeholder="yyyy-mm-dd" value="" required="">
                            </td>
                            <td>a<div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn blue bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="asset_management_current_value[]" class="form-control decimal-2-places touchspin" 
                            id="inputAssetManagementCurrentValue" placeholder="" value="" required="" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn blue bootstrap-touchspin-up" type="button">+</button></span></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--Hours and Earnings-->
                    <button type="button" class="btn btn-info margin legitRipple" onclick="addRow()">Add Row</button>
                    <button type="button" class="btn btn-info margin legitRipple" onclick="deleteRow()">Delete Row</button>
                </div>
            </div>
            <p class="">
                <small>For assets like Cash and Bank Balance, you can add rows above to store the balance on certain dates. For physical assets like computers and equipment, you can use the rows to show the depreciated value over time. This will be used in Balance Sheet report.</small>
            </p>
            <div class="callout callout-warning no-margin">
                <p>The below is only valid for tangible (physical) assets like equipment, furniture, computers, and vehicles</p>
            </div>
            <div class="form-group">
                <label for="purchase_date" class="">Purchase Date</label>
                <input class="form-control date-picker" placeholder="" name="purchase_date" type="text" id="purchase_date">
            </div>
            <div class="form-group">
                <label for="purchase_price" class="">Purchase Price</label>
                <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn blue bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input class="form-control touchspin" placeholder="" name="purchase_price" type="text" id="purchase_price" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn blue bootstrap-touchspin-up" type="button">+</button></span></div>
            </div>
            <div class="form-group">
                <label for="replacement_value" class="">Replacement Value</label>
                <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn blue bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input class="form-control touchspin" placeholder="" name="replacement_value" type="text" id="replacement_value" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn blue bootstrap-touchspin-up" type="button">+</button></span></div>
            </div>
            <div class="form-group">
                <label for="serial_number" class="">Serial number</label>
                <textarea class="form-control" name="serial_number" cols="50" rows="10" id="serial_number"></textarea>
            </div>
            <div class="form-group">
                <label for="notes" class="">Description</label>
                <textarea class="form-control" name="notes" cols="50" rows="10" id="notes"></textarea>
            </div>
            <div class="form-group">
                <label for="files" class="">Files(doc, pdf, image)</label>
                <input class="form-control" multiple="" rows="3" name="files[]" type="file">
                <div class="col-sm-12">You can select up to 30 files. Please click Browse button and then hold Ctrl button on your keyboard to select multiple files.
                </div>
            </div>
            <div class="form-group">
                <hr>
            </div>
            <p class="bg-navy disabled color-palette">Custom Fields</p>
                    </div>

        <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
            <div class="heading-elements">
                <button type="submit" class="btn btn-primary pull-right legitRipple">Save</button>
            </div>
        </div>
    </form>
    <!-- /.panel-body -->
    </div>
    <!-- /.box -->
                </section>
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

