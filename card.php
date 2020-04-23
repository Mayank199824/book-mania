<!DOCTYPE html>
<style>
	body
{
		background-image: url("new.jpg");
		font-family: sans-serif;
  		opacity: 0.8;
  		filter: alpha(opacity=50); /* For IE8 and earlier */

}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500);

body {
  padding: 60px 0;
  background-color: rgba(178,209,229,0.7);
  margin: 0 auto;
  width: 600px;
}
.body-text {
  padding: 0 20px 30px 20px;
  font-family: "Roboto";
  font-size: 1em;
  color: #333;
  text-align: center;
  line-height: 1.2em;
  border-bottom-left-radius: 50px;
	border-bottom-right-radius: 50px;
	border-top-left-radius: 50px;
	border-top-right-radius: 50px;
	font-weight: bold;
}
.form-container {
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.card-wrapper {
  background-color: #6FB7E9;
  width: 100%;
  display: flex;

}
.personal-information {
  background-color: #3C8DC5;
  color: #fff;
  padding: 1px 0;
  text-align: center;
}
h1 {
  font-size: 1.3em;
  font-family: "Roboto"
  font-weight: bold;
}
input {
  margin: 1px 0;
  padding-left: 3%;
  font-size: 14px;
  font-weight: bold;
}
input[type="text"]{
  display: block;
  height: 50px;
  width: 97%;
  border: none;
  font-weight: bold;
}
input[type="email"]{
  display: block;
  height: 50px;
  width: 97%;
  border: none;
  font-weight: bold;
}
input[type="submit"]{
  display: block;
  height: 60px;
  width: 100%;
  border: none;
  background-color: #3C8DC5;
  color: #fff;
  margin-top: 2px;
  cursor: pointer;
  font-size: 0.9em;
  text-transform: uppercase;
  font-weight: bold;
  cursor: pointer;
  font-weight: bold;
}
input[type="submit"]:hover{
  background-color: #6FB7E9;
  color: red;
  transition: 0.3s ease;
  font-weight: bold;
}
#column-left {
  width: 46.8%;
  float: left;
  margin-bottom: 2px;
}
#column-right {
  width: 46.8%;
  float: right;
}

@media only screen and (max-width: 480px)
{
  body 
  {
    width: 100%;
    margin: 0 auto;
  }
  .form-container {
    margin: 0 2%;
  }
  input {
    font-size: 1em;
  }
  #input-button {
    width: 100%;
  }
  #input-field {
    width: 96.5%;
  }
  h1 {
    font-size: 1.2em;
  }
  input {
    margin: 2px 0;
  }
  input[type="submit"]{
    height: 50px;
    font-weight: bold;
  }
  input[type="submit"]:hover
  {
  	color: red;
  }
  #column-left {
    width: 96.5%;
    display: block;
    float: none;
  }
  #column-right {
    width: 96.5%;
    display: block;
    float: none;
  }
}

</style>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="card.css">
<div class="body-text"></div>
  <form>
    <div class="form-container">
      <div class="personal-information">
        <h1></strong>PAYMENT INFORMATION</h1></strong></h1>
      </div>
           
          <input id="column-left" type="text" name="first-name" placeholder="First Name"/>
          <input id="column-right" type="text" name="last-name" placeholder="Lastname"/>
          <input id="input-field" type="text" name="number" placeholder="xxxx-xxxx-xxxx-xxxx"/>
          <input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
          <input id="column-right" type="text" name="cvc" placeholder="CVV"/>
         
          <div class="card-wrapper"></div>
      
          <input id="input-field" type="text" name="street address" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>
          <input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>
          <input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="5" placeholder="ZIP code"/>
          <input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
          <input id="input-button" type="submit" value="Submit"/>
        
    </form>
  </div>

</body>
</html>