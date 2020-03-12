<?php
session_start();
include 'database.php';
if(!$connection){
	echo "connection failed";
}

//echo "hemasaijammana";

if(isset($_POST['submit']))
{
//echo "hemasai";
$manager_code = $_POST['manager_code']; 
$manager_name = $_POST['manager_name'];
$executive_code = $_POST['executive_code'];
$executive_name = $_POST['executive_name'];


$sql = "INSERT INTO manager_details (manager_code,manager_name,executive_code,executive_name) VALUES ('$manager_code',$manager_name','$executive_code','$executive_name')";

echo "INSERT INTO manager_details (manager_code,manager_name,executive_code,executive_name) VALUES ('$manager_code','$manager_name','$executive_code','$executive_name')";
exit();
if(mysqli_query($connection, $sql)){
	echo "data updated successfully";
	$_SESSION["msg"] = "SUCCESSFULLY INSERTED" ;
	header("location: managers.php");
}else{
	echo "data updation failed";
	$_SESSION["msg"] = "UNABLE TO INSERT" ;
	header("location: add-manager.php");
}
}

if(isset($_POST['addmanager']))
{
    $manager_code = $_POST['manager_code']; 
  $manager_name = $_POST['manager_name']; 
  $sql = "INSERT INTO manager_name (name,code) VALUES ('$manager_name','$manager_code')";


if(mysqli_query($connection, $sql)){
	echo "data updated successfully";
	$_SESSION["msg"] = "SUCCESSFULLY INSERTED" ;
	header("location: add-manager.php");
}else{
	echo "data updation failed";
	$_SESSION["msg"] = "UNABLE TO INSERT" ;
	header("location: add-manager.php");
}
}

?>