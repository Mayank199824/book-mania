<!DOCTYPE html>
<html>
<style>
	body
{
    background-image: url("new.jpg");
    font-family: sans-serif;
      opacity: 0.9;
      filter: alpha(opacity=50); /* For IE8 and earlier */
}
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  
    background-image: url("new.jpg");
    font-family: sans-serif;
      opacity: 0.9;
      filter: alpha(opacity=50); /* For IE8 and earlier */
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 500px;
  margin-left: 360px;
  margin-bottom: 40px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 20px;
}
input[type=number] {

  width: 500px;
  margin-left: 360px;
  margin-bottom: 40px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 20px;
}

label {
  margin-bottom: 10px;
  display: block;
}
label i
{
  z-index: 2;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0px 0px 450px;
  border: none;
  width: 400px;
  border-radius: 30px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover 
{
  transform: scale(1.1);
  background-color: #45a049;
}

span.price 
{
  float: right;
  color: grey;
}
@media (max-width: 800px) {
  .row 
  {
    flex-direction: column-reverse;
  }
  .col-25 
  {
    margin-bottom: 20px;
  }
}
</style>
<head>
<body>
	<link rel="stylesheet" type="text/css" href="cod1.css">
<div class="body-text"></div>
  <form>
    <div class="row">
  <div class="col-75">
    <div class="container">

        <div class="row">
          	<div class="col-50">
            <h3><center>CASH ON DELIVERY</center></h3>
            <label for="fname"><strong><center>Full Name<i class="fa fa-user"></i></center></strong></label>
            <input type="text" id="fname" name="firstname" placeholder="">
            <label for="email"><i class="fa fa-envelope"></i><strong><center>Email</center></strong></label>
            <input type="text" id="email" name="email" placeholder="">
            <label for="adr"><i class="fa fa-address-card-o"></i><strong><center>Address</center></strong></label>
            <input type="text" id="adr" name="address" placeholder="Country,State,City">
            <label for="adr"><i class="fa fa-address-card-o"></i><strong><center>Landmark</center></strong></label>
            <input type="text" id="adr" name="address" placeholder="StreetNo.,RoomNo.">
            <label for="city"><i class="fa fa-institution"></i><strong><center>Contact No.</center></strong></label>
            <input type="number" id="city" name="city" placeholder="">
            <label for="state"><strong><center>Pin Code</center></label></strong></label>
            <input type="text" id="state" name="Pin Code" placeholder="">
            </div>
            </div>
        </div>
        <div class="col-50">
	        <label>
	        <input type="checkbox" checked="checked" name="sameadr"> Address to be same while signup
	        </label>
  </form>
        </div>
  </div>

    </div>
  </div>
   <input type="submit" value="CONTINUE TO PAYMENT" class="btn">
    </form>
  </div>

</body>
</html>