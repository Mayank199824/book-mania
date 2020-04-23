<!DOCTYPE html>
<style>
   .banner h2
	{
	font-family:serif;
	height: 27px;
	color: white;
	margin: -35px 0px 0px 80px ;	
    }
 	i
	{
	height: 20px;
	margin: 8px 20px; 
	color: #F4A460;
	}
	.banner
	{
	position:fixed;
	border-radius: 5px;
	height: 100px;
	top: 0;
	position: relative;
	background: #2F4F4F;
	margin-bottom: 2px;
	padding: 5px 5px;
	}
	b
	{
		margin-left: 45%;
		font-size: 20px;
	}
  	.img
	{
	    width: 100%;
	    height:250px;
	}
	.payment
	{
	  position: absolute;
	  top: 1050px;
	  left:1000px;
	}

	input[type="submit"]
	{
	    margin-bottom: 28px;
	    margin-left:25px;
	    width: 200px;
	    height: 50px;
	    background: green;
	    border: none;
	    border-radius: 10px;
	    color: #fff;
	    font-family: sans-serif;
	    font-weight: 750;
	    font-size:20px;
	    transition: 0.2s ease;
	    cursor: pointer;   
	}
	input[type="submit"]:hover
	{
		transform: scale(1.1);
	}
	a:hover
	{
	  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}
	h5
	{
		margin-left: 25px;
	}
</style>
<html>
<title>cart</title>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link  href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+script" rel="stylesheet">
    
</head>

<body>
  <div class="banner">
    <i class="fa fa-book fa-4x" aria-hidden="true"></i>
    <h2> BooKmania </h2>
  </div> 
	<div class="rowow">
    <b>ITEMS IN YOUR CART</b><br><br>
    <?php 
    session_start();
    $bum=$_SESSION['user'];
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'db');
    $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `$bum` ORDER BY 'book_id' ASC ";
    $queryfire = mysqli_query($con,$query);

    $num = mysqli_num_rows($queryfire);

    if ($num >0) 
    {
      while ($product = mysqli_fetch_array($queryfire)) 
      {

      ?>
            <div class="col-lg-3 col-mid-3 col-sm-12">
              <form method="GET" action="delete.php">
                <div class="card">
                  <h6 class="card-title bg-info text-white p-2"> <?php echo $product['book_name']; ?></h6>
                  
                  <div class="card-body">  
                        <a href="buy.php?id=<?php echo $product['book_id'];?>"><img src="<?php echo $product['book_image']; ?>"alt="book" class="img"></a>
                         <h6> &#8377; <?php echo $product['cost']; ?></h6> 
                          <input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
                          <input type="hidden" name="quantity" value="<?php echo $product['quantity'];?>">
                         <div class="d-flex">
                            <button class="btn btn-success flex-fill">Remove from cart</a></button>
                          </div>                   
                  </div>
                  <div class="d-flex">
                   <!--<a href=register_course.php?id=<?php $roll//&code=".$row['course_code']";?>><input type=submit value=Register>-->
                    
                  </div>
                </div>
                <br>
              </form>
            </div>

      <?php
    }
  }

$bu=$_SESSION['user'];
$query= "SELECT SUM(cost * quantity) AS value_sum FROM `$bu`";
$queryfire = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($queryfire); 
$sum = $row['value_sum'];
?>
<html>

<h5> Total Cost: &#8377;<?php echo $sum; ?>  </h5>
 </html>
<?php
?>
<br><a href="checkout.php"><input type="submit" value="payment"></a>
</body>