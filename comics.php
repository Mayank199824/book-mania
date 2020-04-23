<!DOCTYPE html>
<style>
	.img
	{
		width:100%;
		height: 250px;
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
	<title>search</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link  href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+script" rel="stylesheet">
</head>
<body class="container">
	
	<div class="row">
		<?php 
 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = mysqli_connect($server,$username,$password,$dbname); 



	$query = mysqli_query($conn,"SELECT * FROM book123 WHERE category='Comics'") or die("Could not search...");
	$count = mysqli_num_rows($query);
	if ($count== 0) 
	{
		$output = 'no result found';
	}
	else
	{
		while ($product = mysqli_fetch_array($query)) {

			?>
			 <form action="car.php" method="GET" name="searchy">
      <input type="hidden" name="search" placeholder="search..." class="form-control">
  </form>
             <div class="col-lg-3 col-mid-3 col-sm-12">
             	<form action="com.php" method="GET">
             		<div class="card">
             			<h6 class="card-title bg-info text-white p-2"> <?php echo $product['book_name']; ?></h6>

             			<div class="card-body">  
                        <a href="http://google.com"> <img src="<?php echo $product['book_image']; ?>"alt="book" class="img"></a>
                         <h6> &#8377; <?php echo $product['cost']; ?></h6> 
                         
                         <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                         <input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
             			</div>
             			<div class="d-flex">
             				<button class="btn btn-success flex-fill">Add to Cart</button>
             			</div>
             		</div>
             	</form>
             </div>

			<?php
		}
	}

	?>
</div>



</body>
</html>