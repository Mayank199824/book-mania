<!DOCTYPE html>
<html>
<style>
.container1{
	margin: 10px 0px 0px 0px;
	padding: 0;
	width:1250px;
	height:400px;
	overflow: hidden;
}
.slider_box{
	position: absolute;
	margin: 0;
	padding: 0;
	background-position: center;
	position:relative;
	width: 7000px;
	animation-name: slideranimation;
	animation-duration:12s;
	animation-iteration-count: infinite;
	z-index: -1;
}
.sliderbox img
{
	float:left;
}
@keyframes slideranimation
{

	0%{
		left:0px;
	}
	20%{
		left: 0px;
	}
	25%{
		left:-1254px;
	}
	45%{
		left: -1254px;
	}

	50%{
		left:-2510px;
	}

	70%{
		left: -2510px;
	}
	75%{
		left: -3770px;
	}
}
</style>
<head>	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="style123.css">
	<link rel="stylesheet" type="text/css" href="section.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="top-nav-bar">
	<div class="search_box">
        <i class="fa fa-book fa-4x" aria-hidden="true"></i>
        <h2> BooKmania </h2>
        <form action="ca1.php" method="GET" name="searchy">
	    <input type="text" name="search" placeholder="search..." class="form-control">
		</form>
		<span class="input-group-text"><div class="fa fa-search fa-lg"></div></span>
	</div>

<div class="section">
	<ul>
		<li><a href="new1.php"> <i class="fa fa-home" aria-hidden="true"></i> HOME </a> </li>
		<li><a> CATEGORY <i class="fa fa-caret-down" aria-hidden="true"></i></a>
			<ul>
				<li><a href="novel.php "> NOVEL </a> </li>
				<li><a href="comics.php"> COMICS </a> </li>
				<li><a href="mag.php"> MAGZINES </a> </li>
				<li><a href="kids.php"> KIDS </a> </li>
				<li><a href="eng.php"> ENGINEERING </a> </li>
				<li><a href="med.php"> MEDICAL </a> </li>
				<li><a href="arts.php"> ARTS </a> </li>
				<li><a href="bus.php"> BUSINESS </a> </li>		
	    	</ul>
	    </li>
		<li><a> <?php session_start(); $hi=$_SESSION['user']; echo strtoupper($hi);?> <i class="fa fa-user" aria-hidden="true"></i></a>
			<ul>
				<li><a href="profile.php"> PROFILE </a></li>
				<li><a href="new.php"> LOG OUT </a> </li>
	    	</ul>
	    </li>
		<li><a href="about.php"> ABOUT </a></li>
		<li><a href="cart.php"> CART <i class="fa fa-shopping-cart"></i></a></li>
	</ul>
