<?php
require('database_con.php');
if(isset($_POST['submit']))
{
$name        =  $_POST['name'];
$company     =  $_POST['company'];
if($company=="")
{
  $company=0;
}

$view_user   =  $_POST['view_user'];
if($view_user=="")
{
  $view_user=0;
}
//echo $view_user;
//exit();
$accountgr_masters     =   $_POST['accountgr_masters'];
if($accountgr_masters=="")
{
  $accountgr_masters=0;
}
$accounts_masters      =   $_POST['accounts_masters'];
if($accounts_masters=="")
{
  $accounts_masters=0;
}
$vechicle_masters      =   $_POST['vechicle_masters'];
if($vechicle_masters=="")
{
  $vechicle_masters=0;
}
$recovery_masters      =   $_POST['recovery_masters'];
if($recovery_masters=="")
{
  $recovery_masters=0;
}
$branches_masters      =   $_POST['branches_masters'];
if($branches_masters=="")
{
  $branches_masters=0;
}
$book_masters          =   $_POST['book_masters'];
if($book_masters=="")
{
  $book_masters=0;
}
$line_masters          =   $_POST['line_masters'];
if($line_masters=="")
{
  $line_masters=0;
}
$narrations_masters    =   $_POST['narrations_masters'];
if($narrations_masters=="")
{
  $narrations_masters=0;
}
$dealers_masters       =   $_POST['dealers_masters'];
if($dealers_masters=="")
{
  $dealers_masters=0;
}
$a_borrowers           =   $_POST['a_borrowers'];
if($a_borrowers=="")
{
  $a_borrowers=0;
}
$b_borrowers           =   $_POST['b_borrowers'];
if($b_borrowers=="")
{
  $b_borrowers=0;
}
$c_borrowers           =   $_POST['c_borrowers'];
if($c_borrowers=="")
{
  $c_borrowers=0;
}
$payment_transaction   =   $_POST['payment_transaction'];
if($payment_transaction=="")
{
  $payment_transaction=0;
}
$receipt_transaction   =   $_POST['receipt_transaction'];
if($receipt_transaction=="")
{
  $receipt_transaction=0;
}
$journal_transaction   =   $_POST['journal_transaction'];
if($journal_transaction=="")
{
  $journal_transaction=0;
}
$contra_transaction    =   $_POST['contra_transaction'];
if($contra_transaction=="")
{
  $contra_transaction=0;
}
$reports_transaction   =   $_POST['reports_transaction'];
if($reports_transaction=="")
{
  $reports_transaction=0;
}
$day_account           =   $_POST['day_account'];
if($day_account=="")
{
  $day_account=0;
}
$cash_account          =   $_POST['cash_account'];
if($cash_account=="")
{
  $cash_account=0;
}
$general_account       =   $_POST['general_account'];
if($general_account=="")
{
  $general_account=0;
}
$cashstatment_account  =   $_POST['cashstatment_account'];
if($cashstatment_account=="")
{
  $cashstatment_account=0;
}
$trai_account          =   $_POST['trai_account'];
if($trai_account=="")
{
  $trai_account=0;
}

$profitloss_account    =   $_POST['profitloss_account'];
if($profitloss_account=="")
{
  $profitloss_account=0;
}

$balance_account       =   $_POST['balance_account'];
if($balance_account=="")
{
  $balance_account=0;
}

$profitadjustment_account  =  $_POST['profitadjustment_account'];
if($profitadjustment_account=="")
{
  $profitadjustment_account=0;
}

$calcnpts_calculation      =  $_POST['calcnpts_calculation'];
if($calcnpts_calculation=="")
{
  $calcnpts_calculation=0;
}

$calcnloans_calculation    =  $_POST['calcnloans_calculation'];
if($calcnloans_calculation=="")
{
  $calcnloans_calculation=0;
}

$calcnsummary_calculation  =  $_POST['calcnsummary_calculation'];
if($calcnsummary_calculation=="")
{
  $calcnsummary_calculation=0;
}

$calcn15g_calculation      =  $_POST['calcn15g_calculation'];
if($calcn15g_calculation=="")
{
  $calcn15g_calculation=0;
}

$hydint_calculation        =  $_POST['hydint_calculation'];
if($hydint_calculation=="")
{
  $hydint_calculation=0;
}

$accounts_special          =  $_POST['accounts_special'];
if($accounts_special=="")
{
  $accounts_special=0;
}

$vechicles_special         =  $_POST['vechicles_special'];
if($vechicles_special=="")
{
  $vechicles_special=0;
}

$branches_special          =  $_POST['branches_special'];
if($branches_special=="")
{
  $branches_special=0;
}

$accounts_utilities        =  $_POST['accounts_utilities'];
if($accounts_utilities=="")
{
  $accounts_utilities=0;
}

$vechicles_utilities       =  $_POST['vechicles_utilities'];
if($vechicles_utilities=="")
{
  $vechicles_utilities=0;
}

$accounts_identification   =  $_POST['accounts_identification'];
if($accounts_identification=="")
{
  $accounts_identification=0;
}

$vechicles_identification  =  $_POST['vechicles_identification'];
if($vechicles_identification=="")
{
  $vechicles_identification=0;
}

$accounts_direct           =  $_POST['accounts_direct'];
if($accounts_direct=="")
{
  $accounts_direct=0;
}

$vechicles_direct          =  $_POST['vechicles_direct'];
if($vechicles_direct=="")
{
  $vechicles_direct=0;
}

$accounts_exit             =  $_POST['accounts_exit'];
if($accounts_exit=="")
{
  $accounts_exit=0;
}

$vechicles_exit            =  $_POST['vechicles_exit'];
if($vechicles_exit=="")
{
  $vechicles_exit=0;
}

$view_branch               =  $_POST['view_branch'];
if($view_branch=="")
{
  $view_branch=0;
}

$add_branch                =  $_POST['add_branch'];
if($add_branch=="")
{
  $add_branch=0;
}

$view_assets               =  $_POST['view_assets'];
if($view_assets=="")
{
  $view_assets=0;
}

$add_assets                =  $_POST['add_assets'];
if($add_assets=="")
{
  $add_assets=0;
}

$manage_assets             =  $_POST['manage_assets'];
if($manage_assets=="")
{
  $manage_assets=0;
}

$chart_accounting          =  $_POST['chart_accounting'];
if($chart_accounting=="")
{
  $chart_accounting=0;
}

$journal_accounting        =  $_POST['journal_accounting'];
if($journal_accounting=="")
{
  $journal_accounting=0;
}

$view_expenses             =  $_POST['view_expenses'];
if($view_expenses=="")
{
  $view_expenses=0;
}

$add_expenses              =  $_POST['add_expenses'];
if($add_expenses=="")
{
  $add_expenses=0;
}

$manage_expenses           =  $_POST['manage_expenses'];
if($manage_expenses=="")
{
  $manage_expenses=0;
}

$view_income               =  $_POST['view_income'];
if($view_income=="")
{
  $view_income=0;
}

$add_income                =  $_POST['add_income'];
if($add_income=="")
{
  $add_income=0;
}

$manage_income             =  $_POST['manage_income'];
if($manage_income=="")
{
  $manage_income=0;
}

$sql=mysqli_query($con,"INSERT INTO `multi_roles`(`name`, `company_users`, `view_users`, `accountgroups_masters`, `accounts_masters`, `vehicle_masters`, `recovery_masters`, `branches_masters`, `book_masters`, `line_masters`, `narrations_masters`, `dealers_masters`, `a_borrowers`, `b_borrowers`, `c_borrowers`, `payment_transaction`, `receipt_transaction`, `journal_transaction`, `contra_transaction`, `reports_transaction`, `day_account`, `cashstatment_account`, `general_account`, `cash_account`, `trai_account`, `profitloss_account`, `balance_account`, `profitadjustment_account`, `calcnpts_calculation`, `calcnloans_calculation`, `calcnsummary_calculation`, `calcn15g_calculation`, `hydint_calculation`, `accounts_special`, `vechicles_special`, `branches_special`, `accounts_utilities`, `vechicles_utilities`, `accounts_direct`, `vechicles_direct`, `accounts_exit`, `vechicles_exit`, `view_branch`, `add_branch`, `view_assets`, `add_assets`, `manage_assets`, `chart_accounting`, `journal_accounting`, `view_expenses`, `add_expenses`, `mangae_expenses`, `view_income`, `add_income`, `manage_income`) VALUES ('$name','$company','$view_user','$accountgr_masters','$accounts_masters','$vechicle_masters','$recovery_masters','$branches_masters','$book_masters','$line_masters','$narrations_masters','$dealers_masters','$a_borrowers ','$b_borrowers','$c_borrowers','$payment_transaction','$receipt_transaction','$journal_transaction','$contra_transaction','$reports_transaction','$day_account','$cash_account','$general_account','$cash_account','$trai_account','$profitloss_account','$balance_account','$profitadjustment_account','$calcnpts_calculation','$calcnloans_calculation','$calcnsummary_calculation','$calcn15g_calculation','$hydint_calculation','$accounts_special','$vechicles_special','$branches_special','$accounts_identification','$vechicles_identification','$accounts_direct','$vechicles_direct','$accounts_exit','$vechicles_exit','$view_branch','$add_branch','$view_assets','$add_assets','$manage_assets','$chart_accounting','$journal_accounting','$view_expenses','$add_expenses','$manage_expenses','$view_income','$add_income','$manage_income')");
if($sql)
{
  echo "DATA INSERTED success";

}
else {
   echo mysqli_error($con);
}
  mysqli_close($con);
}
?>
