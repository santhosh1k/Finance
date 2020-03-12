<?php
session_start();
include 'database.php';

if(!$connection){
	echo "connection failed";
}
if(isset($_POST['submit']))
{
		$branch=$_POST['branch'];
		//$city=$_POST['city'];
		
		$sql = "INSERT INTO addbranch (branch) VALUES ('$branch')";
		
		if(mysqli_query($connection, $sql)){
		echo "branch added successfully ";
		$_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
		header("location:Branches.php");
		}else{
		echo "data updation failed";
		$_SESSION["msg"] = "UNABLE TO INSERET" ;
		header("location:Branches.php");
		}
}
?>