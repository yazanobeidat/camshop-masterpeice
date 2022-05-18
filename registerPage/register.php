<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- fontawesome link  -->
<script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>



</head>
<body>
    
<form action="" method="post">

<!-- first name -->
 <label for="firstName">First Nmae</label> 
<br>
<input type="text" name="firstName" placeholder="First Name">

<br><br>
<!-- last name  -->
<label for="lastName">Last Name</label>
<br>
<input type="text" name='lastName' placeholder='Last Name'>

<br><br>
<!-- email -->
<label for="email">Email</label>
<br>
<input type="email" name='email' placeholder='Email@...'>

<br><br>
<!-- phonenum  -->
<label for="phoneNum">Phone Number</label>
<br>
<input type="text" name="phoneNum" placeholder="Phone Number">

<br><br>
<!-- password  -->
<label for="passWord">Password</label>
<br>
<input type="password" name="passWord" >

<br><br>
<!-- Confirm Password -->
<label for="CpassWord">Confirm Password</label>
<br>
<input type="password" name="CpassWord">
<br><br>


<!-- **********************Extra********************************** -->

<!-- 
<label for="age">Age</label>
<br>
<input type="number" name='age' placeholder="Your Age">

<br><br>

<span>Gender(</span>
<input type="radio" name="gender" value="Male">
<label for="Male">Male</label>
<input type="radio" name="gender" value="Female">
<label for="Female">Female</label>
<span>)</span> -->


<input type="submit" name='submit'>


</form>


</body>
</html>