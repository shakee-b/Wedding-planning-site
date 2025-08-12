<?php
include('signupConfig.php');


if(isset($_GET['insert'])){
//Get Variables From the form

	$name=$_GET['name'];
	$tel=$_GET['tel'];
	$nic=$_GET['nic'];
	$email=$_GET['email'];

//insert query
	$sql = "INSERT INTO `table`(`name`, `tel`, `email`, `nic`) VALUES ('$name', '$tel', '$email', '$nic')";

	if ($con->query($sql) === TRUE) {
		echo"<br>Data submited";
	} else {
		echo "Error: " . $sql . "<br>" . $con->error;
	}
}
if(isset($_GET['search'])){
	$searchnic=$_GET['searchnic'];
	$sql = "SELECT * FROM table WHERE nic='$searchnic'";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			$name=$row['name'];
			$tel=$row['tel'];
			$nic=$row['nic'];
			$email=$row['email'];
			$id=$row['id'];
			header("Location: http://localhost/crud/index.php?search=yes&name='$name'&id='$id'&tel='$tel'&nic='$nic'&email='$email'");
		}
	} else {
		header("Location: http://localhost/crud/index.php?search=no");
	}
}
if(isset($_GET['update'])){
	$name=$_GET['name'];
	$tel=$_GET['tel'];
	$nic=$_GET['nic'];
	$email=$_GET['email'];
	$updateid=$_GET['updateid'];
	
  $sql = "UPDATE `table` SET `name`='$name',`tel`='$tel',`email`='$nic',`nic`='email'  WHERE `name`='$name'";

	if ($con->query($sql)=== TRUE) {
		echo"<br>Data is updated";
	} else {
		echo "Error updating record: " . $con->error;
	}
}
if(isset($_GET['delete'])){
	$name=$_GET['name'];
	
	$updateid=$_GET['updateid'];
	$sql = "DELETE FROM `table` WHERE `name`='$name'";

	if ($con->query($sql) === TRUE) {
		echo"<br>Data is Delete";
	} else {
		echo "Error deleting record: " . $con->error;
	}
}
$con->close();
?>