<?php

include_once '../connection.php';
session_start();

if(isset($_POST['submit'])){
    $loginEmail=$_POST['loginEmail'];
    $loginPass=$_POST['loginPassword'];
    $_SESSION['email']=$loginEmail;
  
    $sql1="SELECT * FROM user WHERE user_email='$loginEmail'";
$result= $conn->query($sql1);
    $row= $result->fetch_assoc(); 

    if(isset($row))
    {
        

    echo $row['user_email'];
    echo $row['user_password'];
    

    }
    else
    {
        echo "wrong information";
    }
     
    //$result_check= mysqli_num_rows($result);
//     print_r( $row['user_password']) ;
//     if ($result_check > 0) {
//         while ($row=mysqli_fetch_assoc($result)) {
         

 
//          if (($loginPass == ($row['user_password'])) && ($loginEmail == ($row['user_email']))){
// echo $loginPass . ($row['user_password']) . $loginEmail . ($row['user_email']);
//             //  $_SESSION['email']= $loginEmail;

//               header ("location: ../home.html");
//  }
// if($loginPass !== ($row['user_password'])) {
//     $PasswordErr="<span style=' color:red'>Incorrect Password</span><br>";



// }

// //////////////////////////// no error massage ///////////////////
// if($loginEmail !== ($row['user_email'])){
//     $EmailERR="<span style=' color:red'>Incorrect Email</span><br>";
//     echo 'hello';
// }
// }}




// // ///////////////////////////////////// admin ////////////////////////
// // if(($loginEmail == "ayaalsawa279@gmail.com") && ($loginPass == "AAAaaa123***")){
// //     header ("location: admin.php");
// // }

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

</head>
<body>
    
<form action="" method="post">

<label for="loginEmail">Email</label>
<br>
<input type="text" name='loginEmail' placeholder= 'Email@...' ><br>
<?php if(isset( $EmailERR)){echo $EmailERR;}?>
<br><br>
<label for="loginPassword">Password</label>
<br>
<input type="password" name='loginPassword' placeholder='Passwprd'><br>
<?php if(isset( $PasswordErr)){echo  $PasswordErr;}?>
<br><br>
<input type="submit" name='submit' value='submit'>

</form>



</body>
</html>
