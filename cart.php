<?php
include_once "./connection.php";
session_start();
$sessionUserId=3;
$arr1 = array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
<table class="table">
  <thead>
    <tr>
      
      <th scope="col"></th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Color</th>
      <th scope="col">Quanity</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $total=1;
      $sql="SELECT * FROM cart";
      $result=mysqli_query($conn,$sql);
      $result_check=mysqli_num_rows($result);

      // $sql2="SELECT product_id FROM cart WHERE user_id='1';";
      // $result2=mysqli_query($conn,$sql2);
      // $result_check=mysqli_num_rows($result2);

      if($result_check > 0){
      





          while ($row= mysqli_fetch_assoc($result)) {
            


            if (isset($_POST["submit"])){
              echo strval($row['order_number']);
             echo gettype(strval($row['order_number']));
              $ordernum= $row['order_number'];
              $updateOrderQuantity=$_POST[$row['order_number']];


             
              // echo 'v'.$updateOrderQuantity;
              

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
              //add image
              echo "<td>". $row['product_name']. "</td>";
              echo "<td>". $row['order_price']. "</td>";
              echo "<td>". $row['product_color']. "</td>";
              echo "<td> <input type='number' name='".$row['order_number']."' value='".$row['order_quantity']."'>
              <a href='cart.php?id=".$row['order_number']."& qun=".$row['order_quantity']."'> <input type='submit' name='submit' value='update'></a>
              </td>";
              $arr1[$row['order_number']]=$row['order_quantity'];
              
              print_r ($arr1);
              // echo $row['product_id'];
              echo "<td>". $total. "</td>";
              echo "</form>";
               echo "</tr>";
              $productId=$row['product_id'];
              $orderNumber=$row['order_number'];
             $productQuantity= $row['order_quantity'];
              // echo 'hello'. $productId;
              // echo $sessionUserId;
              // echo $productQuantity;
           
             
            //  $update_data3 = "UPDATE checkout SET order_quantity= '$updateOrderQuantity' WHERE product_id='$productId2';";
            //  $updateDataQuery=mysqli_query($conn,$update_data3);
             
              
              
        
             
              if(isset($_POST['checkout']))
            {$totalInsert="INSERT INTO checkout (user_id,product_id,order_number,order_quantity,order_subtotal) VALUES ('$sessionUserId','$productId','$orderNumber','$productQuantity','$total');";
            $result3=mysqli_query($conn,$totalInsert);
            echo $result3;
            header("Location: ./checkoutpage/checkout.php");
          }
            
            // 
             
              // $finalTotal=
          
          }
      }
       
      ?>
 
  </tbody>
</table>
<form method="post">


<form action="" method="post">
<button type="submit" name="checkout">Submit</button>
    
    </form>
</body>
</html>