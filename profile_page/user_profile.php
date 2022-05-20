<?php
include "../connection.php";
session_start();
$user_id= $_SESSION['userID'];
$stmt = $conn->query("SELECT * FROM user Where user_id=$user_id");
$user = $stmt->fetch_assoc();

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
    <div class="bigdiv">

   
    <div class="div1">
        <p class="name">
            Full name
            <?php
            echo $user['user_first_name'];
            echo $user['user_last_name'];

            ?>
        </p>
        <p class="data">
            email:
        <?php
            echo $user['user_email'];

            ?>

        </p>   
        <p class="data">
        phone number:
        <?php
            echo $user['phone_num'];

            ?>

        </p>  
        <p class="data">
       age and gender:
        <?php
            echo $user['age'];
            echo "   ";
            echo $user['gender'];

            ?>

        </p>  

    </div>
    <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png" alt="">
    <a href="user_profile_update.php"><button>Update information</button></a>
 </div>
 <a href="employees.php"><button>landing page</button></a>
</body>
</html>