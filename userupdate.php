<?php
include 'signupConfig.php';
if(isset($_GET['update'])){
	
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$g=$_POST['gen'];
	$d=$_POST['date'];

	
  $sql = "UPDATE `signup_form` SET `firstName`='$fn',`lastName`='$ln',`gender`='$g',`dob`='$date'   WHERE `id`='$name'";

	if ($con->query($sql)=== TRUE) {
		header("Location: http://localhost/crud/index.php?update=yes");
	} else {
		echo "Error updating record: " . $conn->error;
	}
}
?>