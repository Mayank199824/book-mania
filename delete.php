<?php 
  $id=$_GET['book_id'];
  $server = "localhost";
$username = "root";
$password = "";
$dbname = "db";
session_start();
$us=$_SESSION['user'];
$conn = mysqli_connect($server,$username,$password,$dbname); 
$query= "SELECT quantity AS value_sum FROM `$us`
where book_id=$id";
$sql="DELETE FROM `$us` where book_id=$id";

$queryfire = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum = $row['value_sum'];
$sql1="UPDATE book123
set quantity=book123.quantity + ($sum)
where book_id=$id";

if (mysqli_multi_query($conn, $sql)) {
    if(mysqli_multi_query($conn,$sql1)){
        if(mysqli_multi_query($conn,$query)){
                echo "<script> alert('item is removed from cart'); ";
                echo 'window.location.href="cart.php";';
                echo "</script>";}}

            } else {
                echo "Error: " . $sql. "<br>" . mysqli_error($conn);
            }
            //header('location=car.php');*/
            //<form action="buy.php" method="GET">
?>
