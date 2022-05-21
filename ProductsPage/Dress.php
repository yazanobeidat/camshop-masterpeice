<?php

include_once "../connection.php";

?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/footer.css">

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



</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light sticky-xxl-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><i class="fa-solid fa-shirt"></i>Elegant</a>
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
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            
              </div>  
            </div>
          </nav>
          

     
    </header>
<!-- ********************************************************************************************************************* -->


<!-- ********************************************************************************************************************* -->

<main>
<br><br><br>
<div class="container bg-light sticky-xxl-top">
<div class="wow">
  <p>Accessories</p> 
</div >

<!-- **************************************************Mini Nav******************************************************************* -->


<br>
<div id='mini'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <ul class="nav-item">
    <button type="button" class="btn btn-lg btn-outline-dark lg"><a class="nav-link active " href="../ProductsPage/Dress.php">Dress</a></button>

</ul>
<ul class="nav-item">
<button type="button" class="btn btn-lg btn-outline-dark"><a class="nav-link active  " aria-current="page" href="../ProductsPage/Accessories.php">Accessories</a></button>




</ul>
<ul class="nav-item">
<button type="button" class="btn btn-lg btn-outline-dark"><a class="nav-link active " aria-current="page" href="../ProductsPage/Men_shoes.php">Men Shoes</a></button>

</ul>
<ul class="nav-item">
<button type="button" class="btn btn-lg btn-outline-dark"><a class="nav-link active " aria-current="page" href="../ProductsPage/Suit.php">Suit</a>
</button>


</ul>
<ul class="nav-item">
<button type="button" class="btn btn-lg btn-outline-dark"><a class="nav-link active " aria-current="page" href="../ProductsPage/Women_shoes.php">Women Shoes</a> </button>




</ul>
  </div>
</nav>
</div>
<br><br>
<div class="row">




    <?php

    // select products

    $sql_query="SELECT * FROM products ;";
    $result = $conn->query($sql_query);
    $result_check4= mysqli_num_rows($result);

    $sql_query2="SELECT product_id FROM cart ;";
    $result2 = $conn->query($sql_query2);
    $result_check4= mysqli_num_rows($result2);
    // check result
    if($result_check4 > 0){

        while($row=mysqli_fetch_assoc($result)){

            $img=$row['product_image'];
            $productName=$row['product_name'];
            $price=$row['product_price'];
            $category=$row['product_category'];

            $product_id=$row['product_id'];
// product page buttom check
while($row2=mysqli_fetch_assoc($result2)){
            if(isset($_POST['submit'])){
                $userId=$_SESSION['userID'];
                $_SESSION['product']=$product_id;
                echo  $_SESSION['product'];
            $inserId="INSERT INTO cart (product_id, user_id) VALUE ('$product_id','$userId');";
            $result3 = $conn->query($sql_query3);
            }}



            // check category
            if($category==='dress'){

            ?>
            <div class="col-md-3 ">
    <div class="product-grid">
        <div class="product-image">
            <a href="#" class="image">
                <img class="pic-1" src="<?php echo $img ?> "style="height:80% ; width:100% ;">
            </a>
            

        </div>
        <div class="product-content">

            <h3 class="title" ><a href="#"  ><?php  echo $productName ?></a></h3>
            <div class="price">$<?php echo $price ?></div>


<!-- product page button -->

<form action="../singleProduct.php" method="post">
<input type="submit" name="submit" value="View Product">
</form>


                <!-- Button -->
            <form action="../singleProduct.php" method="post">

            <input type="submit" name="submit" value="View Product"class="add-to-cart" >

            </form>
        </div>
    </div>
</div>
            <?php 
            }
        }
    }
 ?>

</div>
</div>


</main>
<!-- ********************************************************************************************************************* -->
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