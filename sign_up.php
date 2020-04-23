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
    echo "<script type='text/javascript'>alert('Username already exist');
    </script>";
  }
  elseif (mysqli_num_rows($query1)) {
    echo "<script type='text/javascript'>alert('Email already exists');
    </script>";
  }
  else
  {
    mysqli_query($conn,"INSERT INTO no (Username, Email,Contact_number,Address,Password)
VALUES ('$user','$email','$contact','$address','$password')");
    header("location:login.php");
  
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
<style>
  body
{
    margin: 0;
    padding: 0;
    background-image: url(book2.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.left-box
{
    margin:6% 0% 0% 35%;
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    padding: 40px;
    width: 300px;
    height: 400px;  
    background-image: url("book1.jpg");  
}

h1
{
    margin: 0 0 20px 0;
    font-weight: 300;
    font-size: 28px;
}
input[type="tel"],
input[type="Number"],
input[type="text"],
input[type="password"]
{
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    outline: none;
    border-bottom: 1px solid #aaa;
    font-family: sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
}

input[type="submit"]
{
    margin-bottom: 28px;
    width: 120px;
    height: 32px;
    background: #f44336;
    border: none;
    border-radius: 2px;
    color: #fff;
    font-family: sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.2s ease;
    cursor: pointer;
    
}

input[type="submit"]:hover,
input[type="submit"]:focus
{
    background: #ff5722;
    transition: 0.2s ease;
}
h3
{
  text-decoration: none;   
  display: block;
  margin-top: -8px;
  background-color: grey;
    font-size: 18px;
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
    border-radius: 4px;
    font-family: sans-serif;
}
 h3:hover
{
  background-color: blue;
}
</style>

<head>
<title> Signup Form Design Tutorial </title>   
    <link rel="stylesheet" type="text/css" href="sign_up.css">
</head>
<body >

    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
          
        <form method="GET" name="myform" action="sign_up.php" onsubmit="return validateform()">
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="tel" name="contact_no"  pattern="[0-9]{10}" required  placeholder="Contact Number"/>
          <input type="text" name="address" placeholder="Address">
          <input type="password" name="password" placeholder="Password"/>
          <input type="submit" name="signup-button" value="Sign Up"/>
        </form>  
        <a href="login.php"> <h3> Already user login here </h3></a>
      </div>
    </div>
</body>    
</html>