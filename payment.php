<?php
require 'signupConfig.php';
if(isset ($_POST['confirm'])){
	
	$n=$_POST['name'];
	$m=$_POST['method'];
	$Cn=$_POST['Cnumber'];
	$d=$_POST['Edate'];
	$cv=$_POST['cw'];
	$CHn=$_POST['CHname'];

	

$sql="INSERT INTO payment(name,payMethod,cardNo,exp_date,cvv,cardName) 
VALUES('$n','$m','$Cn','$d','$cv','$CHn')";

if($con->query($sql)){
	echo "<br>data inserted";
}
else{
	echo"Error".$con->error;
}
}
?>