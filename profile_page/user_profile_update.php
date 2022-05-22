<?php
session_start();
$user_id= $_SESSION['userID'];
include "../connection.php";
$stmt = $conn->query("SELECT * FROM user WHERE user_id=$user_id ");
$user = $stmt->fetch_assoc();

if(isset($_POST['submit']))
{
    $first_name = $_POST['first_name'];
    $last_name=$_POST['last_name'];
   $email=$_POST['email'];
   $phonenumber=$_POST['phonenum'];
   $password=$_POST['password'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];

   $update_data = "UPDATE user SET user_first_name='$first_name', user_last_name='$last_name',user_email='$email',phone_num='$phonenumber',user_password='$password',age='$age',gender='$gender' WHERE user_id=$user_id;";
   $conn->query($update_data);

   header("Location: ./user_profile.php");
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_profile.css?v=<?php echo time(); ?>">


    <title>Document</title>
</head>
<body>
<form action="" method="post" class="bigdiv">
    <div class="div1">
    
<label for="mail"><strong>first name</strong></label>
<input type="text" placeholder="first name" name="first_name" value= <?php echo $user['user_first_name']; ?> >
<label for="psw"><strong>last name</strong></label>
        <input type="text" placeholder="last name" name="last_name" value=  <?php echo $user['user_last_name']; ?>>
        <label for="psw"><strong>last name</strong></label>
        <input type="text" placeholder="last name" name="email" value=  <?php echo $user['user_email']; ?>>
        <label for="psw"><strong>phone number</strong></label>
        <input type="text" placeholder="phone num" name="phonenum" value=  <?php echo $user['phone_num']; ?>>
        <label for="psw"><strong>user password</strong></label>
        <input type="text" placeholder="password" name="password" value=  <?php echo $user['user_password']; ?>>
        <label for="psw"><strong>age</strong></label>
        <input type="text" placeholder="age" name="age" value=  <?php echo $user['age']; ?>>
        <label for="psw"><strong>gender</strong></label>
        <input type="text" placeholder="gender" name="gender" value=  <?php echo $user['gender']; ?>>
      
   
    <br>
<input type="submit" name="submit" value="confirm information">
    </div>
    <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" alt="">
    



    </form>
    
 
 <a href="../index.php"><button>landing page</button></a>
</body>
</html>