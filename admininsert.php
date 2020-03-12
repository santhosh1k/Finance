<?php
session_start();
include 'database1.php';
if(isset($_POST['submit']))
{
   // echo "sai";
   // exit();
//	$target_dir_image = "uploads/image/";
//	$target_dir_address = "uploads/address/";
	$firstname = $_POST['firstname'];
	$middlename = $_POST['lastname'];
	$gender = $_POST['gender'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$createid = $_POST['createid'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$doorno = $_POST['doorno'];
	$flatno = $_POST['flatno'];
	$town = $_POST['town'];
	$mandal = $_POST['mandal'];
	$dist = $_POST['dist'];
	$state = $_POST['state'];
	$email = $_POST['email'];
	
	$website = $_POST['website'];
	$pincode = $_POST['pincode'];
		
		
	//$allowedextensions = array("jpeg","jpg","png","gif");
	
  /*	$imagename = $_FILES["imagefile"]["name"];
	echo $imagename;
	$target_image = $target_dir_image.$imagename;
	move_uploaded_file($_FILES['imagefile']['name'], $target_image);
	

	$target_address = $target_dir_address . basename($_FILES["addressfile"]["name"]);
	move_uploaded_file($_FILES['addressfile']['name'], $target_address);
	*/
	//file upload
    	$file=time().$_FILES['imagefile1']['name'];
        $type=$_FILES['imagefile1']['type'];
        $temp_name=$_FILES['imagefile1']['tmp_name'];
        $path="uploads/File_upload/".$file;
        move_uploaded_file($temp_name,$path);
        
    /*    //address_proof
    	$address=time().$_FILES['addressfile1']['name'];
        $type=$_FILES['addressfile1']['type'];
        $temp_name=$_FILES['addressfile1']['tmp_name'];
        $path="uploads/Address_proof/".$address;
        move_uploaded_file($temp_name,$path);
	
	$addressdesc = $_POST['address'];*/
if($password === $repassword)
{
    

	
	$sql = "INSERT INTO bloginfo (firstname,middlename,gender,phonenumber,email,createid,password,door_no,flat_no,city,imagefile,mandal,dist,state,emailid,website,pincode) 
	VALUES ('$firstname','$middlename','$gender','$phonenumber','$email','$createid','$password','$doorno','$flatno','$town','$file','$mandal','$dist','$state','$email','$website','$pincode')";
	
	/*echo "INSERT INTO bloginfo (firstname,middlename,gender,phonenumber,email,createid,password,repassword,door_no,flat_no,city,imagefile,mandal,dist,state,emailid,website,pincode) 
	VALUES ('$firstname','$middlename','$gender','$phonenumber','$email','$createid','$password','$repassword','$doorno','$flatno','$town','$file','$mandal','$dist','$state','$email','$website','$pincode')";
	exit();*/
//	Middle Name, Gender, Phone Number, Email, Password, Repassword, City, Address)
	//VALUES ('$firstname', '$middlename', '$gender', '$phonenumber', '$email', '$password', '$repassword',  '$city', '$addressdesc')";
	
	//if(in_array($imagefiletype, $allowedextensions)){
	/*move_uploaded_file($_FILES['Image_file']['tmp_name'], $target_dir_image.$image);
	move_uploaded_file($_FILES['Address_file']['tmp_name'], $target_dir_address.$Address);*/
    

	if(mysqli_query($connection, $sql)){
		echo "data updated";
		$_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
	    header("location:user.php");
	    
	} else{
	    $_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
		echo  "data updatation failed";
		header("location:user.php");
	}
}

else
{
  $_SESSION["psw"] = "password does not match" ;  
  header("location:add-user.php");
}
}
?>