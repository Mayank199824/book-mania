<html>
<style>
	body
	{
		background-image: url(bks/nature2.jpg);
		background: cover;
		position:center;
	}
	h1
	{
		margin:30px 0px 0px 480px;
	}
	input[type="tel"],
	input[type="text"],
	input[type="email"]
	{
		margin:100px 0px 0px 450px;
		width:300px;
		height: 30px;
		border-radius: 10px;
	}
	input[type="submit"]
	{
		margin: 70px 0px 0px 500px;
		width:200px;
		height: 30px;
		border-radius: 10px;
		background-color: green;
		color:white;
	}
	input[type="submit"]:hover
	{
		cursor: pointer;
		transform: scale(1.1);
	}
</style>
<head>
	<title></title>
</head>
<body>
	<h1> EDIT DETAILS </h1>
	<?php
	$server = "localhost";
$username = "root";
$passward = "";
$dbname = "yess";

$conn = mysqli_connect($server,$username,$passward,$dbname);
session_start();
$use=$_SESSION['user'];
$query = "SELECT `Email` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum=$row['Email'];
$query = "SELECT `Contact_Number` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum1=$row['Contact_Number'];
$query = "SELECT `Address` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum2=$row['Address'];

?>
<form action="update.php" method="GET">
	<input name="email" value="<?php echo $sum; ?>" type="email" placeholder=" New Email"><br>
	<input name="contact" value="<?php echo $sum1;?>"type="tel" pattern="[0-9]{10}" required  placeholder=" New Contact Number"><br>
	<input name="address" value="<?php echo $sum2;?>" type="text" placeholder=" New Address"><br>
	<input type="submit" value="UPDATE">
</form>
</body>
</html>