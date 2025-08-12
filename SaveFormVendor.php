<?php
require 'signupConfig.php';

if(isset($_POST['btnSubmit'])){
	
	$VT=$_POST['type'];
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$g=$_POST['gen'];
	$d=$_POST['date'];
	$a=$_POST['add'];
	$n=$_POST['num'];
	$m=$_POST['mail'];
	$p=$_POST['pass'];
	$rp=$_POST['repass'];
	$ph=$_POST['photo'];


$sql="INSERT INTO signup_formvendor(Vendor_type,firstName,lastName,gender,dob,address,phoneNo,Email,password,confirmPassword,Attach_photo) 
VALUES('$VT','$fn','$ln','$g','$d','$a','$n','$m','$p','$rp','$ph')";

if($con->query($sql)){
	echo "<br>data inserted";
}
else{
	echo"Error".$con->error;
}
}
?>