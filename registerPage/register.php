<?php
include_once "../connection.php";


$name_regex="/^([a-zA-Z' ]+)$/";
// $email_regex="/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/";
$password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"; 
$phoneNumber_regex="/^\\(?([0-9]{3})\\)?[-.\\s]?([0-9]{3})[-.\\s]?([0-9]{4})?[-.\\s]?([0-9]{4})$/";

if(isset($_POST['submit']))
{
   $first_name=$_POST['firstName'];
   $last_name=$_POST['lastName'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phoneNum'];
   $password=$_POST['passWord'];
   $confirm_password=$_POST['CpassWord'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   ///firstname
   if(preg_match($name_regex,$first_name))
   {
       $firstname_correct= true;
   }
   else
   {

       echo "wrong1";
    $firstname_correct= false;
   }
   //////lastname
   if(preg_match($name_regex,$last_name))
   {
       $lastname_correct= true;
   }
   else
   {
    echo "wrong2";
    $lastname_correct= false;
   }
   ///////email
   if(filter_var($email,FILTER_VALIDATE_EMAIL))
   {
       $email_correct= true;
   }
   else
   {
    echo "wrong3";
    $email_correct= false;
   }
   if(preg_match($phoneNumber_regex,$phonenumber))
   {
       $phonenum_correct= true;
   }
   else
   {
    echo "wrong4";
    $phonenum_correct= false;
   }
   if(preg_match($password_regex,$password))
   {
       $password_correct= true;
   }
   else
   {
    echo "wrong5";
    $password_correct= false;
   }
   if($password === $confirm_password)
   {
       $confirm_password_correct= true;
   }
   else
   {
    echo "wrong6";
    $confirm_password_correct= false;
   }

if($firstname_correct && $lastname_correct && $email_correct && $phonenum_correct && $password_correct && $confirm_password_correct)
{
$sql = "INSERT INTO user (user_first_name, user_last_name, user_email,phone_num,user_password,age,gender)
VALUES ('$first_name', '$last_name', '$email','$phonenumber','$password','$age','$gender');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

}
else
{
    echo "somethings is wrong";
}
   
   
}
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
<style>
    body
    {
        display: flex;
        flex-direction:column;
        align-items: center;
        justify-content: center;
    }
    </style>


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


<label for="age">Age</label>
<br>
<input type="number" name='age' placeholder="Your Age">

<br><br>

<span>Gender</span>
<input type="radio" name="gender" value="Male">
<label for="Male">Male</label>
<input type="radio" name="gender" value="Female">
<label for="Female">Female</label>
<span>)</span>

<br>
<br>
<input type="submit" name='submit'>


</form>


</body>
</html>