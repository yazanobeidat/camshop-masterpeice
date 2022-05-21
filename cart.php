<?php
include_once "./connection.php";
session_start();
$sessionUserId=3;
$finalTotal=0;
$user_id_final=$_SESSION['userID'];
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
      $str='';

      // $sql2="SELECT product_id FROM cart WHERE user_id='1';";
      // $result2=mysqli_query($conn,$sql2);
      // $result_check=mysqli_num_rows($result2);

      if($result_check > 0){
      


     

          while ($row= mysqli_fetch_assoc($result)) {
            if(isset($_POST['delete'])){
              echo 'delet';
              $OrderNum=$row['order_number'];
              if($_POST['checkbox1']='true'){
                echo 'true';
                $sqlFkey="SET FOREIGN_KEY_CHECKS=0;"; //TO stop checking the forign key
                $result5=mysqli_query($conn,$sqlFkey);
                $sqlDelete="DELETE FROM cart WHERE order_number=$OrderNum";
              $result3=mysqli_query($conn,$sqlDelete);}
              
              // foreach ($_POST["checkbox1"] as $id){
              //   $sqlFkey="SET FOREIGN_KEY_CHECKS=0;"; //TO stop checking the forign key
              //   $result5=mysqli_query($conn,$sqlFkey);
              //    $sqlDelete="DELETE FROM cart WHERE order_number=$id";
              // $result3=mysqli_query($conn,$sqlDelete);}
            
          }

            if (isset($_POST["1"])){
              echo strval($row['order_number']);
             echo gettype(strval($row['order_number']));
              $productId2= $row['product_id'];
              $updateOrderQuantity=$_POST["1"];
              // echo 'v'.$updateOrderQuantity;
              $update_data2 = "UPDATE cart SET order_quantity= '$updateOrderQuantity' WHERE product_id = $productId2;";
              $updateDataQuery=mysqli_query($conn,$update_data2);
               header("Refresh:0");
          
          }
          
              $total=$row['order_price']*$row['order_quantity'];
          ?>
          <form method='post'> 
          <?php
              $order_number=$row['order_number'];
              $product_id=$row['product_id'];
             
              echo " <tr>
               
               <td>". $row['order_number']. "</td>
              
               <td>". $row['product_name']. "</td>
               <td>". $row['order_price']. "</td>
               <td>". $row['product_color']. "</td>
               <td> <input type='number' name='".$row['product_id']."' value='".$row['order_quantity']."'>
              <input type='submit' name= ".strval($row['order_number'])." value='update'>
              </td>
            
               <td>". $total. "</td>
               <td><input type='checkbox' name='checkbox'> </td>
              
                </tr>";
?>
 </form>
                <?php
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
             
               $finalTotal= $finalTotal +$total;
          
          }
      }
       
      ?>
 
  </tbody>
</table>

<form action="" method="post">
  <h3><?php
   echo 'Total: '. $finalTotal;
   $sqlFkey="SET FOREIGN_KEY_CHECKS=0;"; //TO stop checking the forign key
    $result5=mysqli_query($conn,$sqlFkey);
   $insertTotal="INSERT INTO checkout (user_id,product_id, order_number, total) VALUES ('$user_id_final','$product_id','$order_number', '$finalTotal');";
   $resultQuantity= mysqli_query($conn , $insertTotal);
   ?></h3>
<button type="submit" name="delete">Delete</button>
<button type="submit" name="checkout">Submit</button>
    </form>
    
</body>
</html>