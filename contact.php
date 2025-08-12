<?php
require 'signupConfig.php';
if(isset ($_POST['button'])){
	
	$f=$_POST['fname'];
	$l=$_POST['lname'];
	$ma=$_POST['mail'];
	$mo=$_POST['mobile'];


	

$sql="INSERT INTO contact_us(firstName,lastName,Email,mobile) 
VALUES('$f','$l','$ma','$mo')";

if($con->query($sql)){
	echo "<br>data inserted";
}
else{
	echo"Error".$con->error;
}
}
?>