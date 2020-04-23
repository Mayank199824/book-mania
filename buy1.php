<?php

$quantity=$_GET['quantity'];
$id=$_GET['book_id'];

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = mysqli_connect($server,$username,$password,$dbname); 
session_start();
$us=$_SESSION['user'];


  $sql="INSERT INTO `cart` (book_id,book_name,author_name,category,quantity,cost,book_image)
SELECT book_id,book_name,author_name,category,quantity,cost,book_image
FROM book123
WHERE book123.book_id= $id;";

$sql1="UPDATE `cart`
SET `$us`.quantity=$quantity
WHERE `$us`.book_id=$id ";

if (mysqli_multi_query($conn, $sql)) {
  		
                echo "<script> alert('item is added to cart'); ";
                echo 'window.location.href="car1.php";';
                echo "</script>";

            }else {
                echo "Error: " . $sql. "<br>" . mysqli_error($conn);
            }



?>