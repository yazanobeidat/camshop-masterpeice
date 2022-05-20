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


    <link rel="stylesheet" href="../css/product.css">



</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
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
          <nav>
          <nav class="navbar navbar-expand-lg bg-ligth">

          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="../ProductsPage/Dress.php">Dress</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="../ProductsPage/Accessories.php">Accessories</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="../ProductsPage/Men_shoes.php">Men Shoes</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="../ProductsPage/Suit.php">Suit</a>

            </ul>
          <ul class="nav-item">

            <a class="nav-link active btn btn-outline-light" aria-current="page" href="../ProductsPage/Women_shoes.php">Women Shoes</a>

            </ul>
          
          </nav>
        
    </header>
<!-- ********************************************************************************************************************* -->


<!-- ********************************************************************************************************************* -->





<main >

<div class="container">
<h2>Product</h2>
<h4 style="color:black">Category:Suit </h4>
<div class="row">

    <?php

    // select products

    $sql_query="SELECT * FROM products ;";
    $result = $conn->query($sql_query);
    $result_check4= mysqli_num_rows($result);

    // check result
    if($result_check4 > 0){

        while($row=mysqli_fetch_assoc($result)){

            $img=$row['product_image'];
            $productName=$row['product_name'];
            $price=$row['product_price'];


            $category=$row['product_category'];
            $productDis=$row['product_description'];
            // check category
            if($category==='Suit'){

            ?>
<!-- <div class=" col-md-3">

   image echo 
<img src='<?php echo $img ?>'style="height:80% ; width:100% ;"  >
    
product name echo 
 <h4>Producyt Name: <?php  echo $productName ?></h4>

 product price echo 
<h4>$<?php echo $price ?></h4>

category echo
<h5 style="color:red;"><?php echo $category ?></h5>



</div> -->
    <div class="col-md-3 ">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img src="<?php echo $img ?>"style="height:80% ; width:100% ;">
                </a>
                <ul class="product-links">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                </ul>
                <a href="" class="add-to-cart"><?php echo $productDis ?></a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#"><?php  echo $productName ?></a></h3>
                <div class="price"><?php echo $price ?></div>
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




<!-- ********************************************************************************************************************* -->




















</body>
</html>