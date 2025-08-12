<?php
session_start();
date_default_timezone_set("Asia/Colombo");

require("db_connect.php");

if(isset($_SESSION["admin_username"]) AND $_SESSION["admin_username"] != ""){

	$now = date("Y-m-d H:i:s");


}else{
	echo "<script>location.href ='login.php';</script>";
	die();
}

?>