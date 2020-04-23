<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yess";
$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
if(isset($_GET['username']) && isset($_GET['password'])){
    $user=$_GET['username'];
$pass=$_GET['password'];
//$userpass = sha1($pass);
     $result = mysqli_query($conn, "SELECT * FROM no  WHERE Username='$user' ");
     $result1=mysqli_query($conn,"SELECT * from no WHERE Password='$pass");

   if(mysqli_num_rows($result)!=0 )
   {
    session_start();
    $_SESSION['user']=$user;
    $bi=$_SESSION['user'];
    	echo "<script type='text/javascript'>alert('welcome $bi');
				window.location='new1.php';
			</script>";
    }
    

    else{
        echo "not registered user";

    }
    }

//?>
<html>
<style>
    body{
    margin: 0;
    padding: 0;
    background: url(book1.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.btn-primary
{
    border: none;
    outline: none;
    width: 250px;
    height: 35px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.btn-primary:hover
{
    cursor: pointer;
    background: blue;
    color: #fff;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: blue;
}
</style>
<head>
<title>Login Form Design</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="GET" action="./login.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit" class="btn btn-primary"> LOGIN </button><br>
            <br>
            <a href="#">Forgot your password?</a><br>
            <a href="sign_up.php">New user sign up here</a>
        </form>    
    </div>
</body>
</html>