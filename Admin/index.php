<?php
require("admin_auth.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="admin.css">
    <title>Admin panel</title>
</head>
<body>

<center>

    <h2>Welcome to wedding admin panel</h2>
    <br><br><br>

    <?php
   
   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `signup_form`";
    $result = $conn->query($sql);

    if ($result) {

        while ($row = $result->fetch_assoc()){
			
            ?>
            <p><?php echo($row["ID"]); ?></p>
			        <form method="get" action="readform.php">
    <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
    <button name="delete">Read Records</button>
</form>
<br><br>
        <form method="get" action="Delete.php">
    <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
    <button name="delete">Delete Records</button>
</form>

            <br><br>

       <form method="get" action="Update.php">
    <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
    <button name="update" >Update records</button>
</form>

            <br><br>
            <?php
        }
    } else {
 
        echo "Error: " . $conn->error;
    }
    $conn->close(); 
    ?>

</center>

</body>
</html>
