<?php
require("admin_auth.php");

$id =isset($_GET['ID'])?$_GET['ID']:"0";
$sql="SELECT * FROM signup_form WHERE ID='$id'";
$result=$conn->query($sql);

if($result->num_rows>0){
	echo "<table border='1'>";
	echo "<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Gender</th>
	<th>dob</th>
	<th>Address</th>
	<th>PhoneNo</th>
	<th>Email</th>
	<th>password</th>
	<th>confirmPassword</th>
	</tr>";
	
	while($row=$result->fetch_assoc()){
		
		echo "<tr>
		<td>".$row['ID']."</td>
		<td>".$row['firstName']."</td>
		<td>".$row['lastName']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['dob']."</td>
		<td>".$row['address']."</td>
		<td>".$row['phoneNo']."</td>
		<td>".$row['Email']."</td>
		<td>".$row['password']."</td>
		<td>".$row['confirmPassword']."</td>
		</tr>";
	}
	echo "</table>";
}
else{
	echo "error";
}
?>