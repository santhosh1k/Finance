<?php

$servername= "localhost";
$username="hemasai123";
$password="hemasai@123";
$database="hemasai_finapp";

$connection = mysqli_connect($servername, $username, $password, $database);
if(!$connection){
	echo "database connection failed";
}

?>