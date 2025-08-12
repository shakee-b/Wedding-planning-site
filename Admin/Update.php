<?php

require("admin_auth.php");
$id =isset($_GET['ID'])?$_GET['ID']:"0";


$sql="SELECT * FROM signup_form WHERE ID='$id'";
$fn="q";
$n="a";
$d="s";
$m="d";

$result=$conn->query($sql);
if($result->num_rows>0){
	
	if($row=$result->fetch_assoc()){
$fn=$row['firstName'];
$n=$row['phoneNo'];
$d=$row['dob'];
$m=$row['Email'];
	}
}
?>

<html>
<body>
<form method="POST">
    <input type="text" name="new_firstName" placeholder="New First Name" value="<?php echo $fn;?>"  >
    <input type="text" name="new_num" placeholder="New Number" value="<?php echo $n;?>">
    <input type="text" name="new_date" placeholder="New Date" value="<?php echo $d;?>">
    <input type="text" name="new_email" placeholder="New Email" value="<?php echo $m;?>">

    <input type="text" readonly name="update_id" value="<?php echo $id;?>">
    <button type="submit" name="update">Update Record</button>
</form>
<?php
if(isset($_POST['update'])){
	
	$fn=$_POST['new_firstName'];
	$n=$_POST['new_num'];
	$d=$_POST['new_date'];
	$m=$_POST['new_email'];
	
	$updateid=$_POST['update_id'];
	
	$sql = "UPDATE  signup_form SET firstName='$fn',phoneNo='$n',dob='$d',Email='$m'  WHERE `ID`='$updateid'";
	
  

	if ($conn->query($sql)=== TRUE) {
	echo"Updated successfully...";
	} else {
		echo "Error updating record: " . $conn->error;
	}
}
?>
</body>
<html>
