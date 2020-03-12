<?php
session_start();
include 'database.php';

if(!$connection){
	echo "connection failed";
}
if(isset($_POST['submit']))
{
		$booknumbers=$_POST['booknumbers'];
		$branch=$_POST['branch'];
		$executive_name=$_POST['executive_name'];
		$executive_code=$_POST['executive_code'];

		$sql = "INSERT INTO booknumbers (book_numbers,branch,executive_name,executive_code) VALUES ('$booknumbers','$branch','$executive_name','$executive_code')";
		
	//	echo "INSERT INTO booknumbers (book_numbers,branch,executive_name,executive_code) VALUES ('$booknumbers','$branch','$executive_name','$executive_code') ";
	//	exit();
		if(mysqli_query($connection, $sql)){
		
		$_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
		header("location:Booknumbers.php");
		}else{
	
		$_SESSION["msg"] = "UNABLE TO INSERET" ;
		header("location:Booknumbers.php");
		}
}

?>