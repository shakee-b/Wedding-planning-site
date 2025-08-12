<?php

require 'signupConfig.php';
if(isset ($_POST['submit'])){
	$N=$_POST['name'];
	$E=$_POST['email'];
	$pn=$_POST['phone'];
	$d=$_POST['des'];
	

$sql="INSERT INTO vendorform(Name,Email,PhoneNo,description) 
VALUES('$N','$E','$pn','$d')";

if($con->query($sql)){
	echo "<br>data inserted";
}
else{
	echo"Error".$con->error;
}
}

?>
