<?php
session_start();
include ('database.php');

if(isset($_POST['submit']))
{


$vehiclebrand = $_POST['brand'];
$vehicleclass = $_POST['class'];

$sql = "INSERT INTO vehicle_info (vehiclebrand,vehicleclass) VALUES ('$vehiclebrand','$vehicleclass')";
//echo "INSERT INTO vehicle_info (vehiclebrand,vehicleclass) VALUES ('$vehiclebrand','$vehicleclass')";
//exit();
if(mysqli_query($connection, $sql)){
	echo "vehicle added";
	$_SESSION["msg"] = "SUCCESSFULLY INSERTED" ;
	header("location:vehiclebrand.php");
}else{
	echo "updation failed";
	$_SESSION["msg"] = "UNABLE TO INSERT" ;
	header("location:vehiclebrand.php");
}
}


?>