<?php

include_once '../connection.php';
session_start();

if(isset($_POST['submit'])){
    $loginEmail=$_POST['loginEmail'];
    $loginPass=$_POST['loginPassword'];


    $stat = "SELECT * FROM  user;";
    $result = mysqli_query($conn,$stat);
    $resultcheck = mysqli_num_rows($result);
 
    if($resultcheck > 0)
    {
    while($row = mysqli_fetch_assoc($result))
    {
        
        if($row['user_email'] == $loginEmail &&  $row['user_password'] == $loginPass){
            $_SESSION["userID"]= $row['user_id'];
           
           
            if($row["is_admin"] == '1'){
                header("Location: ./admin.html");
            }else{
                header ("location: ../home.html");
            }
        }else{if($row['user_email'] !== $loginEmail ||  $row['user_password'] !== $loginPass){
         
                $ERROR= "<span style='color: red;'> The Email or password is wrong </span>";
          
        }
    }
    }
}
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////


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

<label for="loginEmail">Email</label>
<br>
<input type="text" name='loginEmail' placeholder= 'Email@...' ><br>

<br>
<label for="loginPassword">Password</label>
<br>
<input type="password" name='loginPassword' placeholder='Passwprd'><br>
<?php if(isset($ERROR)){echo $ERROR;}?>

<br><br>
<input type="submit" name='submit' value='submit'>

</form>



</body>
</html>
