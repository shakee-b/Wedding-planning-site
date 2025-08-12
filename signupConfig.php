<?php

$servername="localhost";
$username="root";
$password="";
$database="wedding_planning";

$con=new mysqli($servername,$username,$password,$database);
if($con->connect_error){
	die("Connection Error :".$con->connect_error);
}
else{
	echo "Connect to the database successfully";
}

?>