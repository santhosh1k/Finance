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

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
        <link rel="stylesheet" href="css/style.css">
        
       
      <style>
         .row {
    margin-bottom: -5.5px;
}
     </style>
  </head>
<body>
     <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include ("navbar.php")?>
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     <?php include ("sidebar.php")?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="" >
            <div class="card-body">
      <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-Borrower-tab" data-toggle="tab" href="#nav-Borrower" role="tab" aria-controls="nav-Borrower" aria-selected="true">Borrower Details</a>
            <a class="nav-item nav-link" id="nav-guarantor1-tab" data-toggle="tab" href="#nav-guarantor1" role="tab" aria-controls="nav-guarantor1" aria-selected="false">Guarantor Details 1</a>
            <a class="nav-item nav-link" id="nav-guarantor2-tab" data-toggle="tab" href="#nav-guarantor2" role="tab" aria-controls="nav-guarantor2" aria-selected="false">Guarantor Details 2</a>
            <a class="nav-item nav-link" id="nav-vehicle-tab" data-toggle="tab" href="#nav-vehicle" role="tab" aria-controls="nav-vehicle" aria-selected="false">Vehicle Details</a>
            <a class="nav-item nav-link" id="nav-finance-tab" data-toggle="tab" href="#nav-finance" role="tab" aria-controls="nav-finance" aria-selected="false">Finance Creation</a>
          </div>
     </nav>
        <div class="tab-content" id="nav-tabContent" >

          <!--Borrower Details tab-->   
        <div class="tab-pane fade show active" id="nav-Borrower" role="tabpanel"  
         aria-labelledby="nav-Borrower-tab">
           <form action="newborrower_insert.php" name="" method="POST"  enctype="multipart/form-data">
           <div class="card">
             <div class="card-body">
              <div class="row">
                 <div class="col-md-4">
                   <div class="form-group row">
                     <label class="col-sm-5 col-form-label text-right" id="hello">Customer ID</label>
                      <div class="col-sm-7 mt-2">
                       <input type="text" name="customer_id" id="account_name" class="form-control form-control-sm" placeholder="Customer Id">
                      </div>
                   </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Finance Date</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="finance_date" id="account_name" class="form-control form-control-sm" placeholder="Finance Date">
                        </div>
                      </div>
                    </div>
                     <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">EMI Date</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="emi_date" id="emi_date" class="form-control form-control-sm" placeholder="EMI Date">
                         </div>
                        </div>
                      </div>
                     </div>
                    <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">First Name</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="firstname_bd" id="account_name" class="form-control form-control-sm" placeholder="First Name">
                        </div>
                      </div>
                     </div>
                     <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Last Name</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="last_name_bd" id="account_name" class="form-control form-control-sm" placeholder="Last Name">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Gender</label>
                         <div class="col-sm-7 mt-2">
                         <select name="gender_name_bd" class="form-control form-control-sm" name="" id="">
                          <option value="male">Male</option>
                          <option value="female">FeMale</option>
                          <option value="transgender">Transgender</option>
                         </select>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                      <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">Date of Birth</label>
                      <div class="col-sm-7 mt-2">
                      <input type="date" name="date_of_birth_bd" id="account_name" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Age</label>
                      <div class="col-sm-7 mt-2">
                        <input type="text" name="age_bd" id="account_name" class="form-control form-control-sm" placeholder="Age">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Occupation</label>
                       <div class="col-sm-7 mt-2">
                       <input type="text" name="occupation_bd" class="form-control form-control-sm" name="" placeholder="Occupation">
                       </div>
                    </div>
                  </div>
                  
                 </div>
                 <div class="row">
                  <div class="col-md-4">
                    <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">House oF</label>
                      <div class="col-sm-7 mt-2">
                      <select name="houseof_bd"class="form-control form-control-sm" name="">
                        <option value="own">Own</option>
                        <option value="rent">Rent</option>
                      </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Mobile1</label>
                      <div class="col-sm-7 mt-2">
                        <input type="text" name="mobile1_bd" id="account_name" class="form-control form-control-sm" placeholder="Mobile Number">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Mobile2</label>
                       <div class="col-sm-7 mt-2">
                       <input type="text" name="mobile2_bd"class="form-control form-control-sm" name="" placeholder="Mobile Number">
                       </div>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">S/o W/o D/o</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="so_wo_do_bd" id="account_name" class="form-control form-control-sm" placeholder="Address">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Door No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="door_no_bd" id="account_name" class="form-control form-control-sm" placeholder="Door No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Flat No/Premsis</label>
                       <div class="col-sm-7 mt-2">
                       <input type="text" name="flatno_premsis_bd" id="account_name" class="form-control form-control-sm" placeholder="Flat No">
                       </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Area</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="area_bd" id="account_name" class="form-control form-control-sm" placeholder="Area">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Landmark</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="landmark_bd" id="account_name" class="form-control form-control-sm" placeholder="Landmark">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Street</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="street_bd" id="account_name" class="form-control form-control-sm" placeholder="Street">
                         </div>
                      </div>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">State</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="state_bd" id="account_name" class="form-control form-control-sm" placeholder="State">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Dist</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="dist_bd" id="account_name" class="form-control form-control-sm" placeholder="Dist">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Mandal</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="mandal_bd" id="account_name" class="form-control form-control-sm" placeholder="Mandal">
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Village</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="village_bd" id="account_name" class="form-control form-control-sm" placeholder="Village">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Pincode</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="pin_code_bd" id="account_name" class="form-control form-control-sm" placeholder="Pincode">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="">KYC obtained</label>
                         <div class="col-sm-7 mt-2">
                          <select id="framework" name="framework[]" multiple class="form-control form-control-sm" >
                              <option value="all">All</option>
                              <option value="aadhar">Aadhar</option>
                              <option value="ration">Ration Card</option>
                              <option value="voter_id">Voter Card</option>
                              <option value="pan">Pan Card</option>
                              <option value="gas">Gas Connection</option>
                              <option value="drl">DRL</option>
                              <option value="pass">Passport</option>
                              <option value="elc">Elc S.no</option>
                          </select>
                         </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 kycbox" id="aadhar">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Aadhar No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="aadhar_no_bd" class="form-control form-control-sm" placeholder="Aadhar No">
                        </div>
                      </div>
                    </div>
                 
                    <div class="col-md-4 kycbox" id="pan">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">PAN No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="pan_no_bd" class="form-control form-control-sm" placeholder="Pan No">
                        </div>
                      </div>
                    </div>
                 
                    <div class="col-md-4 kycbox" id="ration">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Ration Card No</label>
                        <div class="col-sm-7 mt-2">
                        <input type="text" name="ration_no_bd" id="account_name"class="form-control form-control-sm" placeholder="Ration No">
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- gas connection div -->
                  <div class="row kycbox" id="gas">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello"> Gas Consumer No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="gas_consumerno_bd" id="account_name" class="form-control form-control-sm" placeholder=" Gas Consumer No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Gas Company</label>
                        <div class="col-sm-7 mt-2">
                          <select  name="gas_company_bd"class="form-control form-control-sm" name="">
                            <option value="select01">select01</option>
                            <option value="select2">select02</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello"> Gas Dealer</label>
                         <div class="col-sm-7 mt-2">
                         <select name="gas_dealer_bd"class="form-control form-control-sm" name="">
                          <option value="select1">select1</option>
                          <option value="select2">select2</option>
                         </select>
                         </div>
                      </div>
                    </div>
                  </div>
                   <!-- gas connection div  End -->

                  <div class="row ">
                    <div class="col-md-4 kycbox" id="drl">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Driving licence</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="drviving_licence_bd" id="account_name" class="form-control form-control-sm" placeholder="Driving licence">
                         </div>
                       </div>
                     </div>
                     <div class="col-md-4 kycbox" id="pass">
                       <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Passport No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="passport_bd" id="account_name" class="form-control form-control-sm" placeholder="Passport No">
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4 kycbox" id="elc">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Ele Sc No</label>
                           <div class="col-sm-7 mt-2">
                             <input type="text" name="ele_sec_no_bd" class="form-control form-control-sm">
                           </div>
                         </div>
                      </div>
                  </div>
                <div class="row">
                 <div class="col-md-4 kycbox" id="voter_id">
                    <div class="form-group row mt-2">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Voter Id No</label>
                       <div class="col-sm-7 mt-2">
                       <input type="text" name="voter_idno_bd" id="account_name" class="form-control form-control-sm" placeholder="Voter Id">
                       </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group row mt-2">
                      <label class="col-sm-5 col-form-label text-right" id="hello">KYC Upload</label>
                      <div class="col-sm-7 mt-2">
                        <input type="file" name="kyc_upload_bd" class="file-upload-default">
                        <div class="input-group ">
                          <input type="text" name="kyc_upload_bd"class="form-control file-upload-info form-control-sm" disabled placeholder="Adhar">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button"  style="padding: 0.55rem 0.5rem;">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="text-right">
                         <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text btn_tab_1">
                          Save
                         </button> 
                      </div>
                    </div>
                    <div class="col-md-0"></div>
                  </div></div>
           </div>
           
        </div>
        
         <!--Borrower Details tab End-->
         
        <!--Guarantor1 Details Tab-->
        <div class="tab-pane fade" id="nav-guarantor1" role="tabpanel"aria-labelledby="nav-guarantor1-tab">
           <div class="card">
              <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">First Name</label>
                        <div class="col-sm-7 mt-2">
                        <input type="text" name="first_name_gd1" id="account_name" class=" form-control form-control-sm" placeholder="First Name">
                        </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Last Name</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="last_name_gd1" id="account_name" class="form-control form-control-sm" placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Gender</label>
                           <div class="col-sm-7 mt-2">
                           <select name="gendere_gd1"class="form-control form-control-sm" name="" id="">
                            <option value="male">Male</option>
                            <option value="female">FeMale</option>
                            <option value="transgender">Transgender</option>
                           </select>
                           </div>
                          </div>
                        </div>
                     </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">Date of Birth</label>
                      <div class="col-sm-7 mt-2">
                      <input type="date" name="date_of_birthe_gd1" id="account_name" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                       </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Age</label>
                      <div class="col-sm-7 mt-2">
                        <input type="text" name="agee_gd1" id="account_name" class="form-control form-control-sm" placeholder="Age">
                       </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Occupation</label>
                       <div class="col-sm-7 mt-2">
                       <input type="text" name="occupatione_gd1" class="form-control form-control-sm" name="" placeholder="Occupation">
                       </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">House oF</label>
                          <div class="col-sm-7 mt-2">
                          <select  name="houseof_gd1"class="form-control form-control-sm" name="">
                            <option value="own">Own</option>
                            <option value="rent">Rent</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">Mobile1</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="mobile1e_gd1" id="account_name" class="form-control form-control-sm" placeholder="Mobile Number">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Mobile2</label>
                           <div class="col-sm-7 mt-2">
                           <input type="text" name="mobile2e_gd1"class="form-control form-control-sm" name="" placeholder="Mobile Number">
                           </div>
                        </div>
                      </div>
                   </div>
                   <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">S/o W/o D/o</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="so_wo_doe_gd1" id="account_name" class="form-control form-control-sm" placeholder="Address">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Door No</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="door_noe_gd1" id="account_name" class="form-control form-control-sm" placeholder="Door No">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Flat No/Premsis</label>
                           <div class="col-sm-7 mt-2">
                           <input type="text" name="flatno_premsise_gd1" id="account_name" class="form-control form-control-sm" placeholder="Flat No">
                           </div>
                          </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">Area</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="areae_gd1" id="account_name" class="form-control form-control-sm" placeholder="Area">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Landmark</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="landmarke_gd1" id="account_name" class="form-control form-control-sm" placeholder="Landmark">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                             <label class="col-sm-5 col-form-label text-right" id="hello">Street</label>
                             <div class="col-sm-7 mt-2">
                             <input type="text" name="streete_gd1" id="account_name" class="form-control form-control-sm" placeholder="Street">
                             </div>
                          </div>
                        </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">State</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="state_gd1" id="account_name" class="form-control form-control-sm" placeholder="State">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Dist</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="dist_gd1" id="account_name" class="form-control form-control-sm" placeholder="Dist">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Mandal</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="mandal_gd1" id="account_name" class="form-control form-control-sm" placeholder="Mandal">
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Village</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="village_gd1" id="account_name" class="form-control form-control-sm" placeholder="Village">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Pincode</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="pin_code_gd1" id="account_name" class="form-control form-control-sm" placeholder="Pincode">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Aadhar No</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="aadhar_noe_gd1" class="form-control form-control-sm" placeholder="Aadhar No" >
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">PAN No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="pan_noe_gd1" class="form-control form-control-sm" placeholder="Pan No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Ration Card No</label>
                        <div class="col-sm-7 mt-2">
                        <input type="text" name="ration_noe_gd1" id="account_name"class="form-control form-control-sm" placeholder="Ration Card">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Voter Id No</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="voter_idnoe_gd1" id="account_name" class="form-control form-control-sm" placeholder="Voter Id">
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello"> Gas Consumer No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="gas_consumerno_gd1" id="account_name" class="form-control form-control-sm" placeholder=" Gas Consumer No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Gas Company</label>
                        <div class="col-sm-7 mt-2">
                          <select name="gas_company_gd1"class="form-control form-control-sm" name="">
                            <option value="select01">select01</option>
                            <option value="select02">select02</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello"> Gas Dealer</label>
                         <div class="col-sm-7 mt-2">
                         <select class="form-control form-control-sm" name="gas_dealer_gd1">
                          <option value="select1">select1</option>
                          <option value="select02">select2</option>
                         </select>
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Driving licence</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="drviving_licence_gd1" id="account_name" class="form-control form-control-sm" placeholder="Driving licence">
                         </div>
                       </div>
                     </div>
                     <div class="col-md-4">
                       <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Passport No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="passport_gd1" id="account_name" class="form-control form-control-sm" placeholder="Passport no">
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4">
                         <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Ele Sc No</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="ele_sec_noe_gd1" class="form-control form-control-sm" placeholder="Ele SCNO">
                         </div>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                     <div class="col-md-4">
                       <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">KYC Upload</label>
                         <div class="col-sm-7 mt-2">
                         <input type="file" name="kyc_upload_gd1" class="file-upload-default">
                         <div class="input-group ">
                            <input type="text" class="form-control" name="kyc_upload_gd1" file-upload-info form-control-sm" disabled placeholder="Adhar">
                             <span class="input-group-append">
                             <button class="file-upload-browse btn btn-primary" type="button"  style="padding: 0.55rem 0.5rem;">Upload</button>
                             </span>
                                 </div>
                                 </div>
                              </div>
                      </div>
                   </div>
                   <div class="row">
                    <div class="col-md-12">
                      <div class="text-right">
                         <button type="submit" name="submit" value="submit" class="btn 
                         btn-danger btn-icon-text">
                           Back
                         </button>
                         <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                          Save
                         </button> 
                      </div>
                    </div>
                    <div class="col-md-0"></div>
                   </div></div>
           </div>
        </div>
        <!--Guarantor1 Details Tab End-->
        
         <!--Guarantor2 Details Start-->
        <div class="tab-pane fade" id="nav-guarantor2" role="tabpanel"aria-labelledby="nav-guarantor2-tab">
            <div class="card">
               <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                       <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">First Name</label>
                        <div class="col-sm-7 mt-2">
                        <input type="text" name="first_name_gd2" id="account_name" class=" form-control form-control-sm" placeholder="First Name">
                        </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Last Name</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="last_name_gd2" id="account_name" class="form-control form-control-sm" placeholder="Last Name">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Gender</label>
                           <div class="col-sm-7 mt-2">
                           <select class="form-control form-control-sm" name="gender_gd2" id="">
                            <option name="male">Male</option>
                            <option name="female">FeMale</option>
                            <option name="transgender">Transgender</option>
                           </select>
                           </div>
                          </div>
                        </div>
                     </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="form-group row">
                      <label class="col-sm-5 col-form-label text-right" id="hello">Date of Birth</label>
                      <div class="col-sm-7 mt-2">
                      <input type="date" name="date_of_birth_gd2" id="account_name" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                       </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Age</label>
                      <div class="col-sm-7 mt-2">
                        <input type="text" name="age_gd2" id="account_name" class="form-control form-control-sm" placeholder="Age">
                       </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group row">
                       <label class="col-sm-5 col-form-label text-right" id="hello">Occupation</label>
                       <div class="col-sm-7 mt-2">
                       <input type="text" name="occupation_gd2" class="form-control form-control-sm" name="" placeholder="Occupation">
                       </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">House oF</label>
                          <div class="col-sm-7 mt-2">
                          <select name="house_of_gd2"class="form-control form-control-sm" >
                            <option value="own">Own</option>
                            <option value="rent">Rent</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">Mobile1</label>
                          <div class="col-sm-7 mt-2">
                            <input type="text" name="mobile1_gd2" id="account_name" class="form-control form-control-sm" placeholder="Mobile Number">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Mobile2</label>
                           <div class="col-sm-7 mt-2">
                           <input type="text" name="mobile2_gd2" class="form-control form-control-sm" name="" placeholder="Mobile Number">
                           </div>
                        </div>
                      </div>
                   </div>
                   <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">S/o W/o D/o</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="so_wo_do_gd2" id="account_name" class="form-control form-control-sm" placeholder="Address">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Door No</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="door_no_gd2" id="account_name" class="form-control form-control-sm" placeholder="Door No">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Flat No/Premsis</label>
                           <div class="col-sm-7 mt-2">
                           <input type="text" name="flatno_premsis_gd2" id="account_name" class="form-control form-control-sm" placeholder="Flat No">
                           </div>
                          </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">Area</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="area_gd2" id="account_name" class="form-control form-control-sm" placeholder="Area">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Landmark</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="landmark_gd2" id="account_name" class="form-control form-control-sm" placeholder="Landmark">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group row">
                             <label class="col-sm-5 col-form-label text-right" id="hello">Street</label>
                             <div class="col-sm-7 mt-2">
                             <input type="text" name="street_gd2" id="account_name" class="form-control form-control-sm" placeholder="Street">
                             </div>
                          </div>
                        </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">State</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="state_gd2" id="account_name" class="form-control form-control-sm" placeholder="State">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Dist</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="dist_gd2" id="account_name" class="form-control form-control-sm" placeholder="Dist">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Mandal</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="mandal_gd2" id="account_name" class="form-control form-control-sm" placeholder="Mandal">
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Village</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="village_gd2" id="account_name" class="form-control form-control-sm" placeholder="Village">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Pincode</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="pin_code_gd2" id="account_name" class="form-control form-control-sm" placeholder="Pincode">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Aadhar No</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="aadhar_no_gd2" class="form-control form-control-sm" placeholder="Aadhar No" >
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">PAN No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="pan_no_gd2" class="form-control form-control-sm" placeholder="Pan No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Ration Card No</label>
                        <div class="col-sm-7 mt-2">
                        <input type="text" name="ration_no_gd2" id="account_name"class="form-control form-control-sm" placeholder="Ration Card">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Voter Id No</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="voter_idno_gd2" id="account_name" class="form-control form-control-sm" placeholder="Voter Id">
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello"> Gas Consumer No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="gas_consumerno_gd2" id="account_name" class="form-control form-control-sm" placeholder=" Gas Consumer No">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Gas Company</label>
                        <div class="col-sm-7 mt-2">
                          <select  name="gas_company_gd2" class="form-control form-control-sm" name="">
                            <option value="select01">select01</option>
                            <option value="select02">select02</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello"> Gas Dealer</label>
                         <div class="col-sm-7 mt-2">
                         <select  name="gas_dealer_gd2"class="form-control form-control-sm" name="">
                          <option value="select01">select1</option>
                          <option value="select02">select2</option>
                         </select>
                         </div>
                      </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label text-right" id="hello">Driving licence</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="drviving_licence_gd2" id="account_name" class="form-control form-control-sm" placeholder="Driving licence">
                         </div>
                       </div>
                     </div>
                     <div class="col-md-4">
                       <div class="form-group row">
                          <label class="col-sm-5 col-form-label text-right" id="hello">Passport No</label>
                        <div class="col-sm-7 mt-2">
                          <input type="text" name="passport_gd2" id="account_name" class="form-control form-control-sm" placeholder="Passport no">
                        </div>
                      </div>
                     </div>
                      <div class="col-md-4">
                         <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">Ele Sc No</label>
                         <div class="col-sm-7 mt-2">
                         <input type="text" name="ele_sec_no_gd2" class="form-control form-control-sm" placeholder="Ele SCNO">
                         </div>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                     <div class="col-md-4">
                       <div class="form-group row">
                         <label class="col-sm-5 col-form-label text-right" id="hello">KYC Upload</label>
                         <div class="col-sm-7 mt-2">
                         <input type="file" name="kyc_upload_gd2" class="file-upload-default">
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
                    <div class="col-md-12">
                      <div class="text-right">
                        <button type="submit" name="submit" value="submit" class="btn btn-danger btn-icon-text">
                          Back
                         </button>
                         <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">
                          Save
                         </button> 
                      </div>
                    </div>
                    <div class="col-md-0"></div>
                   </div></div>
            </div>
        </div>
        <!--Guarantor2 Details Tab End-->
        
        <!--Vehicle Details Tab Start-->
        <div class="tab-pane fade" id="nav-vehicle" role="tabpanel" aria-labelledby="nav-vehicle-tab">
            <div class="card">
             <div class="card-body">
                   <div class="row">
                      <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Brand</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="brand" id="account_name" class="form-control form-control-sm" placeholder="Brand Name">
                            </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Class</label>
                              <div class="col-sm-7 mt-2">
                              <input type="text" name="class" id="account_name" class="form-control form-control-sm" placeholder="Class Name">
                              </div>
                            </div>
                          </div>
                            <div class="col-md-4">
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label text-right" id="hello">Vehicle No</label>
                                  <div class="col-sm-7 mt-2">
                                   <input type="text" name="vechicle_no" id="account_name" class="form-control form-control-sm" placeholder="Vehicle No">
                                   </div>
                                 </div>
                               </div>
                             </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Vehicle TR No</label>
                              <div class="col-sm-7 mt-2">
                              <input type="text" name="vechicle_trno" id="" class="form-control form-control-sm" placeholder="Vehicle TR NO">
                            </div>
                           </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label text-right" id="hello">Vehicle Type</label>
                              <div class="col-sm-7 mt-2">
                              <select name="vechicle_type"class="form-control form-control-sm" name="" id="">
                                  <option value="new">New</option>
                                  <option value="old">Old</option>
                              </select>
                            </div>
                           </div>
                          </div>
                           <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Model</label>
                              <div class="col-sm-7 mt-2">
                              <input type="text" name="model" id="account_name" class="form-control form-control-sm" placeholder="Model">
                              </div>
                            </div>
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                              <div class="form-group row">
                                <label class="col-sm-5 col-form-label text-right" id="hello">Wheels</label>
                                <div class="col-sm-7 mt-2">
                                <select name="wheels" class="form-control form-control-sm" name="" id="">
                                    <option value="2wheels">2Wheels</option>
                                    <option value="3wheels">3Wheels</option>
                                    <option value="4wheels">4Wheels</option>
                                    <option value="electric_vechicle">Electric vehicle</option>
                                </select>
                                 </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                              <div class="form-group row">
                                 <label class="col-sm-5 col-form-label text-right" id="hello">Vehicle Value</label>
                                <div class="col-sm-7 mt-2">
                              <input type="text" name="vechicle_value" id="account_name" class="form-control form-control-sm" placeholder="Vehicle Value">
                            </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Engine No</label>
                              <div class="col-sm-7 mt-2">
                              <input type="text" name="engine_no" id="account_name" class="form-control form-control-sm" placeholder="Engine No">
                              </div>
                            </div>
                          </div>
                            </div>
                        <div class="row">
                            <div class="col-md-4">
                              <div class="form-group row">
                               <label class="col-sm-5 col-form-label text-right" id="hello">Chassis No</label>
                              <div class="col-sm-7 mt-2">
                               <input type="text" name="chassis_no" id="account_name" class="form-control form-control-sm" placeholder="Chassis No">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">RC</label>
                            <div class="col-sm-7 mt-2">
                              <select name="rc"class="form-control form-control-sm" name="" id="">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="tr">TR</option>
                              </select>
                            </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">NOC</label>
                              <div class="col-sm-7 mt-2">
                              <select name="noc"class="form-control form-control-sm" name="" id="">
                              <option value="select1">select1</option>
                              <option value="select2">select2</option>
                              </select>
                              </div>
                            </div>
                          </div>
                            
                          </div>
                       <div class="row">
                            <div class="col-md-4">
                              <div class="form-group row">
                               <label class="col-sm-5 col-form-label text-right" id="hello">Duplicate Key</label>
                              <div class="col-sm-7 mt-2">
                               <select name="duplicate_key" class="form-control form-control-sm" name="" id="">
                                   <option value="yes">Yes</option>
                                   <option value="no">No</option>
                                   </select>
                                </div>
                              </div>
                            </div>
                         </div>
                      <div class="row">
                       <div class="col-md-12">
                        <div class="text-right">
                            <button type="submit" name="submit" value="submit" class="btn  
                              btn-danger btn-icon-text">Back</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-icon-text">Save</button> 
                         </div>
                       </div>
                       <div class="col-md-0"></div>
                    </div></div>
            </div>
         </div>
           <!--Vehicle Details Tab End-->
           
          <!--Finance Details Tab Start-->
        <div class="tab-pane fade" id="nav-finance" role="tabpanel" aria-labelledby="
        nav-finance-tab">
            <div class="card">
             <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">INIT Payment</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="init_payment" id="account_name" class="form-control form-control-sm" placeholder="₹">
                            </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">D.P-Due 1</label>
                           <div class="col-sm-7 mt-2">
                           <input type="text" name="dp_due01" id="account_name" class="form-control form-control-sm" placeholder="₹">
                           </div>
                         </div>
                       </div>
                       <div class="col-md-4">
                         <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Due Date</label>
                           <div class="col-sm-7 mt-2">
                           <input type="date" name="due_date01" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                           </div>
                          </div>
                       </div>
                          </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">D.P-Due 2</label>
                            <div class="col-sm-7 mt-2">
                            <input type="text" name="dp_due02" id="" class="form-control form-control-sm" placeholder="₹">
                            </div>
                            </div>
                          </div>
                        <div class="col-md-4">
                           <div class="form-group row">
                            <label class="col-sm-5 col-form-label text-right" id="hello">Due Date</label>
                             <div class="col-sm-7 mt-2">
                             <input type="date" name="due_date02" id="" class="form-control form-control-sm" placeholder="dd/mm/yyyy">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                     </div>
                          <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Finance Amount</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="finance_amount" id="account_name" class="form-control form-control-sm" placeholder="₹">
                            </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Intrest Amount</label>
                              <div class="col-sm-7 mt-2">
                              <input type="text" name="intrest_amount" id="account_name" class="form-control form-control-sm" placeholder="₹">
                              </div>
                            </div>
                          </div>
                            <div class="col-md-4">
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label text-right" id="hello">Total</label>
                                  <div class="col-sm-7 mt-2">
                                   <input type="text"  name="total" id="" class="form-control form-control-sm" placeholder="₹">
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">No of EMIS</label>
                            <div class="col-sm-7 mt-2">
                              <input type="text" name="no_of_emis" id="account_name" class="form-control form-control-sm" placeholder="">
                            </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">EMI Amount</label>
                              <div class="col-sm-7 mt-2">
                              <input type="text" name="emi_amount" id="account_name" class="form-control form-control-sm" placeholder="₹">
                              </div>
                            </div>
                          </div>
                            <div class="col-md-4">
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label text-right" id="hello">Mode of Payment</label>
                                  <div class="col-sm-7 mt-2">
                                 <select  name="mode_of_payment"class="form-control form-control-sm" name="" id="">
                                 <option value="netbank">NETBANK</option>
                                 <option value="cash">CASH</option>
                                 <option value="upi">UPI</option>
                                   </select>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                        <div class="col-md-4">
                          <div class="form-group row">
                           <label class="col-sm-5 col-form-label text-right" id="hello">Branch</label>
                            <div class="col-sm-7 mt-2">
                              <select  name="branch"class="form-control form-control-sm" name="" id="">
                                  <option value="text1">text1</option>
                                  <option value="text2">text2</option>
                                  <option value="text3">text3</option>
                              </select>
                            </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group row">
                              <label class="col-sm-5 col-form-label text-right" id="hello">Line Code</label>
                              <div class="col-sm-7 mt-2">
                              <select name="line_code"class="form-control form-control-sm" name="" id="">
                                <option value="select1">select1</option>
                                <option value="select2">select2</option>
                                <option value="select3">select3</option>
                              </select>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-4"></div>
                          </div>
                           <div class="row">
                       <div class="col-md-12">
                        <div class="text-right">
                            <button type="submit" name="submit" value="submit" class="btn  
                              btn-danger btn-icon-text">Back</button>
                            <button type="submit" name="insert" value="submit" class="btn btn-primary btn-icon-text">Submit</button> 
                         </div>
                       </div>
                       </form>
                       <div class="col-md-0"></div>
                    </div></div>
                    <!--Finance Details Tab End-->
            </div>
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
 
  <!--<script src="js/file-upload.js"></script>-->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );


  $(document).ready(function(){
    $("#pan").hide();
    $("#gas").hide();
    $("#pass").hide();
    $("#elc").hide();
    $("#aadhar").hide();
    $("#drl").hide();
    $("#ration").hide();
    $("#voter_id").hide();
     $('#framework').multiselect({
      nonSelectedText: 'Select Document',
      enableFiltering: false,
      //allSelectedText: 'All',
      //includeSelectAllOption: true,
      enableCaseInsensitiveFiltering: false,
      onChange: function(option, checked, select) {
            var opselected = $(option).val();
            if(checked == true) {
              $("#"+opselected).show(); 
              if(opselected == 'all'){
                $(".kycbox").show();
              }           
            }else{
              if(opselected == 'all'){
                $(".kycbox").hide();
              }  
              $("#"+opselected).hide();
            }
          }
     });      
  });
  </script>
  
</body>

</html>

