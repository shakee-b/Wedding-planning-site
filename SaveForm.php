<?php



	
require 'signupConfig.php';
if(isset ($_POST['btnSubmit'])){
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$g=$_POST['gen'];
	$d=$_POST['date'];
	$a=$_POST['add'];
	$n=$_POST['num'];
	$m=$_POST['mail'];
	$p=$_POST['pass'];
	$rp=$_POST['repass'];

$sql="INSERT INTO signup_form(firstName,lastName,gender,dob,address,phoneNo,Email,password,confirmPassword) 
VALUES('$fn','$ln','$g','$d','$a','$n','$m','$p','$rp')";

if($con->query($sql)){
	echo "<br>data inserted";
}
else{
	echo"Error".$con->error;
}
}

?>
