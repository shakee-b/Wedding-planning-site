<?php

require 'signupConfig.php';
if(isset ($_POST['sub'])){
	$n=$_POST['Name'];
	$e=$_POST['email'];
	$p=$_POST['Phone'];
	$d=$_POST['date'];
	$t=$_POST['time'];
	$c=$_POST['city'];
	$v=$_POST['venue'];
	$m=$_POST['message'];


$sql="INSERT INTO inquiry_foam(name,email,phoneNo,Date,time,city,venue,description) 
VALUES('$n','$e','$p','$d','$t','$c','$v','$m')";

if($con->query($sql)){
	echo "<br>data inserted";
}
else{
	echo"Error".$con->error;
}
}

?>