<?php
session_start();



?>
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">    <link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        
    crossorigin="anonymous"></script>
    
<script src="https://kit.fontawesome.com/b4ff4e859b.js" crossorigin="anonymous"></script>

<!-- ********************************************************************************************************************* -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<!-- bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- fontawesome link  -->
<script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Grape+Nuts&family=Oleo+Script+Swash+Caps&family=Prompt&family=Roboto:wght@100&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/product.css">
<link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">

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
   
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    




</head>
<body>
<header>

  <nav class="navbar navbar-expand-lg ">
    <div class="container">
    <a class="navbar-brand" href="#"><img src="../img/projectimg/logo.png" width="125px" height="auto"alt=""></a>
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
                    <a class="nav-link" href="../about us/about_us.php"> About us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="#contact-us">
                        Contact us
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../index.php#discount">Our discount</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="../ProductsPage/Dress.php">Dress</a></li>
                      <li><a class="dropdown-item" href="../ProductsPage/Suit.php">Suits</a></li>
                      <li><a class="dropdown-item" href="../ProductsPage/Accessories.php">Accessories</a></li>
                      <li><a class="dropdown-item" href="../ProductsPage/Men_shoes.php">Men Shoes</a></li>
                      <li><a class="dropdown-item" href="../ProductsPage/Women_shoes.php">Women Shoes</a></li>
                     
                    </ul>
                  </li>
                
            </ul>
            <form action="" method="post">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <!-- profile icon/login/register -->
                
            <?php
            //  if(isset($_POST['submit'])){
                  
                  
                  // $profile_sql = "SELECT * FROM  user;";
                  // $profile_result = mysqli_query($conn,$profile_sql);
                  // $resultcheck = mysqli_num_rows( $profile_result);
               
                  // if($resultcheck > 0)
                  // ($row = mysqli_fetch_assoc( $profile_result));
                  // {
    
                      $check=0;

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
                        <a class="nav-link" href="../about us/about_us.php"> About us</a>
                    </li>

                    
                    <li class="nav-item ">
                        <a class="nav-link " href="#footer">
                            Contact us
                        </a>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORIES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../ProductsPage/Dress.php">Dress</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Suit.php">Suits</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Accessories.php">Accessories</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Men_shoes.php">Men Shoes</a></li>
                          <li><a class="dropdown-item" href="../ProductsPage/Women_shoes.php">Women Shoes</a></li>
                         
                        </ul>
                      </li>
                    
                </ul>
                <form action="" method="post">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <!-- profile icon/login/register -->
                    
                <?php
                //  if(isset($_POST['submit'])){
                      
                      
                      // $profile_sql = "SELECT * FROM  user;";
                      // $profile_result = mysqli_query($conn,$profile_sql);
                      // $resultcheck = mysqli_num_rows( $profile_result);
                   
                      // if($resultcheck > 0)
                      // ($row = mysqli_fetch_assoc( $profile_result));
                      // {
        
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
                  

                           {
                               
                            echo '<li class="nav-item ">
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
          

     
    </header>
<!-- ********************************************************************************************************************* -->


<!-- ********************************************************************************************************************* -->

<main>
<br><br><br >
<div class="container bg-light sticky-xxl-top">
<div class="wow">
<p>Abut Us</p> 
</div >

<!-- **************************************************Mini Nav******************************************************************* -->







</ul>
</div>
</nav>

</div>

    <main style="text-align: center;" >
      <p><h2 style="text-align: center; " class="wow"> How we are </h2></p>
      <p style="text-align: center;font-family: 'Grape Nuts';">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi maiores dolorum est ex deleniti alias reiciendis ut sunt rem deserunt mollitia eius officia, at, quo rerum quas ea necessitatibus architecto.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi maiores dolorum est ex deleniti alias reiciendis ut sunt rem deserunt mollitia eius officia, at, quo rerum quas ea necessitatibus architecto.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi maiores dolorum est ex deleniti alias reiciendis ut sunt rem deserunt mollitia eius officia, at, quo rerum quas ea necessitatibus architecto.</p>

      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-md-6">
            <img src="https://media.nastygal.com/i/nastygal/abb16342_light%20grey_xl?w=900&qlt=default&fmt.jp2.qlt=70&fmt=auto" style="width:300px;height: 500px; "  alt="">
          </div>
            <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
              <p style="font-family: 'Grape Nuts';">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum hic porro aperiam asperiores et iste possimus magnam voluptatem pariatur. Perferendis, maiores quis! Eveniet dolorem itaque libero omnis fuga. Maxime, dolor.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum hic porro aperiam asperiores et iste possimus magnam voluptatem pariatur. Perferendis, maiores quis! Eveniet dolorem itaque libero omnis fuga. Maxime, dolor.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum hic porro aperiam asperiores et iste possimus magnam voluptatem pariatur. Perferendis, maiores quis! Eveniet dolorem itaque libero omnis fuga. Maxime, dolor.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum hic porro aperiam asperiores et iste possimus magnam voluptatem pariatur. Perferendis, maiores quis! Eveniet dolorem itaque libero omnis fuga. Maxime, dolor. </p>
            </div>
        </div>
      </div>
<!-- ======================================================================================== -->




<section class="benefit">
  <div class="container"  >
      <div class="row benefit_row">

          <div class="col-lg-3 benefit_col">
              <div class="benefit_item d-flex flex-row align-item-center">
                  <div class="benefit_icon">
                      <i class="fa-solid fa-truck" aria-hidden="true"></i>
                  </div>
                  <div class="benefit_content">
                      <h6>
                          Free Shiping

                      </h6>
                      <p> Suffered Alteration is Some Form</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-3 benefit_col">
              <div class="benefit_item d-flex flex-row align-item-center">
                  <div class="benefit_icon">
                   <i class="fa-solid fa-arrow-rotate-left" aria-hidden="true"></i>

                  </div>
                  <div class="benefit_content">
                      <h6>
                          45 days return

                      </h6>
                      <p> Making it look like Readable</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-3 benefit_col">
              <div class="benefit_item d-flex flex-row align-item-center">
                  <div class="benefit_icon">
                      <i class="fa-solid fa-money-bill-1 "aria-hidden="true"></i>

                  </div>
                  <div class="benefit_content">
                      <h6>
                          Cash on delivery

                      </h6>
                      <p> The Internet tend To Repeat</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-3 benefit_col">
              <div class="benefit_item d-flex flex-row align-item-center">
                  <div class="benefit_icon">
                      <i class="fa-solid fa-clock" aria-hidden="true"></i>

                  </div>
                  <div class="benefit_content">
                      <h6>
                          Opening all week

                      </h6>
                      <p> 8:00AM - 10:00PM</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

</section>
<!-- ========================================================================================================================= -->

<div class="container">
  <div class="row">
    <p> <h2>Our Team</h2></p>

    <div  class="col">
      <img src="../Timg/100211491.jpg" style="width: 150px; border-radius: 50%;" alt="">
      <p><h3>Aya Al-sawa</h3></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe hic illum rem necessitatibus dolorem, debitis magnam consectetur aliquam perferendis voluptate optio nesciunt, facere incidunt corporis pariatur adipisci laborum dicta.</p>
    </div>
    <br><br><br>  
    <div class="col order-5">
      <img src="../Timg/49879845.jpg" style="width: 150px;border-radius: 50%;" alt="">
      <p><h3>Raghad Karasneh</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe hic illum rem necessitatibus dolorem, debitis magnam consectetur aliquam perferendis voluptate optio nesciunt, facere incidunt corporis pariatur adipisci laborum dicta.</p>
    </div>
    <div class="col order-1">
      <img src="../Timg/53655798.jpg" style="width: 150px;border-radius: 50%;"  alt="">
      </p><p><h3>Raghad Karasneh</h3></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe hic illum rem necessitatibus dolorem, debitis magnam consectetur aliquam perferendis voluptate optio nesciunt, facere incidunt corporis pariatur adipisci laborum dicta.</p>
    </div>
    <div class="col order-1">
      <img src="../Timg/257189215_1238389129957455_1119994174862516782_n.jpg" style="width: 150px;border-radius: 50%;"  alt="">
      </p><p><h3>Hadi AL-saden  </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore saepe hic illum rem necessitatibus dolorem, debitis magnam consectetur aliquam perferendis voluptate optio nesciunt, facere incidunt corporis pariatur adipisci laborum dicta.</p>
    </div>
   





  </div>
</div>

    </main>


<!-- ********************************************************************************************************************* -->
<div class="clearfix">   
<div class="footer-clean" style="margin-top: 70px;" >
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
              <div class="col-lg-3 item social" id="contact-us"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                  <p class="copyright">Company Name © 2022</p>
              </div>
          </div>
      </div>
  </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</div>

</body>
</html>