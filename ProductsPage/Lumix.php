


<?php
session_start();
include_once "../connection.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
    <script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./product.css">


    <link rel="stylesheet" href="../css/footer.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container">


            <a class="navbar-brand" href="#"><img src="../img/projectimg/flat-camera-circle.png" width="150px" height="auto" alt=""></a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../ProductsPage/Sony.php">Sony</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Fujifilm.php">Fujifilm</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Lumix.php">Lumix</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Canon.php">Canon</a></li>
                            <li><a class="dropdown-item" href="../ProductsPage/Nikon.php">Nikon</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../index.php#discount">Our discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about us/about_us.php"> About us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="#footer">
                            Contact us
                        </a>
                </ul>
                <form action="" method="post">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <!-- profile icon/login/register -->

                        <?php
                
        
                          $check=0;
                        
                          if(isset($_SESSION["userID"])){

                               $profile_icon= '
                               <a class="nav-link" href="../profile_page/user_profile.php">
                                   <i class="fa-solid fa-user"></i>
                               </a>';

                               $cart='
                               <a class="nav-link" href="../cart.php">
                               <i class="fa-solid fa-cart-shopping"></i>
                                 </a>'
                               
                               
                               ?>
                        <form action="" method='post'>
                            <li class="nav_item"><input class="nav-link" type="submit" name="logout" value=" Logout "
                                    style="border:none; background-color: white; cursor:pointer">
                            </li>
                        </form>

                        <?php if(isset($_POST['logout'])){
                                   
                                    session_destroy();
                                    echo'<script>
                                     setTimeout(() => {
                                         window.location = "../index.php";
                                       })
                                     
                                     </script>';
                               
                                  }

                          }else
                           
                           { echo '<li class="nav-item ">
                            <a class="nav-link " href="../loginPage/login.php">
                                Login </a> </li>';

                            echo '<li class="nav-item ">
                            <a class="nav-link " href="../registerPage/register.php">
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

    <!-- ===================================== -->

    <section class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>
                        Lumix
                        </h2>
                        <hr class="mx-auto mb-5 line" style="width: 30px;
        height: 2px;
        background-color: #c20f1e95;">
                    </div>
                </div>
            </div>

            <div class="row align-items-center mb-5 ">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                           <a href="./Sony.php"> <li class="grid_sorting_button buttob d-flex flex-column justify-content-center align-items-center  is-checked"
                            data-filter="*">  Sony</li></a>
                           <a href="./Fujifilm.php">  <li class="grid_sorting_button buttob d-flex flex-column justify-content-center align-items-center "
                            data-filter="">Fujifilm</li></a>
                           <a href="./Canon.php"> <li class="grid_sorting_button buttob d-flex flex-column justify-content-center align-items-center "
                            data-filter="*">Canon</li></a>
                          <a href="./Nikon.php">  <li class="grid_sorting_button buttob d-flex flex-column justify-content-center align-items-center "
                            data-filter="*">Nikon</li></a>
                         <a href="./Lumix.php">   <li class="grid_sorting_button buttob d-flex flex-column justify-content-center align-items-center "
                            data-filter="*">Lumix</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= -->
<section class="shop">
    <div class="container">
        <div class="row">

        <?php

// select products
$sql_query="SELECT * FROM products ;";
$result = $conn->query($sql_query);
$result_check4= mysqli_num_rows($result);

if($result_check4 > 0){

    while($row=mysqli_fetch_assoc($result)){

        $img=$row['product_image'];
        $productName=$row['product_name'];
        $price=$row['product_price'];
        $category=$row['product_category'];

        $product_id=$row['product_id'];
       
        // check category
        if($category ==='Lumix'){

        ?>
            <div class="col-lg-4 text-center m-auto" style="margin: 20px auto !important;">
                <div class="card border-0 bg-light mb-2" style="width: 72%; margin: auto;">
                    <div class="card-body">
                        <a href="../singleProduct.php?id=<?php echo $row['product_id']?>"><img src="../<?php echo $img ?>" height="200px" width="205px" alt=""></a>
                    </div>
                </div>
                <h6 style="margin-top: 20px;"><?php  echo $productName ?></h6>
                <p>$<?php echo $price ?></p>
                <!-- <form action="" method="post">

                 <a href='../singleProduct.php?id=<?php echo $row['product_id']?>' > <input type="button" name="view" value="View Product"class="add-to-cart" ></a>
                 
                 </form> -->

            </div>

         
            <?php 

            }
        }
    }
 ?>
        </div>
    </div>

</section>

<!-- ================================================ -->
<div class="clearfix"></div>
    <div class="footer-clean" style="margin-top: 70px;" >
        <footer id="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Our Team</h3>
                        <ul>
                            <li><a href="#"> <h6>yazan</h6> </a></li>
                            <li><a href="#"> <h6>Rami</h6> </a></li>
                            <li><a href="#"> <h6>Ahmad</h6> </a></li>
                            <li><a href="#"> <h6>khaled</h6> </a></li>
                          
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 id="contact">Contact US</h3>
                        <ul>
                            <li><a href="https://camshop@gmail.com">camshop@gmail.com</a></li>
                         
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        
                        <h3 style="text-align:center;">Always make sure that Cam Shop is your best choice</h3>
                        
                    </div>
                    <div class="col-lg-3 item social">
                        <a href="https://ar-ar.facebook.com/" target="_blank"><i class="icon ion-social-facebook"></i></a>
                        <a href="https://twitter.com/?lang=ar" target="_blank"><i class="icon ion-social-twitter"></i></a>
                        <a href="https://accounts.snapchat.com/" target="_blank"><i class="icon ion-social-snapchat"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Camshop© 2023</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>