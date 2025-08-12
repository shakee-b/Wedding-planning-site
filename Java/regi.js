var fnameError=document.getElementById("fname-error");

function validatefName(){

	var firstname=document.getElementById("fname").value;
	
	if(firstname.length==0){
		fnameError.innerHTML="Name is required";
		return false;
	}
	else if(!firstname.match(/^[A-Za-z]+$/)){
		fnameError.innerHTML="Name is inappropriate";
		return false;
	}
	fnameError.innerHTML='<img src="Images/tick.png" width=20px>';
	return true;
}



var lnameError=document.getElementById("lname-error");

function validatelName(){
	var lastname=document.getElementById("lname").value;
	
	if(lastname.length==0){
		lnameError.innerHTML="Name is required";
		return false;
	}
	else if(!lastname.match(/^[A-Za-z]+$/)){
		lnameError.innerHTML="Name is inappropriate";
		return false;
	}
	lnameError.innerHTML='<img src="Images/tick.png" width=20px>';
	return true;
}

var AddError=document.getElementById("add-error");

function validateAdd(){
	var address=document.getElementById("add").value;
	
	if(address.length==0){
		AddError.innerHTML="Address is required";
		return false;
	}
	
	AddError.innerHTML='<img src="Images/tick.png" width=20px>';
	return true;
}
var numError=document.getElementById("num-error");
function Validatenum(){
	var phone=document.getElementById("num").value;
	if(phone.length==0){
		numError.innerHTML="Number is required";

		return false;
	}
		if(phone.length!==10){
		numError.innerHTML="Number should have 10 digits";
		return false;
	}
	
	if(!phone.match(/^[0-9]{10}$/)){
		numError.innerHTML="Number is required";
		
	}
		numError.innerHTML='<img src="Images/tick.png" width=20px>';
	return true;
	
}

    var emailAddressErr=document.getElementById("mail-error");
function ValidateMail(){
var Eaddress=document.getElementById("mail").value;
  	if(phone.length==0){
		emailAddressErr.innerHTML="Email is required";
		return false;
	}
  
   else if(!Eaddress.match(/^[A-Za-z]\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
	   emailAddressErr.innerHTML="Email is invalid";
		return false;
   }
   	emailAddressErr.innerHTML='<img src="Images/tick.png" width=20px>';
	return true;
	
 }
 var passError=document.getElementById("repass-error");
function checkpassword(){
	var pass=document.getElementById("pass").value;
	var repass=document.getElementById("repass").value;
	if(pass==0){
		 passError.innerHTML="Password not entered";
	}
	else if(pass==repass){
		 passError.innerHTML="Password matched";
		return true;
}
else{
	 passError.innerHTML="Password not matched";
	return false;
}
}