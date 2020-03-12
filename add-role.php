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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="add_role.js"></script>
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
              <h2 class="">Add Role</h2>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                <p class="text-primary mb-0 hover-cursor">Add Role</p>
              </div>
            </div>
          </div>
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    Add Role
                  </p>
                  <form class="forms-sample" action="addrole_action.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <h4>Manage Permissions</h4>
                    <div class="col-md-6">
                    <table class="table table-stripped table-hover">
                    <tbody>
                    <tr>
                    <td><strong>Users</strong></td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div  id="check"><span><input type="checkbox" class="selectall" data-parent="0" name="users" value="1"  id="checkall" ></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Company Creation</strong></td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checkbox" id="check" ><span><input type="checkbox" data-parent="0" name="company" value="1" id="2" class="checkbox"  ></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>View User</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checkbox"><span><input type="checkbox" data-parent="0" name="view_user" value="1" id="3" class="checkbox"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Masters</strong></td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="masters" value="borrowers" id="master_group" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Account Groups</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="account_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Accounts</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounts_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Vehicle Brands</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="vechicle_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Recovery Manager Excutive</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td>
                      <div class="checker" id="uniform-1">
                        <span><input type="checkbox" data-parent="0" name="recovery_masters" value="1" id="1" class="master"></span>
                      </div>
                      <label class="" for="1"></label>
                    </td>
                    </tr>
                    <tr>
                    <td>Branches</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="branches_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Book Numbers</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="book_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Line Modifications</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="line_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Narrations</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="narrations_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Dealers</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="dealers_masters" value="1" id="1" class="master"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>


                    <tr>
                    <td><strong>Borrowers</strong></td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="borrowers" value="1" id="borrowers_group" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>A</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="a_borrowers" value="1" id="1" class="borrowers"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>B</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="b_borrowers" value="1" id="1" class="borrowers"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>C</td>
                    <td>
                      <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="c_borrowers" value="1" id="1" class="borrowers"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Transaction</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="transaction" value="1" id="transaction_group" class=""></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Payment Vouchers </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="payment_transaction" value="1" id="1" class="transaction"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Receipt Vouchers </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="receipt_transaction" value="1" id="1" class="transaction"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Journal Vouchers</td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="journal_transaction" value="1" id="1" class="transaction"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Contra Vouchers</td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="contra_transaction" value="1" id="1" class="transaction"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Reports </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="reports_transaction" value="1" id="1" class="transaction"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Account Reports</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="account_report" value="borrowers" id="account_reports" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Day Book  </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="day_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Cash/Bank </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="cash_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>General Ledger</td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="general_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Cash Flow Statement</td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="cashstatment_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Trail Balances  </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="trai_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Profit & Loss   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="profitloss_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Balance Sheet   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="balance_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Profit/Loss Adjustment   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="profitadjustment_account" value="1" id="1" class="account"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                     <tr>
                    <td><strong>Int.Calculation</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="calculations" value="1" id="int_calculation" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Int.Calcn on PTS   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="calcnpts_calculation" value="1" id="1" class="int_cal"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> Int.Calcn on Loans  </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="calcnloans_calculation" value="1" id="1" class="int_cal"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Int.Calcn on Loans Summary</td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="calcnsummary_calculation" value="1" id="1" class="int_cal"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Int.Calcn on 15G Loans </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="calcn15g_calculation" value="1" id="1" class="int_cal"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>HYD Int Report   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="hydint_calculation" value="1" id="1" class="int_cal"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                     <tr>
                    <td><strong>Special Reports</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="special_reports" value="1" id="special_report" class="stcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> Accounts    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounts_special" value="1" id="1" class="special"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  Vehicles   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="vechicles_special" value="1" id="1" class="special"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>Branches </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="branches_special" value="1" id="1" class="special"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                     <tr>
                    <td><strong>Utilities</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="Utilities" value="1" id="utilities_group" class="utilities_group"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> Accounts    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounts_utilities" value="1" id="1" class="utilities"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  Vehicles   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="vechicles_utilities" value="1" id="1" class="utilities"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                     <tr>
                    <td><strong>Code Identification</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="Identification" value="1" id="code_identification" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> Accounts    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounts_utilities" value="1" id="1" class="code"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  Vehicles   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="vechicles_utilities" value="1" id="1" class="code"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Direct run</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="direct_run" value="1" id="direct_run" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> Accounts    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounts_direct" value="1" id="1" class="direct"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  Vehicles   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="vechicles_direct" value="1" id="1" class="direct"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Exit</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="exit" value="1" id="exit_group" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> Accounts    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounts_exit" value="1" id="1" class="exit"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  Vehicles   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="vechicles_exit" value="1" id="1" class="exit"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Branch</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="branch" value="1" id="branch_group" class="styleck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td> View Branch    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="view_branch" value="1" id="1" class="branch"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  Add Branch   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="add_branch" value="1" id="1" class="branch"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Assets</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="assets" value="1" id="assets_group" class=""></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>  View Assets     </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="view_assets" value="1" id="1" class="assets"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>   Add Assets    </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="add_assets" value="1" id="1" class="assets"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>    Manage Assets Types   </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="manage_assets" value="1" id="1" class="assets"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Accounting</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="accounting" value="1" id="accounting_group" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>   Chart Accounts     </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="chart_accounting" value="1" id="1" class="accounting"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>    Journal     </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="journal_accounting" value="1" id="1" class="accounting"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Expenses</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="expenses" value="1" id="expenses_group" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>    view  Expenses      </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="view_expenses" value="1" id="1" class="expenses"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>     Add Expenses      </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="add_expenses" value="1" id="1" class="expenses"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>     Manage Expenses Types </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="manage_expenses" value="1" id="1" class="expenses"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>Other Income</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="other_income" value="1" id="other_group" class=""></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>     view other income       </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="view_income" value="1" id="1" class="other"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>      Add other income      </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="add_income" value="1" id="1" class="other"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td>      Manage Other income Type  </td>
                    <td><i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                    </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="manage_income" value="1" id="1" class="other"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    <tr>
                    <td><strong>City</strong></td>
                     <td> <i class="mdi mdi-information-variant" data-toggle="tooltip" data-original-title="Reschedule Loans"></i>
                   </td>
                    <td><div class="checker" id="uniform-1"><span><input type="checkbox" data-parent="0" name="city" value="1" id="1" class="styled pcheck"></span></div>
                    <label class="" for="1"></label></td>
                    </tr>
                    </tbody>
                    </table>
                  </div>
                  <button class="btn btn-success" name="submit">Submit</button>
                </form>
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
