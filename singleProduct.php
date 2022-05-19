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
$sql4="SELECT * FROM comments WHERE product_id='$product_id';";
$result4= mysqli_query($conn , $sql4);
$result_check4= mysqli_num_rows($result4);

    if ($result_check4 > 0) {
        while ($row4=mysqli_fetch_assoc($result4)) {

            $commentShow=$comment;
        }
    }
   
}
//product_quantity



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
                <form method="post">
                    <input type='number' name='quantity' value='1'> Quantity
                    <select value="s">
                        <option value="s">S<option>
                        <option value="m">M<option>
                        <option value="l">L<option>
                    </seclect>
                    <br><br>
                    <input type="submit" name='submit' class="btn btn-primary btn-s" value="Add To Cart">
                    <?php
                     
    $updated_quantity=$_POST['quantity'];
    $quantitySql="INSERT INTO cart (user_id, order_quantity) VALUES ('$user_id', '$updated_quantity');";
    $resultQuantity= mysqli_query($conn , $quantitySql);
    echo $resultQuantity;
                    ?>
                </form>
                
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
                    <!-- To show all comments-->
                    <?php
                    $sql5="SELECT user_first_name, user_last_name, product_comment FROM comments WHERE product_id='$product_id';";
                    $result5= mysqli_query($conn , $sql5);
                    $result_check5= mysqli_num_rows($result5);
                    while ($row5=mysqli_fetch_assoc($result5)){
                        echo "<h4>";
                        echo $row5['user_first_name'].' ';
                        echo $row5['user_last_name'];
                        echo "</h4>";
                        echo '<br>';
                        echo "<h5>". $row5['product_comment']. "</h5>";
                        echo '<br>';
                    }
                   
                     ?>
                   
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
