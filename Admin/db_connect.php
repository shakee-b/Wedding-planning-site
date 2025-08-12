<?php

$conn = new mysqli("localhost","root","","wedding_planning");

if($conn->connect_error){
	die("Db connection failed - ".$conn->connect_error);
}

?>