<?php
session_start();
include 'database1.php';
if(isset($_POST['submit1']))
{
   
	$dop = $_POST['dop'];
	//echo $dop;
	//exit();
	$bank = $_POST['bank'];
	$vocher = $_POST['vocher'];
	date_default_timezone_set("Asia/Calcutta");

	$date=date("y-m-d h:i:s A");
	
     $count_array=count($_POST['account_name']);
	 $account_name = $_POST['account_name'];
	 $amount = $_POST['amount'];
	 $book_no= $_POST['book_no'];
	 $receipt_no=$_POST['receipt_code'];
     $description = $_POST['description'];
     $instrument_no = $_POST['instrument_no'];
    
     $total = $_POST['total'];
   
    
	    //print_r($account_name);
	  //  echo $count_array;
	 $query1 = mysqli_query($connection,"INSERT INTO  receipt(date_of_payment,cash,vochar_no,date) VALUES ('$dop','$bank','$vocher','$date')");
	// echo "INSERT INTO  receipt(date_of_payment,cash,vochar_no,date) VALUES ('$dop','$bank','$vocher','$date')" ;
	 

	// account_name	amount	description	instrument_no	total	date
	  $payment_id = mysqli_insert_id($connection);
	   //echo $payment_id;
     //exit();
	$totalnew=0;
     for($i=0;$i<$count_array;$i++){
        // $totalnew=$totalnew+$amount[$i];
	
    $query2 = mysqli_query($connection,"INSERT INTO receipt_details(payment_id,account_name,amount,book_no,receipt_code,description,instrunment_no,total)
	 VALUES($payment_id,'".$account_name[$i]."','".$amount[$i]."','".$book_no[$i]."','".$receipt_no[$i]."','".$description[$i]."','".$instrument_no[$i]."','".$total."')");
        if($query1 && $query2)
	 {
	   echo "success";
	 }else{
	     echo "fail";
	     
	 }
	 exit();
	  
     }
     
	 
   }
    ?>