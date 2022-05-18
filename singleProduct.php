<?php
include_once "./connection.php";


$sql1="SELECT * from products;";
$result= mysqli_query($conn , $sql1);
$result_check= mysqli_num_rows($result);

$sql2="SELECT * from user;";
$result2= mysqli_query($conn , $sql2);
$result_check2= mysqli_num_rows($result2);

if ($result_check > 0) {
    while ($row=mysqli_fetch_assoc($result) ) {
        $product_id=$row['product_id'];
        $product_name= $row['product_image_name'];
        $product_image= $row['product_image'];
        $product_code= $row['product_code'];
        $product_category=$row['product_category'];
        $product_price=$row['product_price'];
        $product_quantity=$row['product_quantity'];
        $product_color=$row['product_color'];
        $product_size=$row['product_size'];
        $product_description=$row['product_description'];
        
        //TO add user information
        while($row2=mysqli_fetch_assoc($result2)){
        $user_id=$row2['user_id'];
        $first_name=$row2['user_first_name'];
        $last_name=$row2['user_last_name'];
        }
    }
}
//Comment
if(isset($_POST['submit'])){
$comment= $_POST['comment'];
$sql3="INSERT INTO comments (product_id, user_id, user_first_name, user_last_name, product_comment) VALUES ('$product_id','$user_id','$first_name','$last_name','$comment');";
$result3= mysqli_query($conn , $sql3);
$result_check3= mysqli_num_rows($result3);
if ($result_check3 > 0) {
    while ($row3=mysqli_fetch_assoc($result3)) {
        $product_image= $row3['product_image'];
        $product_name= $row3['Product_image_name'];
        $product_description=$row3['product_description'];
        $commentShow=$comment;
    }
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
                <img src="<?php echo  $product_image;?>" alt="" height="200px" width="300px">
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
        <!--Comment Section-->
        <div class="row">
            <div class="col-lg-6">
                <form method="post">
                    <h2>Leave a Comment</h2>
                    <textarea placeholder="Leave a Comment" name="comment">
                    </textarea>
                    <button type="submit" name="submit" class="btn btn-primary btn-s">Submit</button>
                    <h3>Old comments</h3>
                    <input type="text" name="old comment" value='<?php echo $commentShow;?>'>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
