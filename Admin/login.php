<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="admin.css">
	<title>Admin login</title>
</head>
<body>


	<center>
		<h2>Admin Login</h2>
		<br><br>
		<form method="POST" action="">
			<input type="text" name="username" placeholder="Admin username"><br><br><br>
			<input type="password" name="password" placeholder="Admin password"><br><br><br>
			<input type="submit" name="submit"><br>
		</form>
	</center>

	

	<?php
	session_start();

	if(isset($_POST["username"]) AND isset($_POST["password"])){

		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username == $password){
			$_SESSION["admin_username"] = $username;
			echo "<script>location.href = 'index.php';</script>";
		}else{
			echo "Admin details wrong.";
		}

	}

	?>

	<br><br><br>

	<center>
	<p>
		For testing purpose: username - admin, password - admin
	</p>
</center>

</body>
</html>