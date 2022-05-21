<?php
include_once "./connection.php";
session_start();
$sessionUserId = $_SESSION['userID'];
$arr1 = array();
$finalTotal=0;

if(isset($_GET['order_num']))
{
  $sqlFkey="SET FOREIGN_KEY_CHECKS=0;"; // TO stop checking the forign key
  $result5=mysqli_query($conn,$sqlFkey);
  $dele = $_GET['order_num'];
  $sqlDelete="DELETE FROM cart WHERE order_number=$dele";
  $result3=mysqli_query($conn,$sqlDelete);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f32d43040b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/bootstrap.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/cart.css?v=<?php echo time(); ?>">
    <title>Your Cart</title>
</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Order Number</th>
      <th scope="col">Product  Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
      <th scope="col">Quanity</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Delete Item</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $total=1;
      $sql="SELECT * FROM cart";
      $result=mysqli_query($conn,$sql);
      $result_check=mysqli_num_rows($result);

      if($result_check > 0){

          while ($row= mysqli_fetch_assoc($result)) {
 
            if (isset($_POST["submit"])){
              echo strval($row['order_number']);
             echo gettype(strval($row['order_number']));
              $ordernum= $row['order_number'];
              $updateOrderQuantity=$_POST[$row['order_number']];
              if(isset($updateOrderQuantity))
              {
              $update_data2 = "UPDATE cart SET order_quantity= '$updateOrderQuantity' WHERE order_number = $ordernum;";
              $updateDataQuery=mysqli_query($conn,$update_data2);
              }
              else
          {
            $OrderQuantity=$row['order_quantity'];
            $ordernum = $row['order_number'];
            $update_data2 = "UPDATE cart SET order_quantity= '$OrderQuantity' WHERE order_number = $ordernum;";
              $updateDataQuery=mysqli_query($conn,$update_data2);
          }            
               header("Refresh:0");
          
          }

              $total=$row['order_price']*$row['order_quantity'];
          
              echo "<tr>";
              echo "<form method='post'>";
              echo "<td>". $row['order_number']. "</td>";
              echo "<td> <img src='".$row['product_image']."' height='100px' width='100px'>. </td>";
              echo "<td>". $row['product_name']. "</td>";
              echo "<td>". $row['order_price']. "</td>";
              echo "<td>". $row['product_color']. "</td>";
              echo "<td> <input type='number' name='".$row['order_number']."' value='".$row['order_quantity']."'>
               <input type='submit' name='submit' class='btn btn-primary btn-sm' value='update'></a>
              </td>";
              $arr1[$row['order_number']]=$row['order_quantity'];

              echo "<td>". $total. "</td>";
              echo "<td>
               <a href='cart.php?order_num=".$row['order_number']."'><input class='deleteInput' type='button' name='".$row['order_number']."'><li class='fa fa-xmark'></li></a>
              </td>";
              echo "</form>";
               echo "</tr>";
              $productId=$row['product_id'];
              $orderNumber=$row['order_number'];
             $productQuantity= $row['order_quantity'];
    
            if(isset($_POST['checkout'])){
              
              $totalInsert="INSERT INTO checkout (user_id,product_id,order_number,order_quantity,order_subtotal,total) VALUES ('$sessionUserId','$productId','$orderNumber','$productQuantity','$total','$finalTotal');";
              $result3=mysqli_query($conn,$totalInsert);
              echo $result3;
              header("Location: ./checkoutpage/checkout.php");
          }
           $finalTotal= $finalTotal +$total;
          
          }
      }
      $_SESSION['total']= $finalTotal;
      ?>
  </tbody>
</table>
    <form method="post" class="toCheckOut">
      <!-- <h3>
        <?php
          echo 'Total: '. $finalTotal;
        ?>
       </h3> -->
      <div class="card">
        <h5 class="card-header">Cart totals</h5>
        <div class="card-body">
          <p class="card-text">Your <b>total</b> price is: <h3>
          <?php
          echo $finalTotal. '$';
          ?>
          </h3> Approve your order by clicking the <b>Submit</b> button</p>
          <button type="submit" class="'btn btn-primary btn-sm" name="checkout">Submit</button>
        </div>
      </div>  
    </form>
    <br>
    <div class="clearfix"></div>

    <!-- Footer -->
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
                        <p class="copyright">Company Name © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   
  </body>
</html>

