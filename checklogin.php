<?php
session_start();
require ("signupConfig.php");

$fn=$_POST['username'];
$p=$_POST['password'];
$sql="SELECT * FROM signup_form WHERE firstName='$fn' AND password='$p'";
$result=$con->query($sql);
if ($result->num_rows>0){
	echo "<br>login successful....";
	
if($row=$result->fetch_assoc()){
	$_SESSION['id']=$row['ID'];
}
header("Location:userprofile.html");	
}
else{
	echo"<br>login failed...";
	header("Location:index2.php?msg=error");	
}
?>