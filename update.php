<?php
$server = "localhost";
$username = "root";
$passward = "";
$dbname = "yess";

$conn = mysqli_connect($server,$username,$passward,$dbname); 
session_start();
$us=$_SESSION['user'];
$email=$_GET['email'];
$contact=$_GET['contact'];
$address=$_GET['address'];


$sql="UPDATE `no`
SET `no`.Email=$email
WHERE `no`.Username=$us ";


$sql1="UPDATE `no`
SET Contact_Number='$contact'
WHERE Username='$us' ";

$sql2="UPDATE `no`
SET Address='$address'
WHERE Username='$us' ";


if (mysqli_multi_query($conn, $sql1)) {
  	if(mysqli_multi_query($conn,$sql2)){
      if(mysqli_multi_query($conn,$sql2)){
  		
                echo "<script> alert('profile is updated'); ";
                echo 'window.location.href="profile.php";';
                echo "</script>";

            }}}else {
                echo "Error: " . $sql1. "<br>" . mysqli_error($conn);
            }