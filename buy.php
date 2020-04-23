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
$conn = mysqli_connect($server,$username,$password,$dbname); 
$val1='select 1 from `books` LIMIT 1';
$val = mysqli_query($conn,$val1);
$exists = mysqli_query($conn,"select 1 from `$us`");

if($exists !== FALSE)
{
  $sql="INSERT INTO `$us` (book_id,book_name,author_name,category,quantity,cost,book_image)
SELECT book_id,book_name,author_name,category,quantity,cost,book_image
FROM book123
WHERE book123.book_id= $id;";

$sql1="UPDATE `$us`
SET `$us`.quantity=$quantity
WHERE `$us`.book_id=$id ";

$sql2="UPDATE `book123` 
SET `book123`.quantity=(`book123`.quantity)-$quantity
where book123.book_id=$id";

if (mysqli_multi_query($conn, $sql)) {
  	if(mysqli_multi_query($conn,$sql1)){
      if(mysqli_multi_query($conn,$sql2)){
  		
                echo "<script> alert('item is added to cart'); ";
                echo 'window.location.href="car.php";';
                echo "</script>";

            }}} else {
                echo "Error: " . $sql. "<br>" . mysqli_error($conn);
            }
}

else{
	$sql="CREATE TABLE `$us` (
book_id INT(20) ,
book_name VARCHAR(30) ,
author_name VARCHAR(30) ,
category VARCHAR(50),
quantity int(10),
cost int(10),
book_image varchar(30)
)";

$sql1="INSERT INTO `$us`(book_id,book_name,author_name,category,quantity,cost,book_image)
SELECT book_id,book_name,author_name,category,quantity,cost,book_image
FROM book123
WHERE book123.book_id= $id;";


$sql2="UPDATE `$us`
SET `$us`.quantity=$quantity
WHERE `$us`.book_id=$id ";

  
  if (mysqli_multi_query($conn, $sql)) {
  	if(mysqli_multi_query($conn,$sql1)){
  		if(mysqli_multi_query($conn,$sql2)){
  		
                echo "<script> alert('item is added to cart'); ";
                echo 'window.location.href="new1.php";';
                echo "</script>";

            }}} else {
                echo "Error: " . $sql. "<br>" . mysqli_error($conn);
            }}
?>