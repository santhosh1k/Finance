<?php
session_start();
include 'database.php';
if(isset($_POST['submit']))
{
    //name,startyear,address,pincode,dist,state,panno,tanno,gstno,ward,telephone,mobile,email,website
  
	$name = $_POST['name'];
	$startyear = $_POST['startyear'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$dist = $_POST['dist'];
	$state = $_POST['state'];
	$panno = $_POST['panno'];
	$tanno = $_POST['tanno'];
	$gstno = $_POST['gstno'];
	$ward = $_POST['ward'];
	$telephone = $_POST['telephone'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$website = $_POST['website'];
		
		
	//$allowedextensions = array("jpeg","jpg","png","gif");
	
  /*	$imagename = $_FILES["imagefile"]["name"];
	echo $imagename;
	$target_image = $target_dir_image.$imagename;
	move_uploaded_file($_FILES['imagefile']['name'], $target_image);
	

	$target_address = $target_dir_address . basename($_FILES["addressfile"]["name"]);
	move_uploaded_file($_FILES['addressfile']['name'], $target_address);
	*/
	//file upload
    /*	$file=time().$_FILES['imagefile1']['name'];
        $type=$_FILES['imagefile1']['type'];
        $temp_name=$_FILES['imagefile1']['tmp_name'];
        $path="uploads/File_upload/".$file;
        move_uploaded_file($temp_name,$path);
        
        //address_proof
    	$address=time().$_FILES['addressfile1']['name'];
        $type=$_FILES['addressfile1']['type'];
        $temp_name=$_FILES['addressfile1']['tmp_name'];
        $path="uploads/Address_proof/".$address;
        move_uploaded_file($temp_name,$path);*/
	
	

	
	$sql = "INSERT INTO company_details (name,startyear,address,pincode,dist,state,panno,tanno,gstno,ward,telephone,mobile,email,website) 
	VALUES ('$name','$startyear','$address','$pincode','$dist','$state','$panno','$tanno','$gstno','$ward','$telephone','$mobile','$email','$website')";
	
	echo "INSERT INTO company_details (name,startyear,address,pincode,dist,state,panno,tanno,gstno,ward,telephone,mobile,email,website) 
	VALUES ('$name','$startyear','$address','$pincode','$dist','$state','$panno','$tanno','$gstno','$ward','$telephone','$mobile','$email','$website')";
	
	
//	Middle Name, Gender, Phone Number, Email, Password, Repassword, City, Address)
	//VALUES ('$firstname', '$middlename', '$gender', '$phonenumber', '$email', '$password', '$repassword',  '$city', '$addressdesc')";
	
	//if(in_array($imagefiletype, $allowedextensions)){
	/*move_uploaded_file($_FILES['Image_file']['tmp_name'], $target_dir_image.$image);
	move_uploaded_file($_FILES['Address_file']['tmp_name'], $target_dir_address.$Address);*/

	if(mysqli_query($connection, $sql)){
		echo "data updated";
		$_SESSION["msg"] = "SUCCUSSFULLY  INSERTED" ;
	    header("location:company.php");
	    
	} else{
		echo  "data updatation failed";
		$_SESSION["msg"] = "UNABLE TO INSERT" ;
		header("location:company.php");
	}
}
?>