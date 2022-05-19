<?php
include_once "./connection.php";


$sql1="SELECT * from products;";
$result= mysqli_query($conn , $sql1);
$result_check= mysqli_num_rows($result);
                 
if ($result_check > 0) {
    while ($row=mysqli_fetch_assoc($result)) {
        $img= $row['product_image'];
        $product_name= $row['Product_image_name'];
        $product_description=$row['product_description'];
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/singleProduct.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <!--Product Image-->
            <div class="col-lg-4">
                <img src="<?php echo $img;?>" alt="" height="200px" width="300px">
            </div>
            <!--Product Name & Description-->
            <div class="col-lg-8">
                <?php
                echo "<h3>". $product_name. "</h3>";
                echo "<br>";
                echo "<p>". $product_description. "</p>";
                ?>
                <button type="button" class="btn btn-primary btn-s">Add To Cart</button>
            </div>
        </div>  
    </div>
</body>
</html>
