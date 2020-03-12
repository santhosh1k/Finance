<?php
session_start();
include 'database1.php';
if(isset($_POST['submit']))
{
   
	$dop =       $_POST['dop'];
	//echo  $dop;
	//exit();
	$vocher_no	 = $_POST['vocher_no'];
	$cash_account = $_POST['cash_account'];
	$debit = $_POST['debit'];
	
	date_default_timezone_set("Asia/Calcutta");
    $date=date("y-m-d h:i:s A");
	
     $count_array=count($_POST['account_name']);
	 $account_name = $_POST['account_name'];
	 $amount = $_POST['amount'];
     $description = $_POST['description'];
     $instrument_no = $_POST['instrument_no'];
     $total = $_POST['total'];
	  // print_r($account_name);
	  // echo $count_array;
	  // exit();
	  //journal_id	date_of_payment	journal_no	account_name	debit_credit	amount	date

	 $query = mysqli_query($connection,"INSERT INTO  contra (date_of_payment,vocher_no,account_name,debit_credit,amount,date) 
	                             VALUES ('$dop','$vocher_no','$cash_account','$debit','$date')");
	//id	account_name	amount	description	instrument_no	date
	echo "INSERT INTO  contra (date_of_payment,vocher_no,account_name,debit_credit,amount,date) 
	                             VALUES ('$dop','$vocher_no','$cash_account','$debit','$date')";
	exit();
 $payment_id = mysqli_insert_id($connection);
	$totalnew=0;
     for($i=0;$i<$count_array;$i++){
         //$totalnew=$totalnew+$amount[$i];
	 $query1 = mysqli_query($connection,"INSERT INTO contra_details(payment_id,account_name,amount,description,instrument_no,total)
	 VALUES($payment_id,'".$account_name[$i]."','".$amount[$i]."','".$description[$i]."','".$instrument_no[$i]."',$total)");
     }
     
	 if($query && $query1)
	 {
	   echo "success";
	 }else{
	     echo "fail";
	 }
}
?>