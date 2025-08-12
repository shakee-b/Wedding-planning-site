<html>
<head>
<title>Registration form</title>

<link rel="stylesheet" href="registration.css">
<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
<h2>Dream Day Designers...</h2>
<div class="page">
<h1>Sign Up</h1>


<br><br>
<!choosing vendor or customer!>
<div class="button-box">
<div class="Btn"></div>
<a href="registration form.html"><button>Customer</button></a>
<a href="vendor.html"><button>Vendor</button></a>
<form method="post" action="SaveFormVendor.php">
<br><br><br>
<label>Vendor type:</label>
<select id="type" name="type">
<option value="beautician">Beautician</option>
<option value="photographer">Photographer</option>
<option value="florist">Florist</option>
<option value="Cake">Cake Designer</option>
<option value="cards">Wedding card designers</option>
<option value="travel">Travel and transport</option>
</select>
<br><br><br>
<label>First Name</label>
<br>
<input type="text" id="fname" name="fname" onkeyup="validatefName()">
<div id="fname-error"></div>
<br><br>
<label>Last Name</label>
<input type="text" id="lname" name="lname" onkeyup="validatelName()">
<div id="lname-error"></div>
<br><br>

<label>Gender</label>
<br>
<input type="radio" id="gen" name="gen" value="male">Male
<input type="radio" id="gen" name="gen" value="female">Female<br>
<div id="gen-error"></div>
<br><br>
<label>Date of birth</label>
<input type="date" id="date" name="date">
<div id="birth-error"></div>
<br><br>
<label>Address</label>
<input type="text" rows="8" cols="20" id="add" name="add" onkeyup="validateAdd()">
<div id="add-error"></div>
<br><br>
<label>Phone Number</label>
<input type="text" id="num" name="num" onkeyup="Validatenum()">
<div id="num-error"></div>
<br><br>
<label>Email</label>
<input type="text" id="mail" name="mail" onkeyup="ValidateMail()">
<div id="mail-error"></div>
<br><br>
<label>Password</label>
<input type="password" id="pass" name="pass" >
<div id="pass-error"></div>
<br><br>
<label>Confirm Password</label>
<input type="password" id="repass" name="repass" onkeyup="checkpassword()">
<div id="repass-error"></div>
<br><br>
<label>Attach photographs of your creations</label>
<input type="file" id="photo" name="photo">
<br><br>
<input type="checkbox" id="accept">
<label>Accept privacy policy and terms</label>
<br><br><br>
<input type="submit" value="Register" id="btn" name="btnSubmit">
</form>
</div>

<script src="regi.js"></script>

</body>

</html>