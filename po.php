<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yess";
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['username']) && isset($_GET['email']) && isset($_GET['contact_no']) && isset($_GET['address']) && isset($_GET['password'])){
$user=$_GET['username'];
$pass=$_GET['password'];
$contact=$_GET['contact_no'];
$email=$_GET['email'];
$address=$_GET['address'];
$query=mysqli_query($conn,"SELECT * FROM no where Username='$user'");
$query1=mysqli_query($conn,"SELECT * FROM no where Email='$email'");
	if(mysqli_num_rows($query)!=0)
	{
		echo "username already exists!";
	}
	elseif (mysqli_num_rows($query1)) {
		echo "Email already exists";
	}
	else
	{
		mysqli_query($conn,"INSERT INTO no (Username, Email,Contact_number,Address,Password)
VALUES ('$user','$email','$contact','$address','$password')");
		header("location:login.html");
	
	echo "new record created succesfully";
}}
?>
<script>  
function validateform(){  
var name=document.myform.username.value;  
var password=document.myform.password.value;
var num=document.myform.contact_no.value;
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address ");  
  return false;  
  }  
else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
else if(isNaN(num)){  
  document.getElementById("numloc").innerHTML="Enter Numeric value only";  
  return false;  
}   
}  
</script>  
<html>
<head>
<title> Signup Form Design Tutorial </title>   
    <link rel="stylesheet" type="text/css" href="sign_up.css">
</head>
<body >

    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
          
        <form method="GET" name="myform" action="po.php" onsubmit="return validateform()">
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="tel" name="contact_no"  pattern="[0-9]{10}" required  placeholder="Contact Number"/>
          <input type="text" name="address" placeholder="Address">
          <input type="password" name="password" placeholder="Password"/>
          <input type="submit" name="signup-button" value="Sign up"/>
        </form>  
      </div>
    </div>
    <div>
      <a href="login.html"> <h3> Already user login here </h3></a>
    </div>
</body>    
</html>