

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="css/profile.css">
</head>
<body>




	<h2>Insert,Search,Update and Delete Your Profile</h2>

	<form method="get" action="crud2.php">
		Name : <br>
		<input type="text" name="name" ><br>
		Telephone : <br>
		<input type="text" name="tel" ><br>
		E-mail <br>
		<input type="text" name="email" ><br>
		NIC : <br>
		<input type="text" name="nic" ><br><br>
		<input type="submit" name="insert" value="Submit">
		<input type="reset" name="reset" value="Clear"> 
		<input type="submit" name="update" value="Update">
		<input type="hidden" name="updateid">
		<input type="submit" name="delete" value="Delete">	<br><br>
		Search by NIC : <br>
		<input type="text" name="searchnic">
		<input type="submit" name="search" value="Search">
	</form>

</body>
</html>