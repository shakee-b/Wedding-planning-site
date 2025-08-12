<?php
require("admin_auth.php");

if(isset($_GET['delete'])){
	$fn=$_GET['ID'];
	

	$sql = "DELETE FROM signup_form WHERE `ID`='$fn'";

	if ($conn->query($sql) === TRUE) {
	
		
	} else {
		echo "Error deleting record: " . $con->error;
	}
}

?>