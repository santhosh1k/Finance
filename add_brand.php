<?php
session_start();
include ('database.php');

if(isset($_POST['addbrand']))
{
    
   $vehiclebrand = $_POST['brand']; 
   $sql = "INSERT INTO vehicle_brand_edition (vehiclebrandedition) VALUES ('$vehiclebrand')";
    
    if(mysqli_query($connection, $sql)){
	echo "vehicle brand  added";
	$_SESSION["msg"] = "SUCCESSFULLY BRAND ADDED" ;
	header("location:vehiclebrand.php");
}else{
	echo "updation failed";
	$_SESSION["msg"] = "UNABLE TO ADD BRAND" ;
	header("location:vehiclebrand.php");
} 
}
?>