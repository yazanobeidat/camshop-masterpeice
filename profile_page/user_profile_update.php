
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
    <link rel="stylesheet" href="../css/profile_edit.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <a href="./user_profile.php"></a>
    <div class="wrapper">
        <div class="left">
          
        </div>
        <div class="right">
            <div class="info">
                <h3>  User Data </h3>
                <br>
                <div class="info_data">
                     <div class="data">
                         
                        <form action="" method="post" class="bigdiv">
                            <div class="div1">
                            
                                <label for="mail" class="form-text"><strong>First Name</strong></label>
                                <input type="text" placeholder="first name" name="first_name" class="form-control" value= <?php echo $user['user_first_name']; ?> >
                                <br>
                                <label for="psw" class="form-text"><strong>Last Name</strong></label>
                                <input type="text" placeholder="last name" name="last_name" class="form-control" value=  <?php echo $user['user_last_name']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Email</strong></label>
                                <input type="text" placeholder="last name" name="email" class="form-control" value=  <?php echo $user['user_email']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Phone Number</strong></label>
                                <input type="text" placeholder="phone num" name="phonenum" class="form-control" value=  <?php echo $user['phone_num']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>User Password</strong></label>
                                <input type="text" placeholder="password" name="password" class="form-control" value=  <?php echo $user['user_password']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Age</strong></label>
                                <input type="text" placeholder="age" name="age" class="form-control" value=  <?php echo $user['age']; ?>>
                                <br>
                                <label for="psw" class="form-text"><strong>Gender</strong></label>
                                <input type="text" placeholder="gender" name="gender" class="form-control" value=  <?php echo $user['gender']; ?>>
                            <br>
                                <input type="submit" name="submit" value="confirm information" class="btn btn-secondary">
                            </div>
                        </form>
  
            <!-- ============================================ -->

            <div class="social_media">
                <ul>
                  <li><a href="../index.php"> Home page <i class="fa-solid fa-house"></i></a></li>
                  <li><a href=" ./user_profile.php"> Back to Profile <i class="fa-solid fa-arrow-left"></i></a></li>
                 
              </ul>
          </div>
        </div>
    </div>
</body>
</html>

