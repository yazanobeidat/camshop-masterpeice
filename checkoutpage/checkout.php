<?php

include_once "../connection.php";


if(isset($_POST['submit']))
{
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$country=$_POST['country'];
$street_address=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$postcode=$_POST['postcode'];
$phone_number=$_POST['phonenumber'];
$email_address=$_POST['emailaddress'];


$sql = "INSERT INTO checkout (firist_name, last_name, country,state,city,street_address,zipcode,phone,order_email)
VALUES ('$first_name', '$last_name', '$country','$state','$city','$street_address','$postcode','$phone_number','$email_address');";
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Checkout Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
		<div class="col-md-4 container bg-default">
			<h1 class="my-4">
                Checkout
        </h1>
        <hr style="background-color: rgba(3, 50, 239, 0.804); height:3px">
			<h4 class="my-4">
					Billing details
			</h4>
			
			<form>
				<div class="form-row">
					<div class="col-md-6 form-group">
						<label for="firstname">First Name</label>
						<input type="text" class="form-control" name="fname" id="firstname" placeholder="First Name">
						<div class="invalid-feedback">
							Valid first name is required.
						</div>
					</div>

					<div class="col-md-6 form-group">
						<label for="lastname">Last Name</label>
						<input type="text" class="form-control" name="lname" id="lastname" placeholder="Last Name">
						<div class="invalid-feedback">
							Valid last name is required.
						</div>
					</div>
				</div>

			
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="country" required>
               </div>

               <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="city" required>
              </div>


				<div class="form-group">
					<label for="adress"> Street address</label>
					<input type="text" class="form-control"  name="street" id="adress" placeholder="1234 Main Street" required>
					<div class="invalid-feedback">
						Please enter your shipping address.
					</div>
				</div>

				<div class="form-group">
					<label for="state">State
						<span class="text-muted">(Optional)</span>
					</label>
					<input type="text" class="form-control" name="state" id="state" placeholder="state">
				</div>

                <div class="form-group">
					<label for="postcode">Postcode
					</label>
					<input type="text" class="form-control" name="postcode" id="postcode" placeholder="postcode">
				</div>

                <div class="form-group">
					<label for="tel">Phone Number
					</label>
					<input type="tel" class="form-control" name="phonenumber" id="tel" placeholder="000-0000-000">
				</div>

                
				<div class="form-group">
                    <label for="email">Email address </label>
                    <input type="email" class="form-control" name="emailaddress" id="email" placeholder="you@example.com" required>
            </div>

			

				<!-- <hr>
				
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="shipping-adress"> 
						Shipping address is the same as my billing address
					<label for="shipping-adress" class="form-check-label"></label>
				</div>

				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="same-adress">
						Save this information for next time
					<label for="same-adress" class="form-check-label"></label>					
					</div> -->

				<hr>

			
			

		

					<hr class="mb-4">
				
					<button class="btn btn-primary bt-lg btn-block" type="submit" name="submit">Continue to Checkout</button>
			</form>
		</div>
</body>
</html>
