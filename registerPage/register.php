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

   ////////////////////////////////////////////////////


   $stat = "SELECT * FROM  user;";
   $result = mysqli_query($conn,$stat);
   $resultcheck = mysqli_num_rows($result);

   if($resultcheck > 0)
   {
   while($row = mysqli_fetch_assoc($result))
   {
       if($email == $row['user_email']) {

        $emailERR2="<span style=' color:red'>The Email is already exist</span>";
        $email_correct2= false;

       }else{
        $email_correct2= true;
       }


   }}


   ///firstname
   if(preg_match($name_regex,$first_name))
   {
       $firstname_correct= true;
   }
   else
   {
    $fnameERR="<span style=' color:red'>Required only characters</span>";
    $firstname_correct= false;
   }
   //////lastname
   if(preg_match($name_regex,$last_name))
   {
       $lastname_correct= true;
   }
   else
   {
    $lnameERR="<span style=' color:red'>Required only characters</span>";
    $lastname_correct= false;
   }
   ///////email
   if(filter_var($email,FILTER_VALIDATE_EMAIL))
   {
       $email_correct= true;
   }
   else
   {
    
    $emailERR="<span style=' color:red'>Invalid email</span>";
    $email_correct= false;
   }
   ///////phone number
   if(preg_match($phoneNumber_regex,$phonenumber))
   {
       $phonenum_correct= true;
   }
   else
   {
    $phoneERR="<span style=' color:red'>Should be 14 digits</span>";
    $phonenum_correct= false;
   }
   ////////////// password
   if(preg_match($password_regex,$password))
   {
       $password_correct= true;
   }
   else
   {
    $passwordERR="<span style=' color:red; ' >The password should contain <br> uppercase and lowercase <br> letters, numbers,<br> and special characters </span>";
    $password_correct= false;
   }
   ////////////// confirm password
   if($password === $confirm_password)
   {
       $confirm_password_correct= true;
   }
   else
   {
    $cpasswordERR="<span style=' color:red; '>Passwords don't match</span>";
    $confirm_password_correct= false;
   }

if($firstname_correct && $lastname_correct && $email_correct && $phonenum_correct && $password_correct && $confirm_password_correct &&  $email_correct2)
{
$sql = "INSERT INTO user (user_first_name, user_last_name, user_email,phone_num,user_password,age,gender)
VALUES ('$first_name', '$last_name', '$email','$phonenumber','$password','$age','$gender');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location:../loginpage/login.php");


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
<input type="text" name="firstName" placeholder="First Name"><br>
<?php if(isset( $fnameERR)){echo  $fnameERR;}?>

<br><br>
<!-- last name  -->
<label for="lastName">Last Name</label>
<br>
<input type="text" name='lastName' placeholder='Last Name'><br>
<?php if(isset(  $lnameERR)){echo  $lnameERR;}?>

<br><br>
<!-- email -->
<label for="email">Email</label>
<br>
<input type="email" name='email' placeholder='Email@...'><br>
<?php if(isset( $emailERR)){echo  $emailERR;}?>
<?php if(isset( $emailERR2)){echo  $emailERR2;}?>
<br><br>
<!-- phonenum  -->
<label for="phoneNum">Phone Number</label>
<br>
<input type="text" name="phoneNum" placeholder="Phone Number"><br>
<?php if(isset( $phoneERR)){echo  $phoneERR;}?>
<br><br>
<!-- password  -->
<label for="passWord">Password</label>
<br>
<input type="password" name="passWord" ><br>
<?php if(isset($passwordERR)){echo $passwordERR;}?>

<br><br>
<!-- Confirm Password -->
<label for="CpassWord">Confirm Password</label>
<br>
<input type="password" name="CpassWord"><br>
<?php if(isset($cpasswordERR)){echo $cpasswordERR;}?>
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