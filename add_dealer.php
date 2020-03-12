<?php
session_start();
include 'database.php';
if(!$connection){
	echo "connection failed";
}
if(isset($_POST['submit']))
{
$delear = $_POST['delear']; 
//$narrations = $_POST['narrations'];

$sql = "INSERT INTO delear_details (delearname) VALUES ('$delear')";

if(mysqli_query($connection, $sql)){
	echo "data updated successfully";
	$_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
	header("location: Dealers.php");
}else{
	echo "data updation failed";
	$_SESSION["msg"] = "UNABLE TO INSERT" ;
	header("location: Dealers.php");
}
}    

?>