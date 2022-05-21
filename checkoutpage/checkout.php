<?php
include_once "../connection.php";
session_start();
$user_id=$_SESSION['userID'];
echo $_SESSION['userID'];
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

// $product_id="1";
$checkoutData="SELECT product_id FROM checkout;";
$resultData=mysqli_query($conn,$checkoutData);
while($row=mysqli_fetch_assoc($resultData)){
	$product_id=$row['product_id'];
}
$sql5 = "INSERT INTO checkout (product_id,user_id, firist_name, last_name, country, state, city, street_address, zipcode, phone, order_email)
VALUES ( '$product_id','$user_id','$first_name', '$last_name', '$country','$state','$city','$street_address','$postcode','$phone_number','$email_address');";
if ( $conn->query($sql5 ) === TRUE) {
	
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql5 . "<br>" . $conn->error;
  }
  $conn->close();
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
	<div class="row">
		<div class="col-md-5 container bg-default">
			<h1 class="my-4">
                Checkout
        	</h1>
        	<hr style="background-color: rgba(3, 50, 239, 0.804); height:3px">
			<h4 class="my-4">
				Billing details
			</h4>
			<form action="../billPage/billPage.php" method="post" >
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
	
		</div>

	
		<div class="col-md-5 col-lg-3 col-xl-3 offset-lg-1 offset-xl-2 container ">
      <div class="p-3" style="border:1px solid blue ">
        <h2 class="fw-bold">Your order</h2>
        <div class="d-flex justify-content-between mt-2">
          <h4>Product</h4> <h4>Subtotal</h4>
        </div>
		<hr>
		<?php
		$sql1="SELECT * FROM cart WHERE user_id={$_SESSION['userID']}";
		$result= mysqli_query($conn , $sql1);
		$result_check= mysqli_num_rows($result);
		
		if ($result_check > 0) {
			while($row=mysqli_fetch_assoc($result)){
		
				$items=$row['product_name'].'  x'. $row['order_quantity'];
				$itemprice=$row['order_price'] * $row['order_quantity'];
			
				echo  "<div class='d-flex justify-content-between mt-2'>";
				echo "<span>".'$'.$items. "</span>";
				echo "<span>".'$'.$itemprice. "</span>";
			
			
			  echo "</div>";

			
			}}
///////////////////////total price/////////////////////////

$summ="SELECT *
FROM  checkout
WHERE user_id={$_SESSION['userID']};";
$result1= mysqli_query($conn , $summ);
$result_check1= mysqli_num_rows($result1);

if ($result_check1 > 0) {
	while($row1=mysqli_fetch_assoc($result1)){

	}
}
	?>
		<hr>
        <div class="d-flex justify-content-between mt-2">
          <span>Total </span> <span class="text-success"><?php echo $_SESSION['total'].'$'?></span>
        </div>
		<hr class="mb-4">
		<h6 class="fw-bold">Cash on delivery</h6>
		<p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
		<button class="btn btn-primary bt-lg btn-block" type="submit" name="submitt">PLACE ORDER</button>
      </div>
    </div>
  </div>
  </form>
</div>
</body>
</html>