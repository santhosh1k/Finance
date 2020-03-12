<?php
require('database_con.php');
$sql=mysqli_query($con,"CREATE TABLE multi_roles
  (
id  int NOT NULL AUTO_INCREMENT,
name varchar(255),
company_users varchar(10),
view_users varchar(10),
accountgroups_masters varchar(10),
accounts_masters varchar(10),
vehicle_masters  varchar(10),
recovery_masters  varchar(10),
branches_masters   varchar(10),
book_masters      varchar(10),
line_masters    varchar(10),
narrations_masters varchar(10),
dealers_masters    varchar(10),
a_borrowers   varchar(10),
b_borrowers     varchar(10),
c_borrowers      varchar(10),
payment_transaction varchar(10),
receipt_transaction   varchar(10),
journal_transaction    varchar(10),
contra_transaction    varchar(10),
reports_transaction     varchar(10),
day_account   varchar(10),
cashstatment_account  varchar(10),
general_account  varchar(10),
cash_account   varchar(10),
trai_account   varchar(10),
profitloss_account   varchar(10),
balance_account   varchar(10),
profitadjustment_account   varchar(10),
calcnpts_calculation varchar(10),
calcnloans_calculation  varchar(10),
calcnsummary_calculation  varchar(10),
calcn15g_calculation     varchar(10),
hydint_calculation    varchar(10),
accounts_special varchar(10),
vechicles_special varchar(10),
branches_special   varchar(10),
accounts_utilities varchar(10),
vechicles_utilities   varchar(10),
accounts_direct varchar(10),
vechicles_direct   varchar(10),
accounts_exit varchar(10),
vechicles_exit  varchar(10),
view_branch varchar(10),
add_branch   varchar(10),
view_assets varchar(10),
add_assets varchar(10),
manage_assets varchar(10),
chart_accounting varchar(10),
journal_accounting varchar(10),
view_expenses varchar(10),
add_expenses varchar(10),
mangae_expenses varchar(10),
view_income varchar(10),
add_income  varchar(10),
manage_income varchar(10),
PRIMARY KEY (id)
)");
if($sql)
{
  echo "TABLE CREATED SUCESSFULLY";
}
else {
echo "Error creating table:".mysqli_error($con);
}
mysqli_close($con);
?>