</div>
</div>
	<div class="container1">
		<div class="slider_box">
			<img src="book1.jpg"  width="1250px" height="400px">
			<img src="book5.jpg"  width="1250px" height="400px">
			<img src="book3.jpg"  width="1250px" height="400px">
			<img src="book4.jpg"  width="1250px" height="400px">
		</div>
	</div>
	<section class="featured-categories">
		<div class="container2">
			<div class="title-box">
				<h2>FEATURED</h2>
			</div>
			<div class="row">
				<div class="col-md-3">
					<?php
        			echo  '<a href="novel.php"><img src="abc/books9.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="comics.php"><img src="bks/book1.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="mag.php"><img src="bks/book2.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="kids.php"><img src="bks/book3.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="eng.php"><img src="bks/book4.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="med.php"><img src="bks/book5.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="arts.php"><img src="bks/book6.jpg"  /></a>';
					?>
				</div>
				<div class="col-md-3">
					<?php
        			echo  '<a href="bus.php"><img src="bks/book7.jpg"  /></a>';
					?>
				</div>
			</div>
		</div>
	</section>
		<br>
	<section class ="on-sale">
		<div class ="container3">
			<div class="title-box">
				<h2>ON SALE</h2>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=1 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							           <h6> <del>&#8377; 400</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>
				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=11 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
										</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 420</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=17 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 420</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>
			<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=20 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 430</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=9 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 300</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=8 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="submit" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="button" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 699</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=77 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 749</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=70 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6><del>&#8377; 720</del> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>
	</section>
	<section class="New-products">
		<div class ="container4">
			<div class="title-box">
				<h2>NEW BOOKS</h2>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=91 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=83 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=69 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>

				<div class="col-md-2">
					<div class="product-top">
						<?php 
							 // session_start();
							  $con = mysqli_connect('localhost','root');
							  mysqli_select_db($con,'db');
							 // $bum=$_SESSION['user'];
							  $query = "SELECT  `book_id`,`book_name`, `author_name`, `category`, `quantity`, `cost`, `book_image` FROM `book123` WHERE `book_id`=109 ORDER BY 'book_id' ASC ";
							  $queryfire = mysqli_query($con,$query);

							  $num = mysqli_num_rows($queryfire);

							  if ($num >0) 
							  {
							    while ($product = mysqli_fetch_array($queryfire)) 
							    {

						?>
				             	   
				                   	<img src="<?php echo $product['book_image'];?>">
			 
									<div class="overlay-right">
										<button type="button" class="btn btn-secondary" title="Quick Shop">
										<i class="fa fa-eye"></i>
										</button>
										<button type="button" class="btn btn-secondary" title="Add to Wishlist">
										<i class="fa fa-heart-o"></i>
										</button>
										<form action="buy3.php" method="GET">
											<input type="hidden" name="book_id" value="<?php echo $product['book_id'];?>">
											<input type="hidden" name="quantity" value="<?php echo 1;?>">
										<button type="submit" class="btn btn-secondary" title="Add to Cart">
										<i class="fa fa-shopping-cart"></i>
										</button>
									</form>
									</div>
									<div class="product-bottom text-center">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<h6> <?php echo $product['book_name']; ?></h6>
							            <h6> &#8377; <?php echo $product['cost']; ?></h6>
				             		</div>
				    			 <?php
				    			}
			    			}   ?>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>


	<section class="website-features">
	<div class="container5">
		<div class="row">
			<div class="col-md-3 feature-box">
				<img src="111.png">
				<p><b> 100% Original Books </b> are available at bookmania</p>
			</div>
			<div class="col-md-3 feature-box">
				<img src="112.jpg">
				<p><b>Return within 30 days </b> of receiving your order</p>
			</div>
			<div class="col-md-3 feature-box">
				<img src="113.png">
				<p><b>Get Free Delivery</b> for every order on more than price</p>
			</div>
			<div class="col-md-3 feature-box">
				<img src="114.jpg">
				<p><b>Pay Online</b> through multiple payment options</p>
			</div>
		</div>
	</div>
</section>

<section class="footer">
	<div class="container6 text-center">
		<div class="row">
			<div class="col-md-3">
				<br>
				<h2>Useful Links</h2>
				<br>
				<p><b>Privacy Policy</b></p>
				<p><b>Terms of Use</b></p>
				<p><b>Return Policy</b></p>
				<p><b>Discount Coupons</b></p>
			</div>
			<div class="col-md-3">
				<br>
				<h2>Site</h2>
				<br>
				<p><b>About Us</b></p>
				<p><b>Contact US</b></p>
				<p><b>Career</b></p>
				<p><b>Affiliate</b></p>
			</div>
			<div class="col-md-3">
				<br>
				<h2>Follow Us On</h2>
				<br>
				<p><i class="fa fa-facebook-official"><b> Facebook</b></i></p>
				<p><i class="fa fa-youtube-play"><b> Youtube</b></i></p>
				<p><i class="fa fa-linkedin-square" aria-hidden="true"><b> LinkedIn</b></i></p>
				<p><i class="fa fa-twitter"><b> Twitter</b></i></p>
			</div>
			<div class="col-md-3 footer-image">
				<h1><b>Download App</b></h1>
				<img src="116.png">
			</div>
		</div>
		
	</div>
</section>
<p class="Copyright"><i class="fa fa-copyright" aria-hidden="true"></i><b> 2019 BOOKMANIA</b></i></p>	
</body>
</html>