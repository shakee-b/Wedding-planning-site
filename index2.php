

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewpoint" content="width-device-width,initial-scale=1.0">
   <title>Dream Day Designers</title>
   <link rel="stylesheet" href="css/stylelog.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
<?php
$msg=isset($_GET['msg'])?$_GET['msg']:"";

if($msg=="error"){
	
	echo "<script>
alert('Invalid username or password');
</script>";
	
}

?>

   <div class="wrapper">
     <form action="checklogin.php" method="POST">
       <h1>Login</h1>
       <div class="input-box">
         <input type="text"  placeholder="Username " required name="username">
         <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password"
            placeholder="Password" required name="password">
            <i class='bx bxs-lock'></i>
        </div>

        <div class="remember-forgot">
            <label> <input type="checkbox"> Remember me </label>
            <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn" name="btnlogin">Login</button>
        
         


    </form>
   </div>

</body>

</html>


