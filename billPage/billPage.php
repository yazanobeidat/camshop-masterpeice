<?php
include_once "../connection.php";
session_start();
 ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/footer.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&family=Lobster&family=Lora&family=Sacramento&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="./css/footer.css">
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>



    <title>Document</title>
</head>
<body>
    
<header>
<header>
<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">Luxury</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about us/about_us.html"> About us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#contact">
                            Contact us
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#discount">Our discount</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORIES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="./ProductsPage/Dress.php">Dress</a></li>
                          <li><a class="dropdown-item" href="./ProductsPage/Suit.php">Suits</a></li>
                          <li><a class="dropdown-item" href="./ProductsPage/Accessories.php">Accessories</a></li>
                          <li><a class="dropdown-item" href="./ProductsPage/Men_shoes.php">Men Shoes</a></li>
                          <li><a class="dropdown-item" href="./ProductsPage/Women_shoes.php">Women Shoes</a></li>
                         
                        </ul>
                      </li>
                    
                </ul>
                <form action="" method="post">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <!-- profile icon/login/register -->
                    
                <?php

                          $check=0;
                        
                          if(isset($_SESSION["userID"])){

                               $profile_icon= '
                               <a class="nav-link" href="./profile_page/user_profile.php">
                                   <i class="fa-solid fa-user"></i>
                               </a>';

                               $cart='
                               <a class="nav-link" href="./cart.php">
                               <i class="fa-solid fa-cart-shopping"></i>
                                 </a>'
                               
                               
                               ?>
                               <form action="" method='post'>
                           <li class="nav_item"><input class="nav-link" type="submit" name="logout" value=" Logout " style="border:none; background-color: white;">
                                </li>
                                   </form>
                                 
                                  <?php if(isset($_POST['logout'])){
                                   
                                    session_destroy();
                                    echo'<script>
                                     setTimeout(() => {
                                         window.location = "home.php";
                                       })
                                     
                                     </script>';
                               
                                  }

                          }else
                           
                           { echo '<li class="nav-item ">
                            <a class="nav-link " href="./loginPage/login.php">
                                Login </a> </li>';

                            echo '<li class="nav-item ">
                            <a class="nav-link " href="./registerPage/register.php">
                                Register </a> </li>';
                           }?>
                       <!-- <li class="nav-item">
                      

                    </li> -->

                       <li class="nav-item">
                       <?php if(isset( $profile_icon)){echo $profile_icon;}?>

                    </li>
                  
                    <li class="nav-item">
                    <?php if(isset( $cart)){echo $cart;}?>

                    </li>
                </ul>
                </form>

            </div>
        </div>
    </nav>
          

     
    </header>
          

     
    </header>


<?php


$sql_query="SELECT * FROM checkout;";
$result = $conn->query($sql_query);
$result_check= mysqli_num_rows($result);

// check result
// if($result_check > 0){

  

//     while($row=mysqli_fetch_assoc($result)){



//       $Fname= $row['firist_name'];
//       $Lname= $row['last_name'];
//       $city = $row['city'];
//       $country = $row['country'];
//       $state = $row['state'];
//       $street_address = $row['street_address'];






        // $productName=$row['product_name'];

        // $productPrice=$row['order_price'];

        // $orderQuantity=$row['order_quantity'];

        // $total =$row['firist_name'];
        


        


        //  }
        // };
?>

<!-- <table class="table" style="border:1;">
  <thead>
    <tr>
      <th scope="col">product</th>
      <th scope="col">Total</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $productName  ?></th>
      <td><?php echo $productPrice?></td>

    </tr>
    <tr>
      <th scope="row">Paymnet Method</th>
      <td>Cash on delivery</td>

    </tr>
    <tr>
      <th scope="row">Total</th>
      <td colspan="2"><?php echo $total ?></td>
      

    </tr>
  </tbody>
</table>

 -->


<!-- <p>Thank you for purchasing <?php echo $Fname ?> <?php echo $Lname  ?> from: <?php echo $country?> / <?php echo $city?> / <?php echo $state?>   </p>

<?php echo $street_address?> 
 -->


<?php 
// $sql_query2="SELECT * FROM cart;";
// $result2 = $conn->query($sql_query2);
// $result_check2= mysqli_num_rows($result2);

// // check result
// if($result_check2 > 0){

  

//     while($row=mysqli_fetch_assoc($result2)){



//       $productName=$row['product_name'];

//         $productPrice=$row['order_price'];

//         $orderQuantity=$row['order_quantity'];




//     }}
?>


<?php

if (isset($_SESSION['userID'])){

  $sql_query="SELECT * FROM checkout;"; 
  $result = $conn->query($sql_query);
  $result_check= mysqli_num_rows($result);


  $sql_query2="SELECT * FROM cart;";
  $result2 = $conn->query($sql_query2);
  $result_check2= mysqli_num_rows($result2);


  if($result_check > 0){


    while($row=mysqli_fetch_assoc($result)){

           
      $Fname= $row['first_name'];
           
      $Lname= $row['last_name'];
          
      $city = $row['city'];
           
      $country = $row['country'];
            
      $state = $row['state'];
          
      $street_address = $row['street_address'];
          
      $phone = $row['phone'];



   



    while($row2=mysqli_fetch_assoc($result2)){

                $productName=$row2['product_name'];

                $productPrice=$row2['order_price'];
        
                $orderQuantity=$row2['order_quantity'];
               
                $order_subtotal=$row2['order_subtotal'];
              



    }


  }
?>

<!-- <?php echo $Fname ?>;
<?php echo  $Lname?>;
<?php echo $city ?>;
<?php echo $country ?>;
<?php echo $state ?>;

<?php echo $productName ?>;
<?php echo  $productPrice?>;
<?php echo $orderQuantity ?>;
<?php echo $order_subtotal ?>; -->


<div class="coontainer">
  <div class="row">

</div>
<div class="container">
  <div class="row">






  </div>
</div>
<!-- ********************************************************************************************************************** -->
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                     <p >Thank you for purchasing </p>
                    




              <!-- <div ><p> <?php echo $Fname ?> <?php echo $Lname  ?> From: <?php echo $country?> / <?php echo $city?> / <?php echo $state?>   </p>
            
            </div>
            <p>your phone is :  <?php echo $phone?> </p>
           

                  <p>your order has been submitted</p> 

                  <button type="button" class="btn btn-outline-success"><a href="../index.php">Done</a></button>
               </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"> -->

              
            
              
               

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ********************************************************************************************************************** -->



<?php


}


}


?>

<div class="footer-clean"  >
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Our Team</h3>
                        <ul>
                            <li><a href="#"> <h6>Ibrahim</h6> </a></li>
                            <li><a href="#"> <h6>Raghad</h6> </a></li>
                            <li><a href="#"> <h6>Hadi</h6> </a></li>
                            <li><a href="#"> <h6>Aya</h6> </a></li>
                          
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contact</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Job openings</a></li>
                            <li><a href="#">Employee success</a></li>
                            <li><a href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Company Name © 2018</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
