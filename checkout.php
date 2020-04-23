<!DOCTYPE html>
<html>
<style>
*{
	margin: 0;
	padding: 0;
}
body
{
	background-image: url("new.jpg");
	font-family: sans-serif;
  	opacity: 0.8;
  	filter: alpha(opacity=50); /* For IE8 and earlier */

}
.app-container
{
	height: 600px;
	width: 350px;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	position:absolute;
}
.top-box
{
	height: 180px;
	border-bottom-left-radius: 80px;
	border-bottom-right-radius: 80px;
}
.top-box p
{
	text-align: center;
	position: absolute;
	padding-top: 100px;
	color: #000;
}
.left-icon
{
	float: left;
	margin-left: 30px;

}
.middle-box
{
	height: 150px;
	background-image: 
	margin: -70px 30px 20px;
	color: #f2f2f2;
	text-align: center;
	font-size: 12px;
	border-radius: 10px;
}
.middle-box h1
{
	padding-top: 30px;
	padding-bottom: 30px;
	font-size: 50px;
	font-weight: normal;
}
.middle-box h1 span
{
	font-size: 20px;
	margin-left: 5px;
	bottom: 18px;
	position: relative;
}
.bottom-box
{
	top: 200px;
	position: absolute;
}
.payment-option-btn1
{
	color: black;
	margin: 5px 30px;
	top: 100px;
	padding: 20px 20px;
	height: 60px;
	width: 290px;
	border: none;
	cursor: pointer;
	background-color: white;
	border-bottom-left-radius: 150px;
	border-bottom-right-radius: 150px;
	border-top-left-radius: 150px;
	border-top-right-radius: 150px;
}
.payment-option-btn1 a
{
	color: black;
	text-decoration: none;
}
.payment-option-btn2
{
	text-decoration: none;
	color: black;
	margin: 5px 30px;
	top: 100px;
	padding: 20px 20px;
	height: 60px;
	width: 290px;
	background-color: white;
	border: none;
	cursor: pointer;
	border-bottom-left-radius: 150px;
	border-bottom-right-radius: 150px;
	border-top-left-radius: 150px;
	border-top-right-radius: 150px;
}
.payment-option-btn2 a
{
	color: black;
	text-decoration: none;
}
.payment-option-btn3
{
	color: black;
	margin: 5px 30px;
	top: 100px;
	padding: 20px 20px;
	height: 60px;
	width: 290px;
	border: none;
	cursor: pointer;
	border-bottom-left-radius: 150px;
	border-bottom-right-radius: 150px;
	border-top-left-radius: 150px;
	border-top-right-radius: 150px;
	background-color: white;
}
.payment-option-btn4
{
	color: black;
	margin: 5px 30px;
	top: 100px;
	padding: 20px 20px;
	height: 60px;
	width: 290px;
	background-color: white;
	border: none;
	cursor: pointer;
	border-bottom-left-radius: 150px;
	border-bottom-right-radius: 150px;
	border-top-left-radius: 150px;
	border-top-right-radius: 150px;
}
.payment-option-btn4 a
{
	color: black;
	text-decoration: none;
}
.payment-option-btn5
{
	color: black;
	margin: 5px 30px;
	top: 100px;
	padding: 20px 20px;
	height: 60px;
	width: 290px;
	background-color: white;
	border: none;
	cursor: pointer;
	border-bottom-left-radius: 150px;
	border-bottom-right-radius: 150px;
	border-top-left-radius: 150px;
	border-top-right-radius: 150px;
}
.payment-option-btn1:hover a
{
	color: red;
}
.payment-option-btn2:hover a
{
	color: red;
}
.payment-option-btn1:hover 
{
	transform: scale(1.1);
}
.payment-option-btn2:hover 
{
	transform: scale(1.1);
}
.payment-option-btn3:hover
{
	transform:scale(1.1);
	color: red;
}
.payment-option-btn4:hover a
{
	color: red;
}
.payment-option-btn4:hover 
{
	transform:scale(1.1);
}
.payment-option-btn5:hover
{
	transform:scale(1.1);
	color: red;
}

</style>
<head>
	<title> PAYMENT </title>
	<link rel="stylesheet" type="text/css" href="style12.css">
</head>
<body>
	<div class="app-container">
		<div class="top-box">
			<p><span class="left-icon"></span><h1><center><img src="payment.png" width="200px" height="200px"></center></h1><span class="right-icon"></span></p>
		</div>
		<div class="middle-box">
			<hi><i class="fa fa-inr" aria-hidden="true"></i></hi>
		</div>
		<div class="bottom-box">
			<button type="button" class="payment-option-btn1"><strong><center><a href="cod.php">CASH ON DELIVERY</center></strong></button>
			<button type="button" class="payment-option-btn2"><strong><center><a href="card.php">CREDIT/DEBIT CARD</a></center></strong></button>
			<button type="button" class="payment-option-btn4"><strong><center><a href="qrcode.jpg">PAYTM</a></center></strong></button>
			<button type="button" class="payment-option-btn3"><strong><center>PAYPAL</center></strong></button>
			<button type="button" class="payment-option-btn5"><strong><center>NET BANKING</center></strong></button>
        </div>
    </div>
</body>
</html>