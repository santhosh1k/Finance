<?php
session_start();
include 'database.php';
if(!$connection){
	echo "connection failed";
}
if(isset($_POST['submit']))
{
$vochartype = $_POST['vochartype']; 
$narrations = $_POST['narrations'];

$sql = "INSERT INTO narrations_details (vochartype,narrations) VALUES ('$vochartype','$narrations')";

if(mysqli_query($connection, $sql)){
	echo "data updated successfully";
	$_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
	header("location: Narrations.php");
}else{
	echo "data updation failed";
	$_SESSION["msg"] = "UNABLE TO UPDATE" ;
	header("location: Narrations.php");
}
}    

?>