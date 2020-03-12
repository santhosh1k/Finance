<?php

$servername="localhost";
$username="hemasai123";
$password="hemasai@123";
$databasename="hemasai_finapp";

$connection = mysqli_connect($servername, $username, $password, $databasename);

if(!$connection){
	echo "connection failed";
}
if(isset($_POST['submit']))
{
		$branch=$_POST['branch'];
		$city=$_POST['city'];
		
		$sql = "INSERT INTO branch_details (branch,city) VALUES ('$branch','$city')";
		
		if(mysqli_query($connection, $sql)){
		echo "branch added successfully ";
		}else{
		echo "data updation failed";
		}
}
?>