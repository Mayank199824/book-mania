<!DOCTYPE html>
<style>
	.img
	{
		width: 100%;
		height:250px;
	}
  .card-body
  {
    height:400px;

  }
  .card h6
  { text-align: center;
    height:50px;
  }
</style>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
    <link rel="stylesheet "href="cart.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link  href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+script" rel="stylesheet">
</head>
<body class="container">
  <?php //include 'new.php';?>

	<div class="row">
	<?php 
	session_start();
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'db');
	//$searchq = $_GET['search'];
  //$searchq = preg_replace("#[^0-9a-z]#i"," ", $searchq);
$searchy=$_SESSION['search'];
  $query = "SELECT * FROM book123 WHERE author_name LIKE '%$searchy%' OR  book_name LIKE '%$searchy%' OR  category LIKE '%$searchy%' "; 
  $queryfire = mysqli_query($con,$query);

  $num = mysqli_num_rows($queryfire);

	if ($num >0) {
		while ($product = mysqli_fetch_array($queryfire)) {

			?>
      <form action="car.php" method="GET" name="searchy">
      <input type="hidden" name="search" placeholder="search..." class="form-control">
  </form>
             <div class="col-lg-3 col-mid-3 col-sm-12">
             	<form action="buy.php" method="GET">
             		<div class="card">
             			<h6 class="card-title bg-info text-white p-2"> <?php echo $product['book_name']; ?></h6>
                  
             			<div class="card-body">  
                        <a href="buy.php?id=<?php echo $product['book_id'];?>"><img src="<?php echo $product['book_image']; ?>"alt="book" class="img"></a>
                         <h6> &#8377; <?php echo $product['cost']; ?></h6> 
                        

                            <input type="text" name="quantity" class="form-control"   value=" " placeholder="Quantity">
                            <input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
                         
             			</div>
             			<div class="d-flex">
                   <!--<a href=register_course.php?id=<?php $roll//&code=".$row['course_code']";?>><input type=submit value=Register>-->
             				<button class="btn btn-success flex-fill">Add to Cart</a></button>
             			</div>
             		</div>
             		<br>
             	</form>
             </div>

			<?php
		}
	}

	?>
</div>
</body>
</html>