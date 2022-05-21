<?php
include_once "./connection.php";
//Bring the product id from database
session_start();
//DELETE LATER

$productId=$_GET['id'];
echo $productId;

    $sql1="SELECT * from products WHERE product_id='$productId'"; //WHER product_id=$_POST['product_id'];";
$result= mysqli_query($conn , $sql1);
$result_check= mysqli_num_rows($result);

$sql2="SELECT * from user;"; //WHER product_id=$_GET['product_id'];
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
if(isset($_GET['submit'])){
$comment= $_GET['comment'];
$sql3="INSERT INTO comments (product_id, user_id, user_first_name, user_last_name, product_comment) VALUES ('$product_id','$user_id','$first_name','$last_name','$comment');";
$result3= mysqli_query($conn , $sql3);
$sql4="SELECT * FROM comments WHERE product_id='$product_id';";
$result4= mysqli_query($conn , $sql4);
$result_check4= mysqli_num_rows($result4);

    if ($result_check4 > 0) {
        while ($row4=mysqli_fetch_assoc($result4)) {

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
    <link rel="stylesheet" href="./css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/singleProduct.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="container">
        <div class="row singleProductDesc">
            <!--Product Image-->
            <div class="col-lg-6">
                <img src="<?php echo  $product_image;?>" alt="" height="400px" width="400px" class="singleProductImage">
            </div>
            <!--Product Name & Description-->
            <div class="col-lg-6 singleProductDesc">
                <?php
                echo "<h3>". $product_name. "</h3>";
                echo "<br>";
                echo "<p>". $product_description. "</p>";
                echo "<br>";
                echo "<p>". $product_color. "</p>";
                
                ?>
                <div class="row singleProductDesc-divider">
                    <form method="post" class="firstForm">
                        <div class="col-lg-12">
                        <label>Quantity</label> <input type='number' name='quantity' value='1' class="quantityInput text-center"> 
                        
                        
                        <label>Size</label>
                            <select name="size" class="text-center">
                                <option value="S">S<option>
                                <option value="M">M<option>
                                <option value="L">L<option>
                                <option value="XL">XL<option>
                            </seclect>
                            </div> 
                        
                        <div class="col-lg-12 btn">
                            <input type="submit" name='submit' class="btn btn-primary btn-s addToCart" value="Add To Cart">
                        </div>
                        
                        <?php
                            if(isset($_POST['submit'])){
                                if(isset($_SESSION['userID'])){
                                if(!empty($_POST['quantity']) && !empty($_POST['size'])){
                                    $updated_quantity=$_POST['quantity'];
                                    $updated_size=$_POST['size'];
                                $quantitySql="INSERT INTO cart (user_id,product_id, product_name, product_color, order_price, product_size, order_quantity) VALUES ('$user_id','$product_id', '$product_name', '$product_color', '$product_price','$updated_size', '$updated_quantity');";
                                $resultQuantity= mysqli_query($conn , $quantitySql);
                                }
                            }
                            else{
                                header("Location: ./loginPage/login.php");
                            }
                        }
                        ?>
                    </form>
                </div>
                <div class="col-lg-12 categories">
                            <p><b>Categories</b>: <?php echo $product_category?></p>
                        </div>
            </div>
        </div>
        <!--Comment Section-->
     <br>
            <div class="commentsSection">
                <form method="get">
                <div class="col-lg-12">
                    <span class="main-span">Leave a Comment</span>
                    <textarea placeholder="Leave a Comment" name="comment">
                    </textarea>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                    <div class="oldCommentsContanier">
                    <span class="sub-span">Old comments</span>
                    <!-- To show all comments-->
                    <?php
                    $sql5="SELECT user_first_name, user_last_name, product_comment FROM comments WHERE product_id='$product_id';";
                    $result5= mysqli_query($conn , $sql5);
                    $result_check5= mysqli_num_rows($result5);
                    $id=1;
                    while ($row5=mysqli_fetch_assoc($result5)){
                        echo "<h4 class='userName-comment'>";
                        echo $id.'- ';
                        echo $row5['user_first_name'].' ';
                        echo $row5['user_last_name'];
                        echo "</h4>";
                        echo '<br>';
                        echo "<h5 class='userComment-comment'>". $row5['product_comment']. "</h5>";
                        echo '<br>';
                        $id++;
                    }
                    unset($_SESSION['product']);
                     ?>
                     </div>
                </form> 
                <!-- comment -->
            </div>
        </div>
</body>
</html>
