<?php
include_once "./connection.php";

session_start();

if(isset($_SESSION["userID"])){
  $user_id=$_SESSION["userID"];
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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- fontawesome link  -->
    <script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                  <!-- profile icon -->
              
              
                </ul>

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
                          
                            echo '<a href="./profile_page/user_profile.php"><button type="submit" name="submit" class="nav-link " > <i class="fa-solid fa-user"></i> </button></a>';
                            echo '<a href="./loginPage/login.php"><button  class="nav-link " > Logout </button></a>';
                          }else{
                            echo '<a href="./loginPage/login.php"><button  class="nav-link " > Login </button></a>';
                            echo '<a href="./registerPage/register.php"><button  class="nav-link " > Register </button></a>';
                          }
                        
                        // }
                      
                      
                      // }?>
            
              </div>  
            </div>
          </nav>
          <nav>
          <!-- <button type='button' class="btn btn-outline-secondary"><a href="./ProductsPage/Dress.php">Dress</a></button>
          <button type='button' class="btn btn-outline-secondary"><a href="./ProductsPage/Accessories.php">Accessories</a></button>
          <button type='button' class="btn btn-outline-secondary"><a href="./ProductsPage/Men_shoes.php">Men Shoes</a></button>
          <button type='button' class="btn btn-outline-secondary"><a href="./ProductsPage/Suit.php">Suit</a></button>
          <button type='button' class="btn btn-outline-secondary"><a href="./ProductsPage/Women_shoes.php">Wome nShoes</a></button>
           -->

           <nav>
          <nav class="navbar navbar-expand-lg bg-ligth">

          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Dress.php">Dress</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Accessories.php">Accessories</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Men_shoes.php">Men Shoes</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Suit.php">Suit</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="./ProductsPage/Women_shoes.php">Women Shoes</a>

            </ul>
          
          </nav>
        <a href="./Style-CSS/stlye.css"></a>
          </nav>
        
    </header>
<!-- ******************************************************************************** -->

    <main>




        <!-- <div class="container">
            <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn_400x400.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn_400x400.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://pbs.twimg.com/profile_images/883859744498176000/pjEHfbdn_400x400.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
                </div>
            </div>
        </div> -->
    </main>


<!-- ******************************************************************************** -->

    <footer>
      
    </footer>

</body>
</html>