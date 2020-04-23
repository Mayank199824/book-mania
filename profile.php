<html>
<style>
	body
	{
		background-image: url(bks/profile.jpg);
		position: center;
		background:cover;
	}
	h1
	{
		margin:0px 0px 0px 43%;
	}
	b
	{
		margin:100px 0px 0px 300px;
	}
	a h2
	{
		margin: 100px 0px 0px 550px;
		padding-left: 5px;
		width:180px;
		height: 30px;
		border-radius: 10px;
		background-color: green;
		color:white;
		text-decoration: none;
	}
	a 
	{
		text-decoration: none;
	}
	a h2:hover
	{
		transform: scale(1.1);
	}
</style>
<head>
	<title>user profile</title>
</head>
<body>
	<h1>PROFILE</h1><br><br>
<?php
session_start();
$use=$_SESSION['user'];
$server = "localhost";
$username = "root";
$passward = "";
$dbname = "yess";

$conn = mysqli_connect($server,$username,$passward,$dbname); 
 $query = "SELECT `Username` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum=$row['Username'];
 //echo $sum;

 ?>
 <h3><b>USERNAME</b><b><?php echo $sum; ?></b> </h3>
 <?php 
 $query = "SELECT `Email` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum=$row['Email'];
?>
</br>
<h3><b>EMAIL</b><b><?php echo $sum; ?></b></h3>
<?php 
 $query = "SELECT `Contact_Number` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum=$row['Contact_Number'];
?>
<br>
<h3><b>CONTACT NUMBER</b><b><?php echo $sum; ?></b></h3>
<?php 
 $query = "SELECT `Address` FROM `no` WHERE Username='$use'";
 $queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum=$row['Address'];
?>
<br>
<h3><b>ADDRESS</b> <b><?php echo $sum;?></b></h3>  
	<a href="edit.php"><h2> EDIT DETAILS </h2></a>




</body>
</html>