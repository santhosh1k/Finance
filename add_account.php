<?php
include 'database1.php';
SESSION_start();
if(isset($_POST['submit']))
{
	//$target_dir_aadharimage = "uploads/Aadhar_images/";
	//$target_dir_panimage = "uploads/Pancard_images/";
	
	$accountname = $_POST['account_name'];
	$aadharnumber = $_POST['aadhar_number'];
	//echo $accountname;
	//exit();
	//$aadharimage = $_FILES['aadharimg']['name'];
	
	$pannumber = $_POST['pan_number'];
	$dob = $_POST['dob'];
	//$panimagge = $_FILES['panimage']['name'];
    $schedule = $_POST['schedule'];
	$sonof = $_POST['sonof'];
	$dno = $_POST['dno'];
	$flatno = $_POST['flatno'];
	$premsis = $_POST['premsis'];
	$street = $_POST['street'];
	$town = $_POST['town'];
	$pincode = $_POST['pincode'];
	$mandal = $_POST['mandal'];
	$dist = $_POST['dist'];
	$state = $_POST['state'];
	$phone1 = $_POST['phone1'];
	$phone2 = $_POST['phone2'];
	$email = $_POST['email'];
	$rate = $_POST['rate'];
	$fromdate = $_POST['fromdate'];
	$todate = $_POST['todate'];

	//$target_aadharimage = $target_dir_image.basename($_FILES["aadharimg"]["name"]);
	//$target_panimage = $target_dir_image.basename($_FILES["panimg"]["name"]);
	//move_uploaded_file($_FILES['aadharimg']['tmp_name'],$target_aadharimage);
	//move_uploaded_file($_FILES['pamimgage']['tmp_name'],$target_panimage);
	
	$aadharfile =time().$_FILES['aadharimg1']['name'];
	$type = $_FILES['aadharimg1']['type'];
	$temp_name = $_FILES['aadharimg1']['tmp_name'];
	$path = "uploads/Aadhar_images/".$aadharfile;
	move_uploaded_file($temp_name,$path);
	
	$panfile =time().$_FILES['panimg1']['name'];
	$type = $_FILES['panimg1']['type'];
	$temp_name = $_FILES['panimg1']['tmp_name'];
	$path = "uploads/Pancard_images/".$panfile;
	move_uploaded_file($temp_name,$path);
	//echo $panfile;

  //	id	account_name	aadhar_number	aadhar_image	pan_number	dob	pan_image	schedule_name	s/o	door_no	flat_no	premsis	street	town	pincode	mandal	distic	state	phone1	phone2	email	intrest	from_date	to_date

	$sql = "INSERT INTO account_details(account_name,aadhar_number,aadhar_image,pan_number,dob,pan_image,schedule_name,son_of,door_no,flat_no,premsis,street,town,pincode,mandal,distic,state,phone1,phone2,email,intrest,from_date,to_date) 
							VALUES('$accountname','$aadharnumber','$aadharfile','$pannumber','$dob','$panfile','$schedule','$sonof','$dno','$flatno','$premsis','$street','$town','$pincode','$mandal','$dist','$state','$phone1','$phone2','$email','$rate','$fromdate','$todate')";

  //echo "INSERT INTO account_details(account_name,aadhar_number,aadhar_image,pan_number,dob,pan_image,schedule_name,son_of,door_no,flat_no,premsis,street,town,pincode,mandal,distic,state,phone1,phone2,email,intrest,from_date,to_date) 
	//						VALUES('$accountname','$aadharnumber','$aadharfile','$pannumber','$dob','$panfile','$schedule','$sonof','$dno','$flatno','$premsis','$street','$town','$pincode','$mandal','$dist','$state','$phone1','$phone2','$email','$rate','$fromdate','$todate')";
//exit();
	if(mysqli_query($connection, $sql))
	{
	    $_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
		echo "data updated";
		header("location:accountview.php");
	} else{
	    $_SESSION["msg"] = "UNABLE TO INSERT" ;
	    	header("location:accountview.php");
		echo  "data updatation failed";
	}
}
?>