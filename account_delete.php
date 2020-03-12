<?php
session_start();
include("database1.php");

$sno = $_REQUEST["id"];


$sql= "delete from account_details where 	id = '$sno' ";

$result=mysqli_query($connection,$sql);
if($result)
   {
	//echo "deleted";
	$_SESSION["msg"] = "SUCCUSSFULLY  FILE DELETED" ;
		
	header("location:accountview.php");
    }else{
	$_SESSION["msg"] = "UNABLE DELETED FILE" ;
		
	header("location:user.php");
    }
?>