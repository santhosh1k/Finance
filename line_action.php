<?php
include 'db_line.php';
session_start();
if(isset($_POST['submit']))
{
$customer_id     =   $_POST['customer_id'];
//echo $customer_id;
//exit();
$customer_name   =   $_POST['customer_name'];
$exisiting_line  =   $_POST['exisiting_line'];
$revised_line    =   $_POST['revised_line'];
$status          =   $_POST['status'];
$query           =    mysqli_query($con,"INSERT INTO `line_modificationf`(`customer_id`,`customer_name`,`exisiting_line`,`revised_line`,`status`)VALUES('$customer_id','$customer_name','$exisiting_line','$revised_line','$status')") or die(mysqli_error());
if ($query) {
  //echo "Insereted";
   $_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
  header("location:linemodification.php");
}
else{
     $_SESSION["msg"] = "UNABLE TO INSERT" ;
 // echo "not Insereted";
}
}
?>
