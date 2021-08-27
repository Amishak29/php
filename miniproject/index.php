<html>
<body>
<center>
<script>
function validateForm(){
	var x=document.forms["myForm"]["a"].value;
	if(x==""){
		alert("Name must be filled");
		return false;
	}
	else if(document.forms["myForm"]["c"].value.length<6){
		alert("Password is too short!!");
		return false;
	}
	else if(document.forms["myForms"]["d"].value.length<10){
		alert("Valid phone number!!");
		return false;
	}
}
</script>
<form name="myForm" action="register.php" onsubmit="return validateForm()" method = "POST"> 
<b>Registration page</b><br><br>
Name	:<input type="text" name="a" size="30"><br><br>
Email	:<input type="email" name="b" size="30"><br><br>
Password	:<input type="password" name="c" size="30"><br><br>
Phone no.	:<input type="number" name="d" size="30"><br><br>
<input type="submit" value="Submit"><br><br>
<input type="reset" value="Reset"><br><br>
</form>
</center>
</body>
</html>
