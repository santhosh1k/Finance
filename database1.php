<?php

$servername= "localhost";
$username="chaitu";
$password="123456";
$database="Majestic_finance";

$connection = mysqli_connect($servername, $username, $password, $database);
if(!$connection){
	echo "database connection failed";
}

?>